import {to_alias, fetch_info, fetch_screener} from './helper.js';

const info = await fetch_info();
const SCREENER_DATA = await fetch_screener();
const ALIAS_SCREENER = info['ALIAS_SCREENER']


var candles = {};
var coins = {};


function intToString(value) {
    var suffixes = ["", "K", "M", "B", "T"];
    var suffixNum = Math.floor((value.toFixed(0)).length/3);
    var shortValue = parseFloat((suffixNum != 0 ? (value / Math.pow(1000,suffixNum)) : value).toPrecision(4));
    if (shortValue % 1 != 0) {
        shortValue = shortValue.toFixed(2);
    }
    return shortValue+suffixes[suffixNum];
}

function randomSeed(seed) {
    let a = seed.split("").map(s => s.charCodeAt(0)).reduce((a, b) => a + b, 0)

    var t = a += 0x6D2B79F5;
    t = Math.imul(t ^ t >>> 15, t | 1);
    t ^= t + Math.imul(t ^ t >>> 7, t | 61);

    return ((t ^ t >>> 14) >>> 0) / 4294967296;
}

function legendAsTooltipPlugin({ className, style = { backgroundColor:"#000000", color: "var(--textcolor)" } } = {}) {
    let legendEl;

    function init(u) {
        legendEl = u.root.querySelector(".u-legend");

        legendEl.classList.remove("u-inline");
        className && legendEl.classList.add(className);

        uPlot.assign(legendEl.style, {
            textAlign: "left",
            pointerEvents: "none",
            display: "none",
            position: "absolute",
            left: 0,
            top: 0,
            zIndex: 100,
            boxShadow: "2px 2px 10px rgba(0,0,0,0.5)",
            ...style
        });


        const overEl = u.over;

        overEl.appendChild(legendEl);

        overEl.addEventListener("mouseenter", () => {legendEl.style.display = null;});
        overEl.addEventListener("mouseleave", () => {legendEl.style.display = "none";});
    }

    function toFloat(s) {
        let f = s.replaceAll('.', '').replace('%', '').replace('$', '').replace('K', '000').replace('M', '000000').replace('B', '000000000').replace('T', '000000000000')
        if (s.length > 15) {
            f = Math.inf
        }
        return parseFloat(f)
        
    }

    function update(u) {
        const { left, top } = u.cursor;
        legendEl.style.transform = "translate(" + left + "px, " + top + "px)";
        
        let items = Array.from(legendEl.getElementsByTagName("tr"));
        items.sort((a, b) => toFloat(b.getElementsByClassName("u-value")[0].innerHTML) - toFloat(a.getElementsByClassName("u-value")[0].innerHTML))

        legendEl.innerHTML = '';
        items.forEach(function(item, index) {
            item.style.display = 'none'
            if (index < 5 || index > (items.length - 5) || (item.style.opacity == 1 && items[index-1].style.opacity != 1)) {item.style.display = 'table-row'}
            legendEl.appendChild(item)
        });
    }

    return {
        hooks: {
            init: init,
            setCursor: update,
        }
    };
}

const matchSyncKeys = (own, ext) => own == ext;

const cursorOpts = {
    lock: true,
    focus: {
        prox: 16,
    },

    sync: {
        key: "cursorSync",
        setSeries: true,
        match: [matchSyncKeys, matchSyncKeys],
    },
};

class pairsChart {
    constructor(id) {
        let opts = {
            title: "% Change",
            width: $('#' + id).width(),
            height: $('#' + id).height(),

            cursor: cursorOpts,
            plugins: [
                legendAsTooltipPlugin(),
            ],

            scales: {
                x: {
                    time: true,
                },

            },
            series: [
                {},
            ],
            axes: [
                {
                    stroke: "#DDDDDD"
                },
                {
                    stroke: "#DDDDDD",
                    scale: "%",
                    values: (u, vals, space) => vals.map(v => +v.toFixed(1) + "%"),
                },
            ],
        };

        this.data = [[]]
        this.chart = new uPlot(opts, this.data);
        document.getElementById(id).appendChild(this.chart.root);
    }

