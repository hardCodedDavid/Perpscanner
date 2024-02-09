<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <!doctype html>
    <html lang="en">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    
    @yield('style')

    @yield('script')
    
    <nav class="navbar navbar-expand-lg navbar-light" style="height: 56px; border-bottom: var(--divsep); white-space: nowrap;">
    <div style="left: 16px; position: absolute;">
    <a class="navbar-brand logo" href="{{ route('screener') }}" style="font-size: 48px; color: var(--textcolor);">Orion</a>
    <a class="navbar-brand logo" href="{{ route('screener') }}" style="font-size: 16px; color: var(--textcolor); margin-left: -8px;"> Data</a>
    </div>
    <div style="float: left; margin-left: 220px; position: absolute;">
    <a href="{{ route('screener') }}" class="navbar-link">Screener</a>
    <a href="{{ route('alert') }}" class="navbar-link">Alerts</a>
    <a href="{{ route('overview') }}" class="navbar-link">Charts</a>
    <!-- <a onclick="window.open('https://docs.orionterminal.com/')" href="#" class="navbar-link">CLI</a> -->
    <!-- <b style="position: relative; right: 20px; top: -16px; margin-right: -32px; font-size: 12px; background-color: #536900;">&nbsp;NEW&nbsp;</b>
    <a onclick="window.open('https://discord.com/invite/ffw7SyBW4w')" href="#" class="navbar-link">Discord</a>
    <a onclick="window.open('https://twitter.com/OrionTerminal')" href="#" class="navbar-link">Twitter</a> -->
    
    <a class="navbar-link" item_category="reflink" style="color: #f0b90b;" href="#" onclick="window.open('https://partner.bybit.com/b/orionterminal')">Trade on Bybit</a>
    <b style="position: relative; right: 72px; top: -16px; margin-right: -32px; font-size: 12px; background-color: #536900;">10% OFF FEES</b>
    </div>
    <div style="position: absolute; right: 0; height: 100%; background-color: var(--bg);">
    <div style="margin-top: 12px; margin-left: 16px;">
    <div style="float: left; margin-top: 2px;">
    <svg onClick="$('#screenerSettings').show(); return false;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16" style="float: right; margin-top: 2px;">
    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
    </svg>
    </div>
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

@yield('content')





</body>
</html>