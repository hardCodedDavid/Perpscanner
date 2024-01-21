<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
<!doctype html>
<html lang="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<script async src="https://www.googletagmanager.com/gtag/js?id=G-9CYVGBD33S"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-9CYVGBD33S');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/cssa89c.css?family=Roboto%20Mono" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"><link rel="icon" type="image/png" href="static/img/theta2c59.ico" />
<link rel="icon" type="image/png" href="static/img/theta2c59.ico?v1252" />

<link rel="stylesheet" href="{{ asset('assets/style/style.css') }}" />
<script type="module" src="{{ asset('assets/script/helper.js') }}"></script>
<script type="module" src="{{ asset('assets/script/alert.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-light" style="height: 56px; border-bottom: var(--divsep); white-space: nowrap;">
<div style="left: 16px; position: absolute;">
<a class="navbar-brand logo" href="index.html" style="font-size: 48px; color: var(--textcolor);">Θrion</a>
<a class="navbar-brand logo" href="index.html" style="font-size: 16px; color: var(--textcolor); margin-left: -8px;"> Data</a>
</div>
<div style="float: left; margin-left: 220px; position: absolute;">
<a href="/screener" class="navbar-link">Screener</a>
<a href="/alert" class="navbar-link">Alerts</a>
<a href="/overview" class="navbar-link">Charts</a>
<!-- <a onclick="window.open('https://docs.orionterminal.com/')" href="#" class="navbar-link">CLI</a> -->
<b style="position: relative; right: 20px; top: -16px; margin-right: -32px; font-size: 12px; background-color: #536900;">&nbsp;NEW&nbsp;</b>
<a onclick="window.open('https://discord.com/invite/ffw7SyBW4w')" href="#" class="navbar-link">Discord</a>
<a onclick="window.open('https://twitter.com/OrionTerminal')" href="#" class="navbar-link">Twitter</a>

