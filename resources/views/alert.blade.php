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

  <?php echo 'var websocket_url = "' . env('WEBSOCKET_URL') . '";'; ?>

  <?php echo 'var userAlerts = ' . $alerts . ';'; ?>
  
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@endsection

<title>Alerts | by crypto.erke</title>
</head>
<body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('assets/style/alert.css') }}">
<script type="module" src="{{ asset('assets/script/alert2.js') }}"></script>


<div>
    <div>
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <h2 class="text-white" style="padding: 30px; font-weight: 600;">Alerts</h2>
                    <div class="row">
                        <div class="col-lg-5 col-md-12 m-1">
                            <div class="container text-white" style="padding: 30px; background: rgb(33, 37, 41); border-radius: 20px;">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img class="me-1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/46/Bitcoin.svg/2048px-Bitcoin.svg.png" alt="" width="50">
                                        <span style="font-weight: 600; font-size: 2.5rem;">BTC/USDT</span>
                                    </div>
                                    <div class="d-flex justify-content-around">
                                        <div class="m-1" style="cursor: pointer;">
                                            <svg onClick="$('#screenerSettings').hide(); return false;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pause" viewBox="0 0 16 16" style="float: right; margin-top: 2px;">
                                                <path d="M5.5 3.5A.5.5 0 0 0 5 4v8a.5.5 0 0 0 1 0V4a.5.5 0 0 0-.5-.5zM9.5 3.5A.5.5 0 0 0 9 4v8a.5.5 0 0 0 1 0V4a.5.5 0 0 0-.5-.5z"/>
                                            </svg>
                                        </div>
                                        <div class="m-1" style="cursor: pointer;">
                                            <svg onClick="$('#screenerSettings').show(); return false;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16" style="float: right; margin-top: 2px;">
                                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-muted">15m ticker is greater than 8000</span> <br>
                                    <!-- <span class="text-muted">15m Changes is greater than 20%</span> <br>
                                    <span class="text-muted">Price is less than 0.18563</span> -->
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-4" style="margin: 20px 0px 0px 0px;">
                                            <div class="d-flex align-items-center justify-content-center" style="background: #ffffff2e; border-radius: 30px;">
                                                <div style="padding: 7px; border-radius: 400px; background: #11b830;"></div>
                                                <span style="font-weight: 700; padding: 2px;">Status</span>
                                            </div>
                                        </div>
                                        <div class="col-4" style="margin: 20px 0px 0px 0px;">
                                            <div class="d-flex align-items-center justify-content-center" style="background: #ffffff2e; border-radius: 30px;">
                                                <div style="padding: 7px; border-radius: 400px; background: #11b830;"></div>
                                                <span style="font-weight: 700; padding: 2px;">Alert</span>
                                            </div>
                                        </div>
                                        <div class="col-4" style="margin: 20px 0px 0px 0px;">
                                            <div class="d-flex align-items-center justify-content-center" style="background: #ffffff2e; border-radius: 30px;">
                                                <div style="padding: 7px; border-radius: 400px; background: #11b830;"></div>
                                                <span style="font-weight: 700; padding: 2px;">Telegram</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 m-1">
                            <div class="container text-white" style="padding: 30px; background: rgb(33, 37, 41); border-radius: 20px;">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img class="me-1" src="https://s2.coinmarketcap.com/static/img/coins/200x200/1027.png" alt="" width="50">
                                        <span style="font-weight: 600; font-size: 2.5rem;">ETH/USDT</span>
                                    </div>
                                    <div class="d-flex justify-content-around">
                                        <div class="m-1" style="cursor: pointer;">
                                            <svg onClick="$('#screenerSettings').show(); return false;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-play" viewBox="0 0 16 16" style="float: right; margin-top: 2px;">
                                                <path d="M6.271 2.055a.5.5 0 0 0-.771.422v11.046a.5.5 0 0 0 .771.422l7.271-5.523a.5.5 0 0 0 0-.844L6.271 2.055z"/>
                                            </svg>
                                        </div>
                                        <div class="m-1" style="cursor: pointer;">
                                            <svg onClick="$('#screenerSettings').show(); return false;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16" style="float: right; margin-top: 2px;">
                                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                            </svg>
                                        </div>
                                        <!-- <div style="cursor: pointer;">
                                            <svg onClick="$('#screenerSettings').hide(); return false;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pause" viewBox="0 0 16 16" style="float: right; margin-top: 2px;">
                                                <path d="M5.5 3.5A.5.5 0 0 0 5 4v8a.5.5 0 0 0 1 0V4a.5.5 0 0 0-.5-.5zM9.5 3.5A.5.5 0 0 0 9 4v8a.5.5 0 0 0 1 0V4a.5.5 0 0 0-.5-.5z"/>
                                            </svg>
                                        </div> -->

                                    </div>
                                </div>
                                <div>
                                    <span class="text-muted">15m ticker is greater than 8000</span> <br>
                                    <!-- <span class="text-muted">15m Changes is greater than 20%</span> <br>
                                    <span class="text-muted">Price is less than 0.18563</span> -->
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-4" style="margin: 20px 0px 0px 0px;">
                                            <div class="d-flex align-items-center justify-content-center" style="background: #ffffff2e; border-radius: 30px;">
                                                <div style="padding: 7px; border-radius: 400px; background: red;"></div>
                                                <span style="font-weight: 700; padding: 2px;">Status</span>
                                            </div>
                                        </div>
                                        <div class="col-4" style="margin: 20px 0px 0px 0px;">
                                            <div class="d-flex align-items-center justify-content-center" style="background: #ffffff2e; border-radius: 30px;">
                                                <div style="padding: 7px; border-radius: 400px; background: red;"></div>
                                                <span style="font-weight: 700; padding: 2px;">Alert</span>
                                            </div>
                                        </div>
                                        <div class="col-4" style="margin: 20px 0px 0px 0px;">
                                            <div class="d-flex align-items-center justify-content-center" style="background: #ffffff2e; border-radius: 30px;">
                                                <div style="padding: 7px; border-radius: 400px; background: #11b830;"></div>
                                                <span style="font-weight: 700; padding: 2px;">Telegram</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-12 m-1">
                            <div class="container text-white" style="padding: 30px; background: rgb(33, 37, 41); border-radius: 20px;">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex justify-content-center align-items-center">
                                        <img class="me-1" src="https://upload.wikimedia.org/wikipedia/en/b/b9/Solana_logo.png" alt="" width="50">
                                        <span style="font-weight: 600; font-size: 2.5rem;">SOL/USDT</span>
                                    </div>
                                    <div class="d-flex justify-content-around">
                                        <div class="m-1" style="cursor: pointer;">
                                            <svg onClick="$('#screenerSettings').hide(); return false;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-pause" viewBox="0 0 16 16" style="float: right; margin-top: 2px;">
                                                <path d="M5.5 3.5A.5.5 0 0 0 5 4v8a.5.5 0 0 0 1 0V4a.5.5 0 0 0-.5-.5zM9.5 3.5A.5.5 0 0 0 9 4v8a.5.5 0 0 0 1 0V4a.5.5 0 0 0-.5-.5z"/>
                                            </svg>
                                        </div>
                                        <div class="m-1" style="cursor: pointer;">
                                            <svg onClick="$('#screenerSettings').show(); return false;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16" style="float: right; margin-top: 2px;">
                                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z" />
                                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <span class="text-muted">15m ticker is greater than 8000</span> <br>
                                    <!-- <span class="text-muted">15m Changes is greater than 20%</span> <br>
                                    <span class="text-muted">Price is less than 0.18563</span> -->
                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-4" style="margin: 20px 0px 0px 0px;">
                                            <div class="d-flex align-items-center justify-content-center" style="background: #ffffff2e; border-radius: 30px;">
                                                <div style="padding: 7px; border-radius: 400px; background: #11b830;"></div>
                                                <span style="font-weight: 700; padding: 2px;">Status</span>
                                            </div>
                                        </div>
                                        <div class="col-4" style="margin: 20px 0px 0px 0px;">
                                            <div class="d-flex align-items-center justify-content-center" style="background: #ffffff2e; border-radius: 30px;">
                                                <div style="padding: 7px; border-radius: 400px; background: red;"></div>
                                                <span style="font-weight: 700; padding: 2px;">Alert</span>
                                            </div>
                                        </div>
                                        <div class="col-4" style="margin: 20px 0px 0px 0px;">
                                            <div class="d-flex align-items-center justify-content-center" style="background: #ffffff2e; border-radius: 30px;">
                                                <div style="padding: 7px; border-radius: 400px; background: #11b830;"></div>
                                                <span style="font-weight: 700; padding: 2px;">Telegram</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <h2 class="text-white" style="padding: 30px; font-weight: 600;">Settings</h2>
                <div>
                    <div class="text-white" style="padding: 20px; background: linear-gradient(178deg,#139053,#121213); border-radius: 15px;">
                        <div>
                            <span style="font-size: 25px; font-weight: 600;">Setup Telegram</span>
                            <p style="font-size: 14px; font-weight: 400;">Copy the Bot ID and paste it into your Telegram bot, Enabling you to receive alerts.</p>
                        </div>
                        <div class="my-3">
                            <div style="position: relative; display: inline-block;">
                                <input type="text" class="form-control" id="searchInput" 
                                    style="color: #000000; background-color: #ffffffb5; border: 0px !important; font-weight: 800; border-radius: 30px; padding-right: 40px;" 
                                    placeholder="Telegram" aria-label="Enter Coin Name" 
                                    value="8ad76f24-76d6-4cad-80e3-4f62fadf2e95" aria-describedby="button-addon2" disabled width="600">
                                <svg id="copyIcon" onclick="copyToClipboard()" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
                                    class="bi bi-clipboard" viewBox="0 0 16 16" 
                                    style="position: absolute; top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer; background-color: #e0e0e0; border-radius: 50%; padding: 5px;">
                                    <path d="M10 1.5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0V3.5H6v1a.5.5 0 0 1-1 0V3.5H4a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0v1h2v-1a.5.5 0 0 1 1 0z"/>
                                    <path d="M3 2.5a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1v-10a1 1 0 0 0-1-1h-1v1a.5.5 0 0 1-1 0v-1H5v1a.5.5 0 0 1-1 0v-1H3z"/>
                                </svg>
                            </div>
                            <!-- <div style="margin: 20px auto;">
                                <a href="#" style="padding: 5px 30px; background: transparent; color:#ffffff; border-radius: 20px; border: 2px solid #11b830;">Launch Bot</a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Array to store conditions
    let conditionsArray = [];
    let conditionsArrayVal = [];

    $("#add_condition").click(function() {
        const statement = $("#condition_statement option:selected").text();
        const operator = $("#condition_operator option:selected").text();
        const operator_val = $("#condition_operator").val();
        const value = $("#condition_value").val();

        if (statement && operator && value) {
            const condition = `${statement} ${operator} ${value}`;
            const condition_val = `${statement} ${operator} ${value}`;
            conditionsArray.push(condition);
            conditionsArrayVal.push(condition_val);

            const listItem = $("<li>", { class: "text-dark", css: { padding: "10px 0px 0px 0px", fontWeight: "700" } });
            listItem.text(`Alert when ${condition}`);

            const deleteButton = $("<button>", {
                type: "button",
                css: { marginLeft: "10px", padding: "5px", backgroundColor: "transparent", border: "0" },
                html: `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="red" class="bi bi-trash" viewBox="0 0 16 16">
                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>`
            });

            deleteButton.click(function() {
                listItem.remove();
                // Remove the deleted condition from the array
                const index = conditionsArray.indexOf(condition);
                if (index !== -1) conditionsArray.splice(index, 1);

                console.log("Conditions:", conditionsArrayVal.join(" and "));

            });

            listItem.append(deleteButton);
            $("#conditions_list").append(listItem);

            // Log all conditions
            console.log("Conditions:", conditionsArrayVal.join(" and "));

            // Clear input fields
            $("#condition_value").val("");
        } else {
            alert("Please fill all fields");
        }
    });
});

</script>

@endsection
