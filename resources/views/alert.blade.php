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
        @foreach($alerts as $alert)
          <!-- <form class="saveAlert" autocomplete="off">
            <div class="card border-success text-white bg-dark mb-3">
              <fieldset class="alertFieldset" disabled>
                <div class="card-header">
                  <input style="display: none;" name="id" value="static_id"></input>
                  <input style="display: none;" name="paused" value="static_paused"></input>
                  <input class="form-control form-check-inline" id="alertName" placeholder="Alert Name" style="width: 300px;" name="alertName" value="{{ $alert['name'] }}">

                  <div onClick="unpause_alert(static_id);" class="form-check-inlin alertPlay" style="float: right; display: none;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16"><path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z"/></svg></div>
                  <div onClick="pause_alert(static_id);" class="form-check-inlin alertPause" style="float: right;"><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="bi bi-pause-fill" viewBox="0 0 16 16"><path d="M5.5 3.5A1.5 1.5 0 0 1 7 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5zm5 0A1.5 1.5 0 0 1 12 5v6a1.5 1.5 0 0 1-3 0V5a1.5 1.5 0 0 1 1.5-1.5z"/></svg></div>
                  
                  <div class="form-check-inline editAlert" style="float: right;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                  </div>
                  <div class="form-check-inline" style="float: right;" data-toggle="modal" data-target="#deleteModal">tt
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg>
                  </div>
                  <div class="form-check-inline closeAlert" style="float: right;" data-bs-toggle="modal" data-bs-target="#editModal{{ $alert['id'] }}" data-bs-whatever="@mdo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                        <path d="M4.854 4.146a.5.5 0 0 1 0 .708L8.707 8l-3.853 3.854a.5.5 0 1 1-.708-.708L8 7.293l-3.854-3.853a.5.5 0 0 1 .708-.708L8 6.707l3.854-3.853a.5.5 0 0 1 .708.708L8.707 8l3.853 3.854a.5.5 0 0 1-.708.708L8 8.707l-3.854 3.853a.5.5 0 0 1-.708-.708L7.293 8 3.439 4.146a.5.5 0 0 1 .415-.146z"/>
                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                    </svg>
                  </div>
                </div>
                
                <div class="card-body">
                  <div class="form-group">
                      <label for="alertCondition">Condition</label>
                      <input class="form-control" class="autocomplete" id="alertCondition" placeholder="ticks_15m > 10000" name="alertCondition" value="{{ $alert['condition'] }}">
                  </div>
                  <div class="form-group">
                      <label for="alertMessage">Trigger Message</label>
                      <input class="form-control" class="autocomplete" id="alertMessage" placeholder="{symbol} reached {ticks_15m} Ticks!" name="alertMessage" value="{{ $alert['message'] }}">
                  </div>
                  <div class="form-group" style="margin-top: 15px">
                      <div class="form-check-inline">
                      <input class="form-check-input browserAlert" type="checkbox" value="{{ $alert['browser'] }}" name="browserAlert" {{ ($alert['browser'] == '1') ? 'checked' : '' }}>
                        <label class="form-check-label" for="browserAlert">Browser Notification</label>
                      </div>
                      <div class="form-check-inline">
                        <input class="form-check-input screenerHighlight" type="checkbox" value="{{ $alert['highlight'] }}" name="screenerHighlight" {{ ($alert['highlight'] == '1') ? 'checked' : '' }}>
                        <label class="form-check-label" for="screenerHighlight">Highlight Screener</label>
                      </div>            
                      <div class="form-check-inline" style="margin-top: 10px;">
                        <input class="form-check-input soundAlert" type="checkbox" value="{{ $alert['sound_alert'] }}" {{ ($alert['sound_alert'] == '1') ? 'checked' : '' }}>
                        <label class="form-check-label" for="soundAlert">Sound Alert</label>
                      </div>
                      <div style="display: none" class="form-check-inline soundAlertShow">
                          <select class="form-select soundAlertFile" style="width: 200px" name="soundAlertFile">
                              <option value=""></option>
                              <option value="ping.wav">Ping</option>
                              <option value="beep.wav">Beep</option>
                              <option value="bloom.mp3">Bloom</option>
                              <option value="bloop.wav">Bloop</option>
                              <option value="chime.wav">Chime</option>
                              <option value="error.mp3">Error</option>
                              <option value="nuclear.ogg">Nuclear</option>
                          </select>
                      </div>
                      <div class="form-check-inline" style="margin-top: 10px;">
                        <input class="form-check-input telegramAlert" name="telegramAlert" type="checkbox" value="{{ $alert['telegram_alert'] }}" {{ ($alert['telegram_alert'] == '1') ? 'checked' : '' }}>
                        <label class="form-check-label" for="telegramAlert">Telegram Alert</label>
                      </div>
                      <div style="display: none" class="form-check-inline telegramAlertShow">
                        <input class="form-control telegramName" id="telegramName" name="telegramName" placeholder="Telegram username" type="text" value="">
                      </div>
                      <button type="submit" class="btn btn-primary form-check-inline" style="float: right;">Save</button>
                      <div class="telegramNote">
                        <p style="margin: 23px 0px;" class="telegramNote"><b>Note📝: </b> <strong>Make sure you start by subscribing to the telegram channel <a href="https://t.me/OrionTerminal_bot">@Orion Terminal</a> before saving your username.</strong></p>
                      </div>
                  </div>
              </fieldset>
            </div>
          </form>

          <div class="modal fade" id="editModal{{ $alert['id'] }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog text-white">
              <div class="modal-content bg-dark">
                <form autocomplete="off" class="row g-2 text-muted rounded" method="POST" action="{{ route('alert.store') }}" style="padding: 30px;">
                  @csrf
                  <div class="modal-header" style="border-bottom: 1px solid #68686833">
                    <h5 class="modal-title text-white" id="editModalLabel">Edit Alert</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                        @if(Session::has('error'))
                            <div class="text-danger">
                            {{ Session::get('error')}}
                            </div>
                        @endif
                        <input type="hidden" name="status" value="1">
                        <div class="col-12">
                            <label for="name" class="form-label">Name</label>
                            <div class="input-group">
                                <input type="text" id="name" class="form-control form-input text-white @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="conditions" class="form-label">Condition</label>
                            <div class="input-group">
                                <input type="text" id="conditions" class="form-control form-input text-white @error('condition') is-invalid @enderror" name="condition" value="{{ old('condition') }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Message</label>
                            <div class="input-group">
                                <input type="text" id="message" class="form-control form-input text-white @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 15px">
                            <div class="form-check-inline">
                                <input class="form-check-input" type="checkbox" name="browser">
                                <input type="hidden" name="browser" value="0">
                                <label class="form-check-label" for="browserAlert">Browser Notification</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="checkbox" name="highlights">
                                <input type="hidden" name="highlights" value="0">
                                <label class="form-check-label" for="screenerHighlight">Highlight Screener</label>
                            </div>            
                            <div class="form-check-inline" style="margin-top: 10px;">
                                <input class="form-check-input" type="checkbox" name="sound_alert">
                                <input type="hidden" name="sound_alert" value="0">
                                <label class="form-check-label" for="soundAlert">Sound Alert</label>
                            </div>
                            <div class="form-check-inline" style="margin-top: 10px;">
                                <input class="form-check-input" type="checkbox" name="telegram_alert">
                                <input type="hidden" name="telegram_alert" value="0">
                                <label class="form-check-label" for="telegramAlert">Telegram Alert</label>
                            </div>
                            <div style="display: none" class="form-check-inline soundAlertShow">
                                <select class="form-select soundAlertFile" style="width: 200px" name="soundAlertFile">
                                    <option value=""></option>
                                    <option value="ping.wav">Ping</option>
                                    <option value="beep.wav">Beep</option>
                                    <option value="bloom.mp3">Bloom</option>
                                    <option value="bloop.wav">Bloop</option>
                                    <option value="chime.wav">Chime</option>
                                    <option value="error.mp3">Error</option>
                                    <option value="nuclear.ogg">Nuclear</option>
                                </select>
                            </div>
                        </div>
                  </div>
                  <div class="modal-footer" style="border-top: 1px solid #68686833">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="cus-btn">Save</button>
                  </div>
                </form>
              </div>
            </div>
          </div> -->
        @endforeach
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog text-white">
          <div class="modal-content bg-dark">
            <form autocomplete="off" class="row g-2 text-muted rounded" method="POST" action="{{ route('alert.store') }}" style="padding: 30px;">
              @csrf
              <div class="modal-header" style="border-bottom: 1px solid #68686833">
                <h5 class="modal-title text-white" id="exampleModalLabel">New Alert</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                    @if(Session::has('error'))
                        <div class="text-danger">
                        {{ Session::get('error')}}
                        </div>
                    @endif
                    <input type="hidden" name="status" value="1">
                    <div class="col-12">
                        <label for="name" class="form-label">Name</label>
                        <div class="input-group">
                            <input type="text" id="name" class="form-control form-input text-white @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="conditions" class="form-label">Condition</label>
                        <div class="input-group">
                            <input type="hidden" id="conditions" class="form-control form-input text-white @error('condition') is-invalid @enderror" name="condition" value="{{ old('condition') }}" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div style="padding: 5px; margin: 20px 0px; background-color: gainsboro; border-radius: 15px;">
                          <div class="d-flex">
                            <select name="condition_statement" id="condition_statement" class="form-control" style="background-color: #555555; color: #dddddd; margin: 0px 5px;">
                              <option value="">Select Statement</option>
                            </select>
                            <select name="condition_operator" id="condition_operator" class="form-control" style="background-color: #555555; color: #dddddd; margin: 0px 5px;">
                              <option value="">Select Operator</option>
                              <option value=">">Greater than</option>
                              <option value="<">Less than</option>
                              <option value="==">Equal to</option>
                              <option value=">=">Greater than or eqal to</option>
                              <option value="<=">Less than or eqal to</option>
                              <option value="!=">Not Equal to</option>
                            </select>
                            <input type="text" name="condition_value" id="condition_value" class="form-control" placeholder="100000">
                            <button type="button" id="add_condition" style="margin: 0px 5px; padding: 5px 20px; background-color: #18c618; border: 0px;">+</button>
                          </div>
                          <div>
                            <ul id="conditions_list" class="">
                            </ul>
                          </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <label for="message" class="form-label">Message</label>
                        <div class="input-group">
                            <input type="text" id="message" class="form-control form-input text-white @error('message') is-invalid @enderror" name="message" value="{{ old('message') }}" required>
                        </div>
                    </div>
                    <div class="form-group" style="margin-top: 15px">
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" name="browser">
                            <!-- <input type="hidden" name="browser" value="0"> -->
                            <label class="form-check-label" for="browserAlert">Browser Notification</label>
                        </div>
                        <div class="form-check-inline">
                            <input class="form-check-input" type="checkbox" name="highlight" id="screenerHighlight">
                            <!-- <input type="hidden" name="highlight" value="0"> -->
                            <label class="form-check-label" for="screenerHighlight">Highlight Screener</label>
                        </div>           
                        <div class="form-check-inline" style="margin-top: 10px;">
                            <input class="form-check-input" type="checkbox" name="sound_alert">
                            <!-- <input type="hidden" name="sound_alert" value="0"> -->
                            <label class="form-check-label" for="soundAlert">Sound Alert</label>
                        </div>
                        <div class="form-check-inline" style="margin-top: 10px;">
                            <input class="form-check-input" type="checkbox" name="telegram_alert">
                            <!-- <input type="hidden" name="telegram_alert" value="0"> -->
                            <label class="form-check-label" for="telegramAlert">Telegram Alert</label>
                        </div>
                        <div style="display: none" class="form-check-inline soundAlertShow">
                            <select class="form-select soundAlertFile" style="width: 200px" name="soundAlertFile">
                                <option value=""></option>
                                <option value="ping.wav">Ping</option>
                                <option value="beep.wav">Beep</option>
                                <option value="bloom.mp3">Bloom</option>
                                <option value="bloop.wav">Bloop</option>
                                <option value="chime.wav">Chime</option>
                                <option value="error.mp3">Error</option>
                                <option value="nuclear.ogg">Nuclear</option>
                            </select>
                        </div>
                        <!-- <div class="form-check-inline" style="margin-top: 10px;">
                          <input class="form-check-input" name="telegram_alert" type="checkbox">
                          <label class="form-check-label" for="telegramAlert">Telegram Alert</label>
                          <input type="hidden" name="telegram_alert" value="0">
                        </div>
                        <div style="display: none" class="form-check-inline telegramAlertShow">
                          <input class="form-control telegramName" id="telegramName" name="telegram_alert" placeholder="Telegram username" type="text">
                        </div> -->
                    </div>
              </div>
              <div class="modal-footer" style="border-top: 1px solid #68686833">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="cus-btn">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="row">
        @foreach($alerts as $alert)
          <div class="col-md-5 col-sm-12 bg-dark p-4" style="margin: 5px; border-radius: 20px;">
            <div class="wrapper">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <h3>{{ $alert['name'] }}</h3>
                </div>
                <div>
                  <div class="form-check-inline" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#editModa{{ $alert['id'] }}" data-bs-whatever="@mdo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                  </div>
                  <div class="form-check-inline" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#deleteAlertModal{{ $alert['id'] }}" data-bs-whatever="@mdo">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                          <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                          <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                      </svg>
                  </div>
                </div>
              </div>
              <p>{{ $alert['message'] }}</p>
              <p>{{ $alert['condition'] }}</p>
            </div>
          </div>

          <div class="modal fade" id="editModa{{ $alert['id'] }}" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog text-white">
              <div class="modal-content bg-dark">
                <form autocomplete="off" class="row g-2 text-muted rounded" method="POST" action="{{ route('alert.update', $alert['id']) }}" style="padding: 30px;">
                  @csrf
                  @method('PUT')
                  <div class="modal-header" style="border-bottom: 1px solid #68686833">
                    <h5 class="modal-title text-white" id="editModalLabel">Edit Alert</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                        @if(Session::has('error'))
                            <div class="text-danger">
                            {{ Session::get('error')}}
                            </div>
                        @endif
                        <input type="hidden" name="status" value="1">
                        <div class="col-12">
                            <label for="name" class="form-label">Name</label>
                            <div class="input-group">
                                <input type="text" id="name" class="form-control form-input text-white @error('name') is-invalid @enderror" name="name" value="{{ $alert['name'] }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="conditions" class="form-label">Condition</label>
                            <div class="input-group">
                                <input type="hidden" id="conditions" class="form-control form-input text-white @error('condition') is-invalid @enderror" name="condition" value="{{ $alert['condition'] }}" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="message" class="form-label">Message</label>
                            <div class="input-group">
                                <input type="text" id="message" class="form-control form-input text-white @error('message') is-invalid @enderror" name="message" value="{{ $alert['message'] }}" required>
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 15px">
                            <div class="form-check-inline">
                              <input class="form-check-input" type="checkbox" name="browser" value="1" {{ $alert['browser'] == 1 ? 'checked' : '' }}>
                              <!-- <input type="hidden" name="browser" value="0">  -->
                              <label class="form-check-label" for="browserAlert">Browser Notification</label>
                            </div>
                            <div class="form-check-inline">
                                <input class="form-check-input" type="checkbox" name="highlight" {{ $alert['highlight'] == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="screenerHighlight">Highlight Screener</label>
                            </div>            
                            <div class="form-check-inline" style="margin-top: 10px;">
                                <input class="form-check-input" type="checkbox" name="sound_alert" {{ $alert['sound_alert'] == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="soundAlert">Sound Alert</label>
                            </div>
                            <div class="form-check-inline" style="margin-top: 10px;">
                                <input class="form-check-input" type="checkbox" name="telegram_alert" {{ $alert['telegram_alert'] == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="telegramAlert">Telegram Alert</label>
                            </div>
                            <div style="display: none" class="form-check-inline soundAlertShow">
                                <select class="form-select soundAlertFile" style="width: 200px" name="soundAlertFile">
                                    <option value=""></option>
                                    <option value="ping.wav">Ping</option>
                                    <option value="beep.wav">Beep</option>
                                    <option value="bloom.mp3">Bloom</option>
                                    <option value="bloop.wav">Bloop</option>
                                    <option value="chime.wav">Chime</option>
                                    <option value="error.mp3">Error</option>
                                    <option value="nuclear.ogg">Nuclear</option>
                                </select>
                            </div>
                            <!-- <div class="form-check-inline" style="margin-top: 10px;">
                              <input class="form-check-input" name="telegram_alert" type="checkbox">
                              <label class="form-check-label" for="telegramAlert">Telegram Alert</label>
                              <input type="hidden" name="telegram_alert" value="0">
                            </div>
                            <div style="display: none" class="form-check-inline telegramAlertShow">
                              <input class="form-control telegramName" id="telegramName" name="telegram_alert" placeholder="Telegram username" type="text">
                            </div> -->
                        </div>
                  </div>
                  <div class="modal-footer" style="border-top: 1px solid #68686833">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="cus-btn">Save</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="modal fade" id="deleteAlertModal{{ $alert['id'] }}" tabindex="-1" aria-labelledby="deleteAlertModalLabel" aria-hidden="true">
            <div class="modal-dialog text-white">
              <div class="modal-content bg-dark">
                <form autocomplete="off" class="row g-2 text-muted rounded" method="POST" action="{{ route('alert.destroy', $alert) }}" style="padding: 30px;">
                  @csrf
                  @method('DELETE')
                  <div class="modal-header" style="border-bottom: 1px solid #68686833">
                    <h5 class="modal-title text-white" id="deleteAlertModalLabel">Delete Alert</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <p>Are you sure you want to delete "{{ $alert['name'] }}" alert?</p>
                  </div>
                  <div class="modal-footer" style="border-top: 1px solid #68686833">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="cus-btn">Sure</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        @endforeach
      </div>

      <br>
      
      <div style="text-align:center;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
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