    set_data(data, labels) {
        let sidx = 1;

        if (this.chart.series.length != data.length) {
            while (this.chart.series.length > 1) {
                this.chart.delSeries(sidx);
            }

            while (this.chart.series.length < data.length) {
                let symbol = labels[labels.length-this.chart.series.length]
                this.chart.addSeries({
                    stroke: `rgba(${parseInt(randomSeed(symbol+'r')*255)},${parseInt(randomSeed(symbol+'g')*255)},${parseInt(randomSeed(symbol+'b')*255)},1)`, 
                    label: symbol,
                    value: (u, v) => v == null ? "-" : v.toFixed(2) + "%",
                    points: {
                        show: false
                    },
                    scale: '%'
                }, sidx)
            }
        }

        this.data = data
        this.chart.setData(this.data);
    }
}

class volChart {
    constructor(id) {
        let opts = {
            title: "Cumulative Volume",
            width: $('#' + id).width(),
            height: $('#' + id).height(),

            cursor: cursorOpts,
            plugins: [
                legendAsTooltipPlugin(),
            ],

            scales: {
                x: {
                    time: true,
                },
                y: {
                    //distr: 4,
                    //log: 100,
                }

            },
            series: [
                {},
            ],
            axes: [
                {
                    stroke: "#DDDDDD"
                },
                {
                    stroke: "#DDDDDD",
                    scale: "$",
                    values: (u, vals, space) => vals.map(v => intToString(v)),
                },
            ],
        };

        this.data = [[]]
        this.chart = new uPlot(opts, this.data);
        document.getElementById(id).appendChild(this.chart.root);
    }

    set_data(data, labels) {
        let sidx = 1;

        if (this.chart.series.length != data.length) {
            while (this.chart.series.length > 1) {
                this.chart.delSeries(sidx);
            }

            while (this.chart.series.length < data.length) {
                let symbol = labels[labels.length-this.chart.series.length]
                this.chart.addSeries({
                    stroke: `rgba(${parseInt(randomSeed(symbol+'r')*255)},${parseInt(randomSeed(symbol+'g')*255)},${parseInt(randomSeed(symbol+'b')*255)},1)`, 
                    //fill: `rgba(${parseInt(Math.random()*255)},${parseInt(Math.random()*255)},${parseInt(Math.random()*255)},0.1)`, 
                    label: symbol,
                    value: (u, v) => v == null ? "-" : intToString(v) + "$",
                    points: {
                        show: false
                    },
                    scale: '$'
                }, sidx)
            }
        }

        this.data = data
        this.chart.setData(this.data);
    }
}

function get_candles() {
    let n_candles = $('#candles-option').val();
    $.getJSON(`/api/candles?timeframe=1m&limit=${n_candles}`, function(data) {
        Object.entries(data).forEach(([symbol, data]) => {
            candles[symbol] = data;
        });
        $('#filter-range').slider("value", 0);
    });
}

