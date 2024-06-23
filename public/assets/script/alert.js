import {to_alias, fetch_info, fetch_screener} from './helper.js';

const info = await fetch_info();
const SCREENER_DATA = await fetch_screener();
const ALIAS_SCREENER = info['ALIAS_SCREENER'];

var coins = {};

function append_history(alert) {
    var history = localStorage.getItem('alertHistory');
    if (!history) {history = [];} else {history = JSON.parse(history);}
    
    history.unshift(alert);
    localStorage.setItem('alertHistory', JSON.stringify(history.slice(0, 500)));
}

function get_alerts() {
    // var alerts = localStorage.getItem('alerts');
    var alerts = userAlerts;

    if (alerts && alerts.length > 0) {
        return alerts.map(alert => (
            {
                'id': alert.id, 
                'alertName': alert.name, 
                'browserAlert': alert.browser, 
                'telegramName': alert.telegram_alert, 
                'telegramAlert': alert.telegram_alert, 
                'screenerHighlight': alert.highlight, 
                'soundAlertFile': alert.soundAlertFile, 
                'paused': alert.status, 
                'alertCondition': alert.condition.replaceAll('stdev_', 'volatility_'), 
                'alertMessage': alert.message.replaceAll('stdev_', 'volatility_'),
            }
        ));
    }
    return [];
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

function show_notification(name, message, timestamp, show_time) {
    $('#alertPopup').append(`
        <div class="card text-white bg-dark mb-3 alertCard" id="${timestamp}">
            <div class="card-header">
            <a style="color: #22BB22;">${name}</a>
            <svg onClick="$('#' + ${timestamp}).remove()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" style="float: right; margin-left: 8px; margin-top: 4px;">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
            </svg>
            <a style="float: right;">${formatDate(new Date(timestamp))}</a>
            </div>
    
            <div class="card-body">
            ${message}
            </div>
        </div>
    `);
    setTimeout(() => {$('#' + timestamp).remove()}, show_time);
}

function sendMessage(text) {
    let token = telegramToken;
    let chatId = localStorage.getItem('chat_id');
  
      var apiUrl = "/api/message/send";
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

function trigger_alert(name, message, sound_file, screener_highlight, notification, symbol, id, telegramAlert) {
    console.log('triggered', alert)

    alert = {name: name, screenerHighlight: screener_highlight, timestamp: Date.now(), cooldown_time: Date.now(), message: message, symbol: symbol, id: id}
    try{
        if (sound_file) {
            (new Audio('https://data.orionterminal.com/static/sound/' + sound_file)).play();
        }
    }
    catch{
        console.log('No sound❌');
    }
    show_notification(name, message, Date.now(), 10000)

    if (notification) {
        let title = name;
        let icon = '/static/img/theta.ico';
        let body = message;
        var notification = new Notification(title, { body, icon });
        
        setTimeout(() => {notification.close()}, 5000);

        if (document.hasFocus()) {
            notification.close();
        }
        notification.onclick = function(){
            window.parent.focus();
            notification.close();
        }
    }

    if (telegramAlert) {
        let msg = `<b>${name}</b>\n\n<b>${message}✅</b>`;

        sendMessage(msg);
        console.log("Message Sent 💥");
    } else {
        console.log("Not allowed ❌");
    }

    append_history(alert)
}

function get_last_triggered(history, alert, symbol) {
    for (let i = 0; i < history.length; i++) {
        var triggered = history[i]
        if (triggered.id == alert.id && triggered.symbol == symbol) {
            return triggered.cooldown_time;
        } else if (triggered.cooldown_time < Date.now() - (1000*60*30)) {
            return 0
        }
    }
    return 0
}

function update_cooldown(prev_cooldown, symbol) {
    var history = get_history();
    for (let i = 0; i < history.length; i++) {
        var triggered = history[i]
        if (triggered.cooldown_time == prev_cooldown && triggered.symbol == symbol) {
            history[i].cooldown_time = Date.now();
            break;
        }
    }

    localStorage.setItem('alertHistory', JSON.stringify(history.slice(0, 500)));
}

function check_triggers() {
    var history = get_history();
    var alerts = get_alerts();
    alerts.forEach(function(alert) {
        if (alert.paused == 1) {
            Object.entries(coins).forEach(([symbol, data]) => {
                var condition = alert.alertCondition.toLowerCase().replaceAll('symbol', symbol.split('-')[0]).replaceAll('and', '&&').replaceAll('or', '||');
                var message = alert.alertMessage.replaceAll('{symbol}', symbol.split('-')[0]);
                
                Object.entries(data).sort(function([k1, v1], [k2, v2]) {return k2.length - k1.length}).forEach(([key, value]) => {
                    if ($.isArray(value)) {value = value[value.length-1];}
                    
                    condition = condition.replaceAll(key.toLowerCase(), value);
                    message = message.replaceAll('{' + key + '}', value);
                });
                
                if (eval(condition) == true) {
                    var last_cooldown = get_last_triggered(history, alert, symbol.split('-')[0])

                    if (Date.now() - last_cooldown > 1000*60*5) {
                        trigger_alert(alert.alertName, message, alert.soundAlertFile, alert.screenerHighlight, alert.browserAlert, symbol.split('-')[0], alert.id, alert.telegramAlert);
                    } else {
                        update_cooldown(last_cooldown, symbol.split('-')[0]);
                    }
                }
                
            });
        }
    });
}


$(document).ready(function() {
    function connect_screener() {
        var ws = new WebSocket(websocket_url + '?interval=1.5');
      
        ws.onmessage = function(event) {
            let data = JSON.parse(event.data);

            Object.entries(data).forEach(([symbol, data]) => {
                Object.entries(to_alias(data, ALIAS_SCREENER)).forEach(([key, value]) => {
                    coins[symbol][key] = value;
                })
            })
            check_triggers();
        };
      
        ws.onclose = function(e) {
          console.log('Socket is closed. Reconnect will be attempted in 5 secs', e.reason);
          setTimeout(function() {
            connect_screener();
          }, 5000);
        };
      
        ws.onerror = function(err) {
          console.error('Socket encountered error: ', err.message, 'Closing socket');
          ws.close();
        };
    }

    $('#loader').hide();

    Object.entries(SCREENER_DATA).forEach(([symbol, data]) => {
        if (!(symbol in coins)) {coins[symbol] = {}; Object.values(ALIAS_SCREENER).forEach(k => {coins[symbol][k] = undefined;})};
        Object.entries(to_alias(data, ALIAS_SCREENER)).forEach(([key, value]) => {
            coins[symbol][key] = value;
        })
        console.log('update_coins ✅');
    })

    connect_screener();
});





