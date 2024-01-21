import {to_alias, apply_filter, fetch_info, fetch_screener} from './helper.js';

const info = await fetch_info();
const SCREENER_DATA = await fetch_screener();
const ALIAS_SCREENER = info['ALIAS_SCREENER']
const CATEGORIES_SCREENER = info['CATEGORIES_SCREENER']
// const EXCHANGES = info['exchanges']

var triggered_alerts = [];
var last_update = 0;
var coins = {};
var table;

var active_chart = '';
window.loaded_icons = [];

var render_functions = {
    'symbol': function (data, type, row) {
        let coin = data.split('-')[0].split('/')[0].toLowerCase().replace('1000', '')
        if (!window.loaded_icons.includes(coin)) {
            $(`<style>.icon-${coin} { content: url("https://cdn.jsdelivr.net/gh/vadimmalykhin/binance-icons/crypto/${coin}.svg"); }</style>`).appendTo('body');
            window.loaded_icons.push(coin)
        }
        

        return `<div style="width: 170px;" id="${data}" class="symbol-row">
                
                <svg id="${data}-inactive" style="float: left; ${(active_chart == data) ? 'display: none;' : ''}" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                </svg>
                
                <div id="${data}-active" style="height: 474px; float: left; ${(active_chart == data) ? '' : 'display: none;'}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                        <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                    </svg>
                </div>

                <div style="float: left; margin-left: 4px; width: 20px; height: 20px;" class="icon-${coin}" loading="lazy"> </div>

                <div style="float: left">
                    &nbsp;${data.split('-')[0]}
                </div>
                </div>`;
    },
    'change': function (data, type, row) {
        if (data == null) {if (type == "sort") {return 0} else {return ''}}
        return `<a style="color: ${color_num(data)}">${data.toFixed(2)}%</a>`
    },
    'volume': function (data, type, row) {
        if (data == null) {if (type == "sort") {return 0} else {return ''}}
        return data.toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '$';
    },
    'vdelta': function (data, type, row) {
        if (data == null) {if (type == "sort") {return 0} else {return ''}}
        return `<a style="color: ${color_num(data)}">${data.toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}$</a>`;
    },
    'ticks': function (data, type, row) {
        if (data == null) {if (type == "sort") {return 0} else {return ''}}
        return data.toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    },
    'volatility': function (data, type, row) {
        if (data == null) {if (type == "sort") {return 0} else {return ''}}
        return data.toFixed(3);
    },
    'OI/MC': function (data, type, row) {
        if (data == null) {if (type == "sort") {return 0} else {return ''}}
        return (data * 100).toFixed(2) + '%';
    },
    'OI': function (data, type, row) {
        if (data == null) {if (type == "sort") {return 0} else {return ''}}
        if (type == "sort" || type == "type") {
            return data[2]
        }
        if (get_oi_type() == 1) {  // notional
            return `<div style="min-width: 180px; overflow:hidden">${data[0].toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")} <a style="float: right;">(<span style="color: ${color_num(data[2])}">${data[2].toFixed(2)}%</span>)<a></div>`
        } else {  // usd
            return `<div style="min-width: 180px; overflow:hidden">${data[1].toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}$ <a style="float: right">(<span style="color: ${color_num(data[2])}">${data[2].toFixed(2)}%</span>)<a></div>`
        }
        
    },
    'openinterest': function (data, type, row) {
        if (data == null) {if (type == "sort") {return 0} else {return ''}}
        if (type == "sort" || type == "type") {
            return data[1]
        }
        if (get_oi_type() == 1) {  // notional
            return data[0].toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        } else {  // usd
            return data[1].toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '$';
        }
    },
    'funding': function (data, type, row) {
        if (data == null) {if (type == "sort") {return 0} else {return ''}}
        return `<a style="color: ${color_num(data)}">${data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",")}%</a>`;
    },
    'acc_ratio': function (data, type, row) {
        if (data == null) {if (type == "sort") {return 0} else {return ''}}
        return data.toFixed(2) + '%';
    },
    'pos_ratio': function (data, type, row) {
        if (data == null) {if (type == "sort") {return 0} else {return ''}}
        return data.toFixed(2) + '%';
    },
    'acc_change': function (data, type, row) {
        if (data == null) {if (type == "sort") {return 0} else {return ''}}
        if (type == "sort" || type == "type") {
            return data[1]
        }
        return `<div style="min-width: 130px; overflow:hidden">${data[0].toFixed(2)} <a style="float: right;">(<span style="color: ${color_num(data[1])}">${data[1].toFixed(2)}%</span>)<a></div>`
    },
    'pos_change': function (data, type, row) {
        if (data == null) {if (type == "sort") {return 0} else {return ''}}
        if (type == "sort" || type == "type") {
            return data[1]
        }
        return `<div style="min-width: 130px; overflow:hidden">${data[0].toFixed(2)} <a style="float: right;">(<span style="color: ${color_num(data[1])}">${data[1].toFixed(2)}%</span>)<a></div>`

    },
    'marketcap': function (data, type, row) {
        if (data == null) {if (type == "sort") {return 0} else {return ''}}
        return data.toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '$';
    },
}