$(document).ready(function() {
    let cursorSync = uPlot.sync("cursorSync");
    var chart = new pairsChart('pairs-chart');
    var chart2 = new volChart('vol-chart');

    //var scatter = new scatterChart('scatter-chart');

    try {
        $.getJSON('/api/market_data', function(data) {
            if (Object.keys(data).length != 0) {
                $('#pairs-chart-container').css('width', 'calc(100% - 350px)')
                $('#maindiv').append('<div id="market-data" style="font-size: 14px; position: absolute; right: 0; width: 300px; margin: 10px; margin-top: 150px"></div>')
                Object.keys(data).forEach(function(key) {
                    let v = data[key]
                    if (key.includes('ratio')) {
                        v = v.toFixed(2) + '%'
                    } else if (key.includes('openinterest') || key.includes('marketcap')) {
                        v = v.toFixed(0).toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + '$'
                    } else if (key.includes('/')) {
                        v = (v*100).toFixed(3) + '%'
                    }

                    $('#market-data').append(`<div>
                                                <a style="float: left">${key.replaceAll('_', ' ')}</a>
                                                <a style="float: right">${v}</a>
                                            </div><br>`)
                })
            }
        })
    } catch {}


    function update_chart() {
        let data = [candles[Object.keys(candles)[0]].map(s => s[0] / 1000)];
        let data2 = [candles[Object.keys(candles)[0]].map(s => s[0] / 1000)];
        let labels = [];
        
        let filter_option = $('#filter-option').val();
        let [max_val, min_val] = $('#filter-range').slider("values");
        [max_val, min_val] = [-max_val, -min_val]
        
        Object.entries(candles).forEach(([symbol, candles]) => {
            if (symbol in coins) {
                let val = (Array.isArray(coins[symbol][filter_option])) ? coins[symbol][filter_option][1] : coins[symbol][filter_option];
                if (val >= min_val && val <= max_val) {
                    let close = candles.map(c => c[4]);
                    close = close.map(c => (c / close[0]) * 100 - 100);
                    data.push(close);

                    let volume = candles.map(c => c[5]*c[4]).map((sum => value => sum += value)(0));;
                    data2.push(volume)

                    labels.push(symbol.split('-')[0])
                }
            }
        })

        chart.set_data(data, labels);
        chart2.set_data(data2, labels);
    }

    $("#filter-range").slider({
        range: true,
        min: -500,
        max: 0,
        values: [-500000, 0],
        slide: function(event, ui) {
            $("#filter-to").html(parseFloat((-ui.values[1]).toFixed(3)).toLocaleString())
            $("#filter-from").html(parseFloat((-ui.values[0]).toFixed(3)).toLocaleString())
        },
        change: function(event, ui) {
            $("#filter-to").html(parseFloat((-ui.values[1]).toFixed(3)).toLocaleString())
            $("#filter-from").html(parseFloat((-ui.values[0]).toFixed(3)).toLocaleString())
            if (Object.keys(candles).length) {update_chart()}
        }
    });

    $("#filter-option").on('change', function() {
        let filter_option = this.value;

        let max_val = Math.max(...Object.values(coins).map(v => (((Array.isArray(v[filter_option])) ? v[filter_option][1] : v[filter_option])) ?? 0))
        let min_val = Math.min(...Object.values(coins).map(v => (((Array.isArray(v[filter_option])) ? v[filter_option][1] : v[filter_option])) ?? 0))

        $('#filter-range').slider("option", "step", parseFloat((Math.abs(min_val - max_val) / 1000).toPrecision(3)))
        $('#filter-range').slider("option", "min", -max_val)
        $('#filter-range').slider("option", "max", -min_val)
        $('#filter-range').slider("option", "values", [-max_val, -min_val])
    });

    $("#candles-option").on('change', function() {
        get_candles();
    });
        
    

    get_candles();

    // $.getJSON('/api/screener', function(data) {
        Object.entries(SCREENER_DATA).forEach(([symbol, data]) => {
            coins[symbol] = to_alias(data, ALIAS_SCREENER);
        })
        let filter_option = $('#filter-option').val();
        let max_val = Math.max(...Object.values(coins).map(v => (((Array.isArray(v[filter_option])) ? v[filter_option][1] : v[filter_option])) ?? 0))
        let min_val = Math.min(...Object.values(coins).map(v => (((Array.isArray(v[filter_option])) ? v[filter_option][1] : v[filter_option])) ?? 0))

        $('#filter-range').slider("option", "step", parseFloat((Math.abs(min_val - max_val) / 1000).toPrecision(3)))
        $('#filter-range').slider("option", "min", -max_val)
        $('#filter-range').slider("option", "max", -min_val)
        $('#filter-range').slider("option", "values", [-max_val, -min_val])
    // });
});