<a class="navbar-link" item_category="reflink" style="color: #f0b90b;" href="#" onclick="window.open('https://partner.bybit.com/b/orionterminal')">Trade on Bybit</a>
<b style="position: relative; right: 72px; top: -16px; margin-right: -32px; font-size: 12px; background-color: #536900;">10% OFF FEES</b>
</div>
<div style="position: absolute; right: 0; height: 100%; background-color: var(--bg);">
<div style="margin-top: 12px; margin-left: 16px;">
<div style="float: left; margin-left: 16px; margin-right: 16px;">
<div id="filter-button" style="display: none;">
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16">
<path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
</svg>
</div>
<div id="filter-dropdown-content" style="position: absolute; z-index: 10; right: 5px; padding: 10px; display: none;">
<select multiple id="available-filters" style="min-width: 150px; max-width: 250px; height: 120px; padding: 2px; border: var(--divsep); background-color: var(--bg); color: var(--textcolor); overflow-y: auto;">
<option disabled style="text-align: center; color: var(--textcolor);">Filter</option>
</select>
</div>
</div>
</div>
</div>
</nav>
<div id="filters" style="display: none; border: var(--divsep); position: absolute; z-index: 2; top: 50%; left: 50%; -webkit-transform: translate(-50%, -50%); transform: translate(-50%, -50%); background-color: var(--bg); width: 50%; height: 40%; border-radius: 8px;">
<div style="float: left; height: 100%; width: 22%; border-right: var(--divsep); padding: 1px;">
<select multiple id="filters-list" style="width: 100%; height: 100%; background-color: var(--bg); color: var(--textcolor); padding: 0; overflow-x: hidden; overflow-y: auto;">
</select>
</div>
<div style="float: right; height: 100%; width: 78%;">
<div style="float: right; margin-right: 8px; margin-top: 4px;" onclick="$('#filters').hide(); render_filters();">
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
<path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
</svg>
</div>
<div id="filter-editor" style="margin-top: 32px; margin-left: 18px; margin-right: 18px;">
<svg style="float: right; margin-top: 10px;" onclick="delete_filter()" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
<path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
</svg>
<label for="filter-name">Name</label>
<input id="filter-name" style="font-size: 16px; width: 30%; height: 40px;"></input>
<br>
<label for="filter-condition">Condition</label>
<input id="filter-condition" style="font-size: 16px; width: 100%; height: 40px;"></input>
<br>
<div style="height: 10px;"></div>
<div style="float: left;">
<label for="filter-exchange">Exchange</label>
<select class="option-select" id="filter-exchange" style="width: 150px;"></select>
</div>
<div style="margin-left: 45%;">
<label for="filter-quote">Symbol quote</label>
<select class="option-select" id="filter-quote" style="width: 150px;"></select>
</div>
<button style="float: right; margin-top: -30px; width: 80px; height: 32px;" onclick="save_filter()">Save</button>
</div>
</div>
</div>
<div id="alertPopup">
</div>
<script>
  var EXCHANGES;

  $.getJSON('/api/info', function(info) {
    EXCHANGES = info['EXCHANGES']
  })

  $('#sidebar-button').click(function() {
    if (localStorage.getItem('show-sidebar') == '0') {
      $('#sidebar').css('width', '280px')
      $('#sidebar-list').show()
      $('#maindiv').css('left', '280px')
      localStorage.setItem('show-sidebar', '1');
    } else {
      $('#sidebar').css('width', '38px')
      $('#sidebar-list').hide()
      $('#maindiv').css('left', '38px')
      localStorage.setItem('show-sidebar', '0');
    }
  });

  $('#close-announcement').click(function() {
    localStorage.setItem('hide-announcement-0', '1');
    $('#announcement').hide()
  })

  if (localStorage.getItem('hide-announcement-0') == '1') {
    $('#announcement').hide()
  }

  if (localStorage.getItem('show-sidebar') == '0') {
    $('#sidebar').css('width', '38px')
    $('#sidebar-list').hide()
    $('#maindiv').css('left', '38px')
  }

  $('#filter-button').click(function() {
    $('#filter-dropdown-content').toggle()
  });

  $('#filter-dropdown-content').click(function() {
    let selected = $('#filter-dropdown-content').find(":selected").val();
    if (selected == 'add_new') {
      $('#filters').show()
    } else {
      localStorage.setItem('current-filter', selected);
    }
    $('#filter-dropdown-content').hide()
  })

  function select_filter(id) {
    let filters = JSON.parse(localStorage.getItem('filters'));

    filters.forEach(function(filter) {
      if (filter['id'] == id) {
        $('#filter-editor').show(); 
        $('#filter-name').val(filter['name'])
        $('#filter-condition').val(filter['condition'])
        
        $('#filter-quote').empty()
        $('#filter-exchange').empty()
        Object.entries(EXCHANGES).forEach(function([exchange_id, exchange], index) {
          $('#filter-exchange').append(`<option ${(exchange_id == filter['exchange']) ? 'selected' : ''} value="${exchange_id}">${exchange['name']}</option>`)
          if (exchange_id == filter['exchange'] || index == 0) {
            $('#filter-quote').append(`<option ${(!(filter['quote'])) ? 'selected' : ''} value="">All</option>`)
            exchange['quote_currencies'].forEach(function(quote) {
              $('#filter-quote').append(`<option ${(quote == filter['quote']) ? 'selected' : ''} value="${quote}">${quote}</option>`)
            })
          }
        })
      }
    })
    
  }

  function save_filter() {
    let filters = JSON.parse(localStorage.getItem('filters'));
    let selected = $('#filters-list').find(":selected").val();

    if (!selected) {
      selected = add_new_filter()
    }
    filters.forEach(function(filter, index) {
      if (filter['id'] == selected) {
        filters[index]['name'] = $('#filter-name').val();
        filters[index]['condition'] = $('#filter-condition').val();
        filters[index]['quote'] = $('#filter-quote').find(":selected").val();
        filters[index]['exchange'] = $('#filter-exchange').find(":selected").val();
      }
    })

    localStorage.setItem('filters', JSON.stringify(filters));
    render_filters();
  }


  function delete_filter() {
    let filters = JSON.parse(localStorage.getItem('filters'));
    let selected = $('#filters-list').find(":selected").val();

    filters = filters.filter(filter => filter['id'] != selected)

    localStorage.setItem('filters', JSON.stringify(filters));
    render_filters();
  }


  function add_new_filter() {
      let filters = JSON.parse(localStorage.getItem('filters'));
      let id = parseInt(Date.now());

      filters.push({'id': id, 'name': 'New Filter'});
      localStorage.setItem('filters', JSON.stringify(filters));
      render_filters();

      return id;
  }

  function render_filters() {
    if (localStorage.getItem('filters')) {
      let filters = JSON.parse(localStorage.getItem('filters'));
      let selected_edit = $('#filters-list').find(":selected").val();
      let selected = localStorage.getItem('current-filter')
      if (!selected_edit) {$('#filter-editor').hide();}

      $('#available-filters').html(`<option ${(!selected) ? 'selected' : ''} value="" style="font-weight: bold;">None</option>`);
      $('#filters-list').empty();
      filters.forEach(function(filter) {
        $('#available-filters').append(`<option ${(selected == filter['id']) ? 'selected' : ''} value="${filter['id']}">${filter['name']}</option>`);
        $('#filters-list').append(`<option ${(selected_edit == filter['id']) ? 'selected' : ''} class="selectable" value="${filter['id']}" onclick=select_filter(${filter['id']})>${filter['name']}</option>`);
      })
      $('#filters-list').append('<option class="selectable" value="" onclick="add_new_filter()">+</option>');
      $('#available-filters').append('<option value="add_new" style="font-weight: bold;">...Create/Edit</option>');
    } else {
      let filters = [{'id': 1, 'name': 'Mid-High Volume', 'condition': 'volume_8h > 25000000', 'exchange': 'binanceusdm', 'quote': ''},
                    {'id': 2, 'name': 'Mid-High Cap', 'condition': 'marketcap > 1000000000', 'exchange': 'binanceusdm', 'quote': ''},
                    {'id': 3, 'name': 'High Activity', 'condition': 'ticks_15m > 3000', 'exchange': 'binanceusdm', 'quote': ''}];
      
      localStorage.setItem('filters', JSON.stringify(filters));
      render_filters();
    }
  }

  render_filters();

