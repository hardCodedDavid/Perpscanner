export async function fetch_info() {
    let response = await fetch('/api/info');
    let info = await response.json();
    console.log(info);
    return info;
}

export async function fetch_screener() {
    let response = await fetch('/api/screener');
    let info = await response.json();
    console.log(info);
    return info;
}

export async function fetch_candle() {
    let response = await fetch('/api/candle');
    let info = await response.json();
    console.log(info);
    return info;
}

export function to_alias(data, alias) {
    var updated = {};
    Object.entries(data).forEach(([key, value]) => {
        updated[alias[key]] = data[key];
    });
    return updated;
}

export function get_value(key, default_value=undefined) {
    let value = localStorage.getItem(key);
    if (value) {
        return value
    }
    return default_value
}

export function set_value(key, value) {
    localStorage.setItem(key, value)
}


export function apply_filter(screener, filter_id='') {
    if (!filter_id) {filter_id = localStorage.getItem('current-filter')};
    let filters = JSON.parse(localStorage.getItem('filters'));
    let filter = filters.find(function(filter) {return filter['id'] == filter_id});
    let symbols = [];

    if (!filter) {return Object.keys(screener)}
    Object.entries(screener).forEach(function([symbol, columns]) {
        let condition = filter['condition'].toLowerCase().replaceAll('and', '&&').replaceAll('or', '||');

        Object.entries(columns).sort(function([k1, v1], [k2, v2]) {return k2.length - k1.length}).forEach(([key, value]) => {
            if ($.isArray(value)) {value = value[value.length-1];}
            condition = condition.replaceAll(key.toLowerCase(), value);
        });
        
        try {
            if ((eval(condition) == true || !condition) && symbol.endsWith(filter['exchange']) && (filter['quote'] == symbol.split('-')[0].split('/')[1] || !filter['quote'])) {
                symbols.push(symbol);
            }
        } catch {
            console.log('Filter condition error', condition);
            symbols.push(symbol);
        }
    });

    return symbols;
}