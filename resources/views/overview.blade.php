@extends('layout')

@section('content')

    @section('style')

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

    @endsection 

<title>Chart | by crypto.erke</title>
<script src="{{ asset('assets/script/uPlot.min.js') }}"></script>
<script type="module" src="{{ asset('assets/script/overview.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/style/overview.css') }}" />
</head>
<body>
<div id="maindiv">
<div id="settings-container" style="border-bottom: var(--divsep);">
<a style="font-size: 22px; float: left; margin: 4px; margin-right: 10px;">Timespan</a>
<select style="float: left; width: 150px; margin: 5px; height: 35px; font-size: 15px; background-color: var(--bg); color: var(--textcolor); margin-right: 20px;" class="form-select" id="candles-option">
<option value="1440">1d</option>
<option value="720">12h</option>
<option value="360">6h</option>
<option value="240">4h</option>
<option value="120">2h</option>
</select>
<a style="font-size: 22px; float: left; margin: 4px; margin-right: 10px;">Filter Range</a>
<select style="float: left; width: 150px; margin: 5px; height: 35px; font-size: 15px; background-color: var(--bg); color: var(--textcolor);" class="form-select" id="filter-option">
<option value="openinterest">Openinterest</option>
<option value="marketcap">Marketcap</option>
<option value="volume_1d">1d Volume</option>
<option value="volume_8h">8h Volume</option>
<option value="change_1d">1d Change</option>
<option value="change_8h">8h Change</option>
<option value="volatility_1h">1h Volatility</option>
</select>
<div style="margin-left: 20px; float: left; width: 40%;">
<a style="float: left;" id="filter-from">0</a>
<a style="float: right;" id="filter-to">0</a>
<div style="height: 10px; top: 27px;" class="form-range" id="filter-range"></div>
</div>
</div>
<div id="pairs-chart-container" style="float: left; width: 100%; height: 91%; overflow: hidden;">
<div id="pairs-chart" style="width: 100%; height: 50%"></div>
<div id="vol-chart" style="width: 100%; height: 45%"></div>
</div>
</div>
@endsection 