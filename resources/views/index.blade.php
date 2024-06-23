@extends('layout')

@section('content')

    @section('style')

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9CYVGBD33S"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-9CYVGBD33S');

      <?php echo 'var websocket_url = "' . env('WEBSOCKET_URL') . '";'; ?>

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
    <div style="max-width: 1000px; display: flex !important; justify-content: space-between; align-items: center; margin: 20px auto; padding: 15px 30px; background: rgb(33, 37, 41); border-radius: 15px;">
      <div style="width: 80%;">
        <input type="text" class="form-control" id="searchInput" style="color: #adb5bd; background-color: #3f3f3f; border: 0px !important; border-radius: 30px;" placeholder="Search Coin..." aria-label="Enter Coin Name"
        aria-describedby="button-addon2">
      </div>
      <div style="background: #343030; padding: 12px; border-radius: 200px; border: 1px solid green; cursor: pointer;">
        <svg onClick="$('#screenerSettings').show(); return false;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16" style="float: right; margin-top: 2px;">
          <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
          <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
        </svg>
      </div>
    </div>
    <div> 
      <table id="coinTable" class="table table-hover table-coin text-muted" style="max-width: 700px; background-color: #00000080;" cellspacing="0" width="100%">
        <thead>
          <tr id="screener-head" style="background-color: #121214 !important; line-height: 30px !important;">
            <th>Symbol</th>
          </tr>
        </thead>
        <tbody>
            <!-- Content goes here -->
        </tbody>
      </table>

      <div id="tv-chart-container">
        <div id="tv-chart">

        </div>
      </div>
    </div>
    </div>

    <script>
      document.getElementById('searchInput').addEventListener('keyup', function() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById('searchInput');
        filter = input.value.toUpperCase();
        table = document.getElementById('coinTable');
        tr = table.getElementsByTagName('tr');

        for (i = 1; i < tr.length; i++) { // Start from 1 to skip the header row
          td = tr[i].getElementsByTagName('td')[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }       
        }
      });
    </script>
    <!-- <script src="{{ asset('assets/script/track.js') }}"></script> -->
@endsection