</script>
<title>Alerts</title>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('assets/style/alert.css') }}">
</link>
<script type="module" src="{{ asset('assets/script/alert2.js') }}"></script>
<div id="maindiv" style="height: 100%; overflow: hidden">
<div style="width: 70%; height: 93%; float: left; overflow: auto">
<div>
<div style="width: 100%; border-bottom: var(--divsep); display: flex; justify-content: center; ">
<h style="font-size: 24px; float: left;">Alerts</h>
<svg onClick="$('.floating').show()" style="float: left; margin: 8px;" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
<path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
</svg>
</div>
<div style="width: 100%;" id="alertList">
</div>
<br>
<div style="text-align:center;" id="addAlert">
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
<path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
<path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
</svg>
</div>
</div>
</div>
<div style="width: 30%; height: 100%; float: left; border-left: var(--divsep); overflow: auto;">
<div style="width: 100%; border-bottom: var(--divsep);">
<h style="font-size: 24px; display: flex; justify-content: center;">History</h>

</div>
<div style="height: 93%;" id="alertHistory" style="overflow: auto;">
</div>
</div>
<div class="floating" style="display: none">
<div class="card text-white bg-dark mb-3">
<div class="card-header">
<b>Alerts - Docs</b>
<svg onClick="$('.floating').hide()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" style="float: right; margin-left: 8px; margin-top: 4px;">
<path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
</svg>
</div>
<div class="card-body" style="height: 650px; width: 800px;">
<a style="font-size: 18px;">Example conditions:</a><br>
<a style="font-family:'Roboto Mono', sans-serif; color: #777777">volume_15m > 1000000 and volume_15m <
2000000 and change_15m> 2</a><br>
<a style="font-size: 14px;">^ triggers if volume is higher than 1,000,000 but lower than 2,000,000 and
percentage change over 15 minutes is over 2%</a><br>
<a style="font-family:'Roboto Mono', sans-serif; color: #777777">ticks_15m > 5000 and change_15m <
-2</a><br>
<a style="font-size: 14px;">^ triggers if coin has over 5000 ticks and goes down over -2% in 15
minutes</a><br><br>
<a style="font-size: 18px;">Example Messages:</a><br>
<a style="font-family:'Roboto Mono', sans-serif; color: #777777">{symbol} has gone up by
{change_15m}% in the last 15 minutes!</a><br>
<a style="font-size: 14px;">^ BTC/USDT has gone up by 2.03% in the last 15 minutes!</a><br>
<div style="float: left; padding: 8px;">
<a>Available Variables:</a>
<div style="height: 330px; overflow: auto;">
<ul class="list-group" id="availableVariables">
<li class="list-group-item">symbol</li>
</ul>
</div>
</div>
<div style="float: left; padding: 8px;">
<a>Available Operators:</a>
<ul class="list-group" id="availableOperators" style="height: 330px; overflow: auto;">
<li class="list-group-item">and</li>
<li class="list-group-item">or</li>
<li class="list-group-item">==</li>
<li class="list-group-item">!=</li>
<li class="list-group-item">></li>
<li class="list-group-item"><</li>
<li class="list-group-item">>=</li>
<li class="list-group-item"><=</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</body>

</html>