function color_num(num) {
    if (num > 0) {
        return 'green';
    } if (num < 0) {
        return '#DD303E';
    }
    return 'gray';
}

function get_use_columns() {
    var legal = $.map(ALIAS_SCREENER, function(value, key) { return value });
    var columns = localStorage.getItem('screenerColumns');
    
    if (!columns) {columns = ['price', 'ticks_5m', 'change_5m', 'volume_5m', 'volatility_15m', 'volume_1h', 'vdelta_1h', 'OI_change_8h', 'openinterest', 'funding_rate'];} else {columns = JSON.parse(columns);}
    columns = columns.filter(col => legal.includes(col));

    return columns
}

function set_use_columns(columns) {
    localStorage.setItem('screenerColumns', JSON.stringify(columns));
}

function set_update_speed(speed) {
    localStorage.setItem('screenerUpdateSpeed', speed);
}

function set_oi_type(type) {
    localStorage.setItem('screenerOIType', type);
}

function get_oi_type() {
    var type = localStorage.getItem('screenerOIType');
    if (type) {
        return type
    }
    return 0
}


function get_update_speed() {
    var speed = localStorage.getItem('screenerUpdateSpeed');
    if (speed) {
        return speed
    } 
    return 0
}


function save_columns() {
    var columns = [];
    var update_speed = $('#update-speed').val()

    $('#screener-columns li').each(function() {
        columns.push($(this).attr('value'))
    });

    set_use_columns(columns)
}

function update_coins() {

    console.log('Fire!!');
        // $.getJSON('http://127.0.0.1:8001/api/screener', function(data) {
            Object.entries(SCREENER_DATA).forEach(([symbol, data]) => {
                if (!(symbol in coins)) {coins[symbol] = {}; Object.values(ALIAS_SCREENER).forEach(k => {coins[symbol][k] = undefined;})};
                Object.entries(to_alias(data, ALIAS_SCREENER)).forEach(([key, value]) => {
                    coins[symbol][key] = value;
                })
            })
            update_table();
            console.log('update_coins ✅');
        // });
}

function render_columns() {
    var columns = get_use_columns()
    $('#screener-columns').html('')
    $('#available-columns').html('')

    columns.forEach(function(value) {
        $('#screener-columns').append(`<li value="${value}" class="list-group-item">${(value.charAt(0).toUpperCase() + value.slice(1)).replaceAll('_', ' ')}</li>`)
    });

    var categories = {'Misc': []};
    Object.entries(ALIAS_SCREENER).forEach(([key, col]) => {
        if (!columns.includes(col)) {
            for (const [prefix, name] of Object.entries(CATEGORIES_SCREENER)) {
                if (col.startsWith(prefix)) {
                    if (!(name in categories)) {
                        categories[name] = [];
                    }
                    categories[name].push(col)
                    break;
                }
            }
            if (!Object.keys(CATEGORIES_SCREENER).some(substr => col.startsWith(substr))) {
                categories['Misc'].push(col)
            }
        };
    });
    
    Object.entries(categories).forEach(([category, items]) => {
        let category_name = category.toLowerCase().replaceAll(' ', '-');

        $('#available-columns').append(`
        <div class="list-group-vertical sub-category">
            <a>${category}</a>
            <br>
            <ol id="available-columns-${category_name}" class="list-group connected-sortable draggable list-group-vertical ui-sortable available-sub"></ol>
        </div>
        `)
        
        items.forEach(function(item) {
            $(`#available-columns-${category_name}`).append(`
                    <li value="${item}" class="list-group-item ui-sortable-handle">${(item.charAt(0).toUpperCase() + item.slice(1)).replaceAll('_', ' ')}</li>
            `)
        });
    });

    $(".draggable, .draggable").sortable({
        connectWith: ".connected-sortable",
        stack: ".connected-sortable ul"
    }).disableSelection();

}

function update_table(force = false) {
    table.clear();

    if ((!force) && Date.now() - last_update < get_update_speed()*1000) {
        return false;
    }
    last_update = Date.now();
    
    let symbols = apply_filter(coins)
    let use_columns = get_use_columns();

    symbols.forEach(function(symbol) {
        let columns = [symbol];
        let data = coins[symbol];

        use_columns.forEach(function(col) {
            columns.push(data[col]);
        });
        
        table.row.add(columns);
    })

    table.draw();
    if (active_chart) {
        $('#tv-chart').css('top', $('#' + $.escapeSelector(active_chart)).offset().top + $('#maindiv').scrollTop() - 36);
    }
}

