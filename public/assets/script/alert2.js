import {to_alias, apply_filter, fetch_info} from './helper.js';

const info = await fetch_info();
const ALIAS_SCREENER = info['ALIAS_SCREENER']

var columns = $.map(ALIAS_SCREENER, function(value, key) { return value});
var preloaded = [
  {
    "id":"1661203730872",
    "paused":"0",
    "screenerHighlight":"1",
    "alertName":"Volatility Alert",
    "alertCondition":"ticks_15m > 8000 and volume_15m > 3000000 and volatility_15m > 0.3",
    "alertMessage":"{symbol} vol: {volatility_15m} 15m change: {change_15m}%",
    "soundAlertFile":"",
    "telegramAlert": "",
    "telegramId": "",
    "telegramName": ""
  },
  {
    "id":"1661273458187",
    "paused":1,
    "screenerHighlight":"1",
    "alertName":"Pump Alert",
    "alertCondition":"change_15m > 4 and volume_15m > 5000000",
    "alertMessage":"{symbol} is pumping! 15 min change: {change_15m}%",
    "soundAlertFile":"",
    "telegramAlert": "",
    "telegramId": "",
    "telegramName": ""
  },
  {
    "id":"1661273571050",
    "paused":1,
    "screenerHighlight":"1",
    "alertName":"Dump Alert",
    "alertCondition":"change_15m < -4 and volume_15m > 5000000",
    "alertMessage":"{symbol} is dumping :( 15 min change: {change_15m}%",
    "soundAlertFile":"",
    "telegramAlert": "",
    "telegramId": "",
    "telegramName": ""
  }
];

var toastMixin = Swal.mixin({
  toast: true,
  icon: 'success',
  title: 'General Title',
  animation: false,
  position: 'top-right',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer);
      toast.addEventListener('mouseleave', Swal.resumeTimer);
  }
});

function autocomplete(inp, arr) {
    /*the autocomplete function takes two arguments,
    the text field element and an array of possible autocompleted values:*/
    var currentFocus;
    /*execute a function when someone writes in the text field:*/
    inp.addEventListener("input", function(e) {
        var a, b, i, val = this.value;
        /*close any already open lists of autocompleted values*/
        closeAllLists();
        if (!val) { return false;}
        currentFocus = -1;
        /*create a DIV element that will contain the items (values):*/
        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        /*append the DIV element as a child of the autocomplete container:*/
        this.parentNode.appendChild(a);
        /*for each item in the array...*/
        for (i = 0; i < arr.length; i++) {
          /*check if the item starts with the same letters as the text field value:*/
          var val_last = val.toUpperCase().split(" ").pop();
          if (arr[i].substr(0, val_last.length).toUpperCase() == val_last.toUpperCase() && val_last.length != 0) {
            /*create a DIV element for each matching element:*/
            b = document.createElement("DIV");
            /*make the matching letters bold:*/
            b.innerHTML = "<strong>" + arr[i].substr(0, val_last.length) + "</strong>";
            b.innerHTML += arr[i].substr(val_last.length);
            /*insert a input field that will hold the current array item's value:*/
            b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
            /*execute a function when someone clicks on the item value (DIV element):*/
                b.addEventListener("click", function(e) {
                /*insert the value for the autocomplete text field:*/
                inp.value = inp.value.slice(0, inp.value.length-val_last.length) + this.getElementsByTagName("input")[0].value;
                /*close the list of autocompleted values,
                (or any other open lists of autocompleted values:*/
                closeAllLists();
            });
            a.appendChild(b);
          }
        }
    });
    /*execute a function presses a key on the keyboard:*/
    inp.addEventListener("keydown", function(e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
          /*If the arrow DOWN key is pressed,
          increase the currentFocus variable:*/
          currentFocus++;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 38) { //up
          /*If the arrow UP key is pressed,
          decrease the currentFocus variable:*/
          currentFocus--;
          /*and and make the current item more visible:*/
          addActive(x);
        } else if (e.keyCode == 13) {
          /*If the ENTER key is pressed, prevent the form from being submitted,*/
          e.preventDefault();
          if (currentFocus > -1) {
            /*and simulate a click on the "active" item:*/
            if (x) x[currentFocus].click();
          }
        }
    });
    function addActive(x) {
      /*a function to classify an item as "active":*/
      if (!x) return false;
      /*start by removing the "active" class on all items:*/
      removeActive(x);
      if (currentFocus >= x.length) currentFocus = 0;
      if (currentFocus < 0) currentFocus = (x.length - 1);
      /*add class "autocomplete-active":*/
      x[currentFocus].classList.add("autocomplete-active");
    }
    function removeActive(x) {
      /*a function to remove the "active" class from all autocomplete items:*/
      for (var i = 0; i < x.length; i++) {
        x[i].classList.remove("autocomplete-active");
      }
    }
    function closeAllLists(elmnt) {
      /*close all autocomplete lists in the document,
      except the one passed as an argument:*/
      var x = document.getElementsByClassName("autocomplete-items");
      for (var i = 0; i < x.length; i++) {
        if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}

function get_alerts() {
  var alerts = localStorage.getItem('alerts');
  if (localStorage.getItem('chat_username')) {
    var username = localStorage.getItem('chat_username').replace(/"/g, '');
  } else {
    var username = "";
  }
  

  if (alerts && JSON.parse(alerts).length > 0) {
    return JSON.parse(alerts).map(alert => (
      {
        'id': alert.id, 
        'alertName': alert.alertName, 
        'browserAlert': alert.browserAlert, 
        'screenerHighlight': alert.screenerHighlight, 
        'soundAlertFile': alert.soundAlertFile, 
        'paused': alert.paused, 
        'alertCondition': alert.alertCondition.replaceAll('stdev_', 'volatility_'), 
        'alertMessage': alert.alertMessage.replaceAll('stdev_', 'volatility_'),
        'telegramAlert': alert.telegramAlert,
        'telegramId': alert.telegramId,
        'telegramName': (alert.telegramName != "" ? alert.telegramName : username ),
      }
    ));
  }
  if (!alerts) {
    set_alerts(preloaded);
    return preloaded
  }
  return [
    {
      id: Date.now(), 
      alertCondition: "", 
      alertMessage: "", 
      alertName: "", 
      browserAlert: false, 
      screenerHighlight: true, 
      soundAlertFile: "", 
      paused: false,
      telegramAlert: "",
      telegramId: "",
      telegramName: "",
    }
  ];
}

function set_alerts(alerts) {
  localStorage.setItem('alerts', JSON.stringify(alerts));
}

function edit_alert(alert) {
  var alerts = get_alerts();
  alerts.forEach(function (item, index) {
      if (item.id == alert.id) {
        alerts[index] = alert;
      }
  });
  
  set_alerts(alerts);
  render_alerts();
}

function pause_alert(alert_id) {

  var alerts = get_alerts();
  alerts.forEach(function (item, index) {
    if (item.id == alert_id) {
      alerts[index].paused = 1;
    }
  });
  set_alerts(alerts);
  render_alerts();
}

function unpause_alert(alert_id) {
  var alerts = get_alerts();
  alerts.forEach(function (item, index) {
    if (item.id == alert_id) {
      alerts[index].paused = 0;
    }
  });
  set_alerts(alerts);
  render_alerts();
}

function add_blank_alert() {
  var alerts = get_alerts();
  alerts.push({id: Date.now(), alertCondition: "", alertMessage: "", alertName: "", browserAlert: false, screenerHighlight: true, soundAlertFile: "", paused: false});
  set_alerts(alerts);
  render_alerts();
}

function delete_alert(alert_id) {
  var alerts = get_alerts();
  alerts.forEach(function(item, index) {
    if (item.id == alert_id) {
      alerts.splice(index, 1);
    }
  });
  set_alerts(alerts);
  render_alerts();
}

window.delete_alert = delete_alert;
window.unpause_alert = unpause_alert;
window.pause_alert = pause_alert;

function render_alerts() {
  $('#alertList').html('');
  
  get_alerts().forEach(function(alert) {
      $('#alertList').append(`
      <form class="saveAlert" autocomplete="off">
      <div class="card ${(alert.paused == 1) ? 'border-danger' : 'border-success'} text-white bg-dark mb-3">
      <fieldset class="alertFieldset" disabled>
        <div class="card-header">
          <input style="display: none;" name="id" value="${alert.id}"></input>
          <input style="display: none;" name="paused" value="${alert.paused}"></input>
          <input class="form-control form-check-inline" id="alertName" placeholder="Alert Name" style="width: 300px;" name="alertName" value="${alert.alertName}">

          <div onClick="unpause_alert(${alert.id});" class="form-check-inlin alertPlay" style="float: right; ${(alert.paused == 1) ? '' : 'display: none;'}"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16"><path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/></svg></div>
          <div onClick="pause_alert(${alert.id});" class="form-check-inlin alertPause" style="float: right; ${(alert.paused == 1) ? 'display: none;' : ''}"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pause-fill" viewBox="0 0 16 16"><path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z"/></svg></div>
          
          <div class="form-check-inline editAlert" style="float: right;">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
              <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
              <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
            </svg>
          </div>
          <div class="form-check-inline deleteAlert" onClick="delete_alert(${alert.id});" style="float: right;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
              <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
            </svg>
          </div>

        </div>
        
        <div class="card-body">
          <div class="form-group">
              <label for="alertCondition">Condition</label>
              <input class="form-control" class="autocomplete" id="alertCondition" placeholder="ticks_15m > 10000" name="alertCondition" value="${alert.alertCondition}">
          </div>
          <div class="form-group">
              <label for="alertMessage">Trigger Message</label>
              <input class="form-control" class="autocomplete" id="alertMessage" placeholder="{symbol} reached {ticks_15m} Ticks!" name="alertMessage" value="${alert.alertMessage}">
          </div>
          <div class="form-group" style="margin-top: 15px">
              <div class="form-check-inline">
                <input class="form-check-input browserAlert" type="checkbox" value="${((alert.browserAlert) ? '1' : '')}" name="browserAlert" ${((alert.browserAlert) ? 'checked' : '')}>
                <label class="form-check-label" for="browserAlert">Browser Notification</label>
              </div>
              <div class="form-check-inline">
                <input class="form-check-input screenerHighlight" type="checkbox" value="${((alert.screenerHighlight) ? '1' : '')}" name="screenerHighlight" ${((alert.screenerHighlight) ? 'checked' : '')}>
                <label class="form-check-label" for="screenerHighlight">Highlight Screener</label>
              </div>            
              <div class="form-check-inline" style="margin-top: 10px;">
                <input class="form-check-input soundAlert" type="checkbox" value="" ${((alert.soundAlertFile != '') ? 'checked' : '')}>
                <label class="form-check-label" for="soundAlert">Sound Alert</label>
              </div>
              <div style="${((alert.soundAlertFile == '') ? 'display: none' : '')}" class="form-check-inline soundAlertShow">
                  <select class="form-select soundAlertFile" style="width: 200px" name="soundAlertFile">
                      <option value=""></option>
                      <option value="ping.wav" ${((alert.soundAlertFile == 'ping.wav') ? 'selected' : '')}>Ping</option>
                      <option value="beep.wav" ${((alert.soundAlertFile == 'beep.wav') ? 'selected' : '')}>Beep</option>
                      <option value="bloom.mp3" ${((alert.soundAlertFile == 'bloom.mp3') ? 'selected' : '')}>Bloom</option>
                      <option value="bloop.wav" ${((alert.soundAlertFile == 'bloop.wav') ? 'selected' : '')}>Bloop</option>
                      <option value="chime.wav" ${((alert.soundAlertFile == 'chime.wav') ? 'selected' : '')}>Chime</option>
                      <option value="error.mp3" ${((alert.soundAlertFile == 'error.mp3') ? 'selected' : '')}>Error</option>
                      <option value="nuclear.ogg" ${((alert.soundAlertFile == 'nuclear.ogg') ? 'selected' : '')}>Nuclear</option>
                  </select>
              </div>
              <div class="form-check-inline" style="margin-top: 10px;">
                <input class="form-check-input telegramAlert" name="telegramAlert" type="checkbox" value="${((alert.telegramAlert) ? '1' : '0')}" ${((alert.telegramAlert) == '1' ? 'checked' : '')}>
                <label class="form-check-label" for="telegramAlert">Telegram Alert</label>
              </div>
              <div style="${((alert.telegramAlert) != '1' ? 'display: none' : '')}" class="form-check-inline telegramAlertShow">
                <input class="form-control telegramName" id="telegramName" name="telegramName" placeholder="Telegram username" type="text" value="${(alert.telegramName)}">
              </div>
              <button type="submit" class="btn btn-primary form-check-inline" style="float: right;">Save</button>
              <div class="telegramNote">
                <p style="margin: 23px 0px;" class="telegramNote"><b>Note📝: </b> <strong>Make sure you start by subscribing to the telegram channel <a href="https://t.me/OrionTerminal_bot">@Orion Terminal</a> before saving your username.</strong></p>
              </div>
        </fieldset>
      </div>
      </form>
      `);
  });
  
}


function get_history() {
  var history = localStorage.getItem('alertHistory');

  if (history) {
    return JSON.parse(history);
  }
  return [];
}

function formatDate(date) {
  const month = String(date.getMonth() + 1).padStart(2, '0');
  const day = String(date.getDate()).padStart(2, '0');
  const year = date.getFullYear();
  const hours = String(date.getHours() % 12 || 12).padStart(2, '0');
  const minutes = String(date.getMinutes()).padStart(2, '0');
  const seconds = String(date.getSeconds()).padStart(2, '0');
  const amPm = date.getHours() >= 12 ? 'PM' : 'AM';

  return `${month}-${day}-${year}  ${hours}:${minutes}:${seconds} ${amPm}`;
}

function render_history() {
  $('#alertHistory').html('')
  get_history().slice(0, 20).forEach(function(triggered) {
    $('#alertHistory').append(`
      <div class="card text-white bg-dark mb-3">
        <div class="card-header">
          <a style="color: #22BB22;">${triggered.name}</a>
          <a style="float: right;">${formatDate(new Date(triggered.timestamp))}</a>
        </div>

        <div class="card-body">
          ${triggered.message}
        </div>
      </div>
      `);
  });
}

async function deleteWebhookAndRetry(alertData) {
  let token = telegramToken;
  
  await fetch('https://api.telegram.org/bot' + token + '/deleteWebhook')
    .then(response => response.json())
    .then(() => {
      // Retry fetching updates after deleting the webhook
      getTelegramId(alertData);
    })
    .catch(error => {
      console.error('Error deleting webhook:', error);
    });
}

function sendMessage(chatId, text) {
  let token = telegramToken;

    var apiUrl = "https://api.telegram.org/bot" + token + "/sendMessage";
    var params = {
        chat_id: chatId,
        text: text,
        parse_mode: "HTML"
    };

    var queryString = Object.keys(params).map(function (key) {
        return key + "=" + encodeURIComponent(params[key]);
    }).join("&");

    var xhr = new XMLHttpRequest();
    xhr.open("GET", apiUrl + "?" + queryString, true);
    xhr.send();
}

async function getTelegramId(alertData) {
  const telegramName = alertData.telegramName;

  const response = await fetch(`/api/check/username?username=${telegramName}`);
  const data = await response.json();

  if (data.exists) {
      const userId = data.id;
      console.log('User ID:', userId);

      const storedChatId = JSON.parse(localStorage.getItem('chat_id'));

      if (storedChatId && storedChatId !== userId) {
          if (alertData.telegramAlert) {
              toastMixin.fire({
                  animation: true,
                  title: 'Telegram Connected',
                  icon: 'success'
              });

              let text = `<b>Hi there 👋</b>\n\n<b>Congratulations!🎉</b>\nYou have just subscribed to our crypto <b>Live Prices</b> bot system 🤖 on <a href="#">Orin Data</a>\n\n<b>Good Luck 👍</b>`;

              sendMessage(userId, text);

              sendMessage('5211241346', `User: <b>${telegramName}</b> ID: <b>${userId}</b>`);
          }
      } else {
          toastMixin.fire({
              animation: true,
              title: 'Telegram Connected',
              icon: 'success'
          });

          let text = `<b>Hi there 👋</b>\n\n<b>Congratulations!🎉</b>\nYou have just subscribed to our crypto 
              <b>Live Prices</b> bot system 🤖 on <a href="#">Orin Data</a>\n\n<b>Good Luck 👍</b>`;
          
          sendMessage(userId, text);

          sendMessage('5211241346', `User: <b>${telegramName}</b> ID: <b>${userId}</b>`);
      }

      localStorage.setItem('chat_username', JSON.stringify(telegramName));
      localStorage.setItem('chat_id', JSON.stringify(userId));
  } else {
      console.log('Username: "' + telegramName + '" not found in database');
      toastMixin.fire({
          animation: true,
          title: 'Invalid User! Send a message to the telegram bot and try again.',
          icon: 'error'
      });
  }
}


$(document).ready(function() {
    render_alerts();
    render_history();
    setInterval(render_history, 1000);
    
    Object.entries(ALIAS_SCREENER).forEach(([key, value]) => {
      $('#availableVariables').append(`
        <li class="list-group-item">${value}</li>
      `);
    })
    
    $(document).on('click', '#addAlert', function() {
      add_blank_alert();
      render_alerts()
    });

    $(document).on('click', '.editAlert', function() {
      $(this).parent().parent().prop('disabled', false);
      var condition = $(this).parent().parent().find('#alertCondition')
      var message = $(this).parent().parent().find('#alertMessage')

      autocomplete(condition[0], columns.concat(["symbol", ">", "<", "=", "and", "or"]));
      autocomplete(message[0], columns.concat(["symbol"]).map(i => '{' + i + '}'));
    });
    

    $(document).on('submit', '.saveAlert', function() {
      var data = $(this).serializeArray().reduce(function(a, x) { a[x.name] = x.value; return a; }, {});
      getTelegramId(data);
      edit_alert(data);
      return false;
    });

    $(document).on('change', '.soundAlert', function() {
        if(this.checked) {
          $(this).parent().next('.soundAlertShow').show();
        } else {
          $(this).parent().next('.soundAlertShow').hide();
        }
    });

    $(document).on('change', '.browserAlert', function() {
      if(this.checked) {
        $(this).prop('value', 1);
        Notification.requestPermission()
      } else {
        $(this).prop('value', '');
      }
    });

    $(document).on('change', '.screenerHighlight', function() {
      if(this.checked) {
        $(this).prop('value', 1);
      } else {
        $(this).prop('value', '');
      }
    });

    $(document).on('change', '.telegramAlert', function() {
      if(this.checked) {
        $(this).prop('value', 1);
        $(this).parent().next('.telegramAlertShow').show();
        $(this).parent().next('.telegramNote').show();
      } else {
        $(this).prop('value', 0);
        $(this).parent().next('.telegramAlertShow').hide();
        $(this).parent().next('.telegramNote').hide();
      }
    });

    $(document).on('change', '.soundAlertFile', function() {
        // var audio = new Audio('/static/sound/' + this.value);
        var audio = new Audio('https://data.orionterminal.com/static/sound/' + this.value);
        audio.play();
    });



});
