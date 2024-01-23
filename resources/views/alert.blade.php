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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css" integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.min.js" integrity="sha512-8Y8eGK92dzouwpROIppwr+0kPauu0qqtnzZZNEF8Pat5tuRNJxJXCkbQfJ0HlUG3y1HB3z18CSKmUo7i2zcPpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/cssa89c.css?family=Roboto%20Mono" rel="stylesheet"><link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet"><link rel="icon" type="image/png" href="static/img/theta2c59.ico" />
    <link rel="icon" type="image/png" href="static/img/theta2c59.ico?v1252" />
  @endsection

  @section('script')
    <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}" />
    <script type="module" src="{{ asset('assets/script/helper.js') }}"></script>
    <script type="module" src="{{ asset('assets/script/alert.js') }}"></script>

    <script>
      <?php echo 'var telegramToken = "' . env('TELEGRAM_TOKEN') . '";'; ?>
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  @endsection

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
@endsection