function draw_table() {
    $('#coinTable').DataTable().clear().destroy();

    var column_defs = [];
    var columns = get_use_columns();
    columns.unshift('symbol')

    $('#screener-head').html('')
    columns.forEach(function(col, index) {
        $('#screener-head').append(`<th>${(col.charAt(0).toUpperCase() + col.slice(1)).replaceAll('_', ' ')}</th>`)
        column_defs.push({
            render: render_functions[Object.keys(render_functions).filter(key => col.startsWith(key))[0]],
            defaultContent: "",
            targets: [index]
        });
    });
    
    table = $("#coinTable").DataTable({
        searching: false, 
        paging: false, 
        info: false,

        rowCallback: function (row, data) {
            if (triggered_alerts.includes(data[0].split('-')[0])) {
                $(row).addClass('triggered');
            }
        },

        columnDefs: column_defs
    });

    render_columns();
    update_table(true);
}


$(document).ready(function(){
    $('#filter-button').show();

    draw_table();

    $(document).on('click', '.symbol-row', function() {
        let symbol = this.id.split('-')[0];
        let exchange = this.id.split('-')[1];

        if ($ ('#' + $.escapeSelector(this.id) + '-inactive').is(":visible")) {
            $('#' + $.escapeSelector(this.id)+ '-inactive').hide()
            $('#' + $.escapeSelector(this.id) + '-active').show()
            
            if (active_chart) {
                $('#' + $.escapeSelector(active_chart) + '-inactive').show()
                $('#' + $.escapeSelector(active_chart) + '-active').hide()
            }

            active_chart = this.id;

            $('#tv-chart').show()
            $('#tv-chart').css('top', $('#' + $.escapeSelector(active_chart)).offset().top + $('#maindiv').scrollTop() - 32)
            
            var tv_symbol = 'BINANCE:BTCUSDTPERP';
            if (exchange == 'binanceusdm') {
                var tv_symbol = 'BINANCE:' + symbol.replace('/', '') + 'PERP'
            }

            new TradingView.widget({
                "autosize": true,
                "symbol": tv_symbol,
                "interval": "1",
                "timezone": "Etc/UTC",
                "theme": "dark",
                "toolbar_bg": "#161a1e",
                "enable_publishing": false,
                "save_image": false,
                "container_id": 'tv-chart',
            });
        } else {
            active_chart = '';
            $('#tv-chart').hide()
            $('#' + $.escapeSelector(this.id) + '-inactive').show()
            $('#' + $.escapeSelector(this.id) + '-active').hide()
        }
        
        
    })

    // $(document).on('click', '#screener-head', function() {
    //     if (active_chart) {
    //         $('#tv-chart').css('top', $('#' + $.escapeSelector(active_chart)).offset().top + $('#maindiv').scrollTop() - 32);
    //     }
    // });
    

    // $(document).on('click', '#closeScreenerSettings', function() {
    //     save_columns();
    //     draw_table();
    //     $('#screenerSettings').hide()
    // });

    // $('#update-speed-label').html(get_update_speed())
    // $('#update-speed').val(get_update_speed())
    // $(document).on('mousemove', '#update-speed', function() {
    //     $('#update-speed-label').html($('#update-speed').val())
    //     return true;
    // });
    // $(document).on('change', '#update-speed', function() {
    //     set_update_speed($(this).val())
    // });

    // $('#use-notional-oi-check').prop('checked', ((get_oi_type() == 1) ? true : false));
    // $(document).on('change', '#use-notional-oi-check', function() {
    //     if(this.checked) {
    //         set_oi_type(1)
    //     } else {
    //         set_oi_type(0)
    //     }
    // });

    // $(document).on('click', '#filter-dropdown-content', function() {
    //     update_table();
    // });
      
    function connect_screener() {
        var ws = new WebSocket('wss://data.orionterminal.com/api/ws/screener');
      
        ws.onmessage = function(event) {
            let data = JSON.parse(event.data);
            if (Object.keys(data).length == 0) {return}
            Object.entries(data).forEach(([symbol, data]) => {
                Object.entries(to_alias(data, ALIAS_SCREENER)).forEach(([key, value]) => {
                    coins[symbol][key] = value;
                })
            })
            update_table();
            console.log(event);
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
      
    connect_screener();
    update_coins();
    // get_triggered_alerts();
    // setInterval(get_triggered_alerts, 1500);
    setInterval(update_coins, 60000);
});