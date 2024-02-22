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

    @endsection 
    
    @section('script')
      <link rel="stylesheet" href="{{ asset('assets/style/style.css') }}">
      <script type="module" src="{{ asset('assets/script/helper.js') }}"></script>
    @endsection
    <title>Perpscanner | by crypto.erke</title>
    </head>
    <body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/style/screener.css') }}">
    </script>
    <!-- <script type="text/javascript" src="../s3.tradingview.com/tv.js"></script> -->
    <!-- <script type="module" src="static/js/screener2c59.js"></script> -->
    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
    <script type="module" src="{{ asset('assets/script/helper.js') }}"></script>
    <script type="module" src="{{ asset('assets/script/script.js') }}"></script>
    <div id="maindiv" style="font-family: 'Roboto Mono', monospace;">
    <div class="card text-white bg-dark mb-3" id="screenerSettings" style="display: none; border: 1px solid #cfcfcf;">
    <div class="card-header">
    <b>Screener - Settings</b>
    <svg id="closeScreenerSettings" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16" style="float: right; margin-left: 8px; margin-top: 4px;">
    <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
    </svg>
    </div>
    <div class="card-body" style="height: 600px; width: 1200px">
    <b>Screener Columns</b>
    <ol class="list-group connected-sortable draggable list-group-horizontal screener screener-columns" id="screener-columns">
    </ol>
    <div id="available-columns">
    </div>
    <br><br>
    <div style="float: left; margin-top: 20px;">
    <div class="form-check">
    <b class="form-check-label" for="use-notional-oi-check">
    Use notional value for OI
    </b>
    <input class="form-check-input" type="checkbox" value id="use-notional-oi-check">
    </div>
    <br>
    <div style="width: 500px;">
    <b>Screener Update Speed: </b><b id="update-speed-label">0</b><b>s</b>
    <input type="range" min="0" max="60" value="0" class="form-range" id="update-speed">
    </div>
    </div>
    </div>
    </div>
    <table id="coinTable" class="table table-hover table-coin text-muted bg-black" cellspacing="0" width="100%">
    <thead>
    <tr id="screener-head">
    <th>Symbol</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
    </table>
    <div id="tv-chart-container">
    <div id="tv-chart"></div>
    </div>
    </div>
@endsection