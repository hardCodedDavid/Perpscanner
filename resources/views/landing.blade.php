<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Perpscanner | Home</title>
  <link rel="icon" href="{{ asset('accessories/img/favicon.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('accessories/css/style.css') }}">
</head>

<body id="dark">
  <header class="dark-bb">
    <nav class="navbar navbar-expand-lg">
      <a class='navbar-brand' href="{{ route('home') }}">
        <img src="{{ asset('accessories/img/logo.png') }}" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headerMenu"
        aria-controls="headerMenu" aria-expanded="false" aria-label="Toggle navigation">
        <i class="icon ion-md-menu"></i>
      </button>

      <div class="collapse navbar-collapse" id="headerMenu">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('screener') }}" role="button"
              aria-expanded="false">
              Screener
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('alert') }}" role="button"
              aria-expanded="false">
              Alert
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('screener') }}" role="button"
              aria-expanded="false">
              Charts
            </a>
          </li>
        </ul>
        @if($user)
        <ul class="navbar-nav ml-auto">
          <a class='btn-1' href="{{ route('screener') }}">Screener</a>
        </ul>
        @else
        <ul class="navbar-nav ml-auto">
          <a class='btn-1' href="{{ route('register') }}">Sign In</a>
          <a class='btn-2' href="{{ route('login') }}">Get Started</a>
        </ul>
        @endif
      </div>
    </nav>
  </header>

  <div class="landing-hero">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h2>A trusted and secure cryptocurrency Screener.</h2>
          <p>Crypo is the most advanced UI kit for making the Blockchain platform.
            This kit comes with 4 different exchange page, market, wallet and many more</p>
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Enter Your Email" aria-label="Enter Your Email"
              aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-primary" type="button" id="button-addon2">Get Started</button>
            </div>
          </div>
        </div>
        <style>
          .feathered-image {
            display: block;
              width: 100%; /* Adjust as needed */
              height: auto; /* Maintain aspect ratio */
              -webkit-mask-image: radial-gradient(circle, rgba(0, 0, 0, 1) 40%, rgba(0, 0, 0, 0) 100%);
              mask-image: radial-gradient(circle, rgba(0, 0, 0, 1) 40%, rgba(0, 0, 0, 0) 100%);
            }

        </style>
        <div class="offset-md-1 col-md-5">
          <img class="feathered-image" src="assets/img/bull.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid no-fluid">
    <div class="row sm-gutters">
      <!-- TradingView Widget BEGIN -->
      <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js"
          async>
            {
              "width": "100%",
                "height": 490,
                  "defaultColumn": "overview",
                    "screener_type": "crypto_mkt",
                      "displayCurrency": "USD",
                        "colorTheme": "dark",
                          "locale": "en"
            }
          </script>
      </div>
      <!-- TradingView Widget END -->
    </div>
  </div>

  <div class="landing-feature landing-coin-price bt-none">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Check your favorite coin price <br> within a glance</h2>
        </div>
        <div class="col-md-3 mb30">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript"
              src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                  "symbol": "BINANCE:BTCUSDT",
                    "width": "100%",
                      "height": 220,
                        "locale": "en",
                          "dateRange": "12M",
                            "colorTheme": "dark",
                              "trendLineColor": "rgba(41, 98, 255, 1)",
                                "underLineColor": "rgba(41, 98, 255, 0.3)",
                                  "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                    "isTransparent": false,
                                      "autosize": false,
                                        "largeChartUrl": ""
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="col-md-3 mb30">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript"
              src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                  "symbol": "BINANCE:ETHUSDT",
                    "width": "100%",
                      "height": 220,
                        "locale": "en",
                          "dateRange": "12M",
                            "colorTheme": "dark",
                              "trendLineColor": "rgba(41, 98, 255, 1)",
                                "underLineColor": "rgba(41, 98, 255, 0.3)",
                                  "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                    "isTransparent": false,
                                      "autosize": false,
                                        "largeChartUrl": ""
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="col-md-3 mb30">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript"
              src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                  "symbol": "BINANCE:XRPUSDT",
                    "width": "100%",
                      "height": 220,
                        "locale": "en",
                          "dateRange": "12M",
                            "colorTheme": "dark",
                              "trendLineColor": "rgba(41, 98, 255, 1)",
                                "underLineColor": "rgba(41, 98, 255, 0.3)",
                                  "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                    "isTransparent": false,
                                      "autosize": false,
                                        "largeChartUrl": ""
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="col-md-3 mb30">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript"
              src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                  "symbol": "BINANCE:BNBUSDT",
                    "width": "100%",
                      "height": 220,
                        "locale": "en",
                          "dateRange": "12M",
                            "colorTheme": "dark",
                              "trendLineColor": "rgba(41, 98, 255, 1)",
                                "underLineColor": "rgba(41, 98, 255, 0.3)",
                                  "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                    "isTransparent": false,
                                      "autosize": false,
                                        "largeChartUrl": ""
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="col-md-3 mb30">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript"
              src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                  "symbol": "BINANCE:ADAUSDT",
                    "width": "100%",
                      "height": 220,
                        "locale": "en",
                          "dateRange": "12M",
                            "colorTheme": "dark",
                              "trendLineColor": "rgba(41, 98, 255, 1)",
                                "underLineColor": "rgba(41, 98, 255, 0.3)",
                                  "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                    "isTransparent": false,
                                      "autosize": false,
                                        "largeChartUrl": ""
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="col-md-3 mb30">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript"
              src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                  "symbol": "BINANCE:DOGEUSDT",
                    "width": "100%",
                      "height": 220,
                        "locale": "en",
                          "dateRange": "12M",
                            "colorTheme": "dark",
                              "trendLineColor": "rgba(41, 98, 255, 1)",
                                "underLineColor": "rgba(41, 98, 255, 0.3)",
                                  "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                    "isTransparent": false,
                                      "autosize": false,
                                        "largeChartUrl": ""
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="col-md-3 mb30">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript"
              src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                  "symbol": "BINANCE:DOTUSDT",
                    "width": "100%",
                      "height": 220,
                        "locale": "en",
                          "dateRange": "12M",
                            "colorTheme": "dark",
                              "trendLineColor": "rgba(41, 98, 255, 1)",
                                "underLineColor": "rgba(41, 98, 255, 0.3)",
                                  "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                    "isTransparent": false,
                                      "autosize": false,
                                        "largeChartUrl": ""
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
        <div class="col-md-3 mb30">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript"
              src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                {
                  "symbol": "BINANCE:SOLUSDT",
                    "width": "100%",
                      "height": 220,
                        "locale": "en",
                          "dateRange": "12M",
                            "colorTheme": "dark",
                              "trendLineColor": "rgba(41, 98, 255, 1)",
                                "underLineColor": "rgba(41, 98, 255, 0.3)",
                                  "underLineBottomColor": "rgba(41, 98, 255, 0)",
                                    "isTransparent": false,
                                      "autosize": false,
                                        "largeChartUrl": ""
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
      </div>
    </div>
  </div>

  <div class="landing-feature">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Check fiat currency cross rates <br> within a second</h2>
        </div>
        <div class="col-md-12">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript"
              src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
                {
                  "width": "100%",
                    "height": 400,
                      "currencies": [
                        "EUR",
                        "USD",
                        "JPY",
                        "GBP",
                        "CHF",
                        "AUD",
                        "CAD",
                        "NZD",
                        "CNY"
                      ],
                        "isTransparent": false,
                          "colorTheme": "dark",
                            "locale": "en"
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
      </div>
    </div>
  </div>

  <div class="landing-feature">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Check real-time heat map find opportunities <br> and trade with confidence</h2>
        </div>
        <div class="col-md-12">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript"
              src="https://s3.tradingview.com/external-embedding/embed-widget-forex-heat-map.js" async>
                {
                  "width": "100%",
                    "height": 400,
                      "currencies": [
                        "EUR",
                        "USD",
                        "JPY",
                        "GBP",
                        "CHF",
                        "AUD",
                        "CAD",
                        "NZD",
                        "CNY"
                      ],
                        "isTransparent": false,
                          "colorTheme": "dark",
                            "locale": "en"
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
      </div>
    </div>
  </div>
  <div class="landing-feature">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Check latest news and key events of popular <br> companies and cryptocurrencies</h2>
        </div>
        <div class="col-md-12">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js"
              async>
                {
                  "colorTheme": "dark",
                    "isTransparent": false,
                      "displayMode": "compact",
                        "width": "100%",
                          "height": 430,
                            "locale": "en"
                }
              </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
      </div>
    </div>
  </div>

  <footer class="landing-footer-two">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="{{ asset('accessories/img/logo.png') }}" alt="">
          <p>Crypo is the most advanced UI kit for making the Blockchain platform. This kit comes with 4 different
            exchange page, market, wallet and many more</p>
          <ul class="social-icon">
            <li><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
            <li><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
            <li><a href="#"><i class="icon ion-logo-linkedin"></i></a></li>
            <li><a href="#"><i class="icon ion-logo-pinterest"></i></a></li>
            <li><a href="#"><i class="icon ion-logo-github"></i></a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <h3>Company</h3>
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Affiliates</a></li>
            <li><a href="#">Investors</a></li>
            <li><a href="#">Legal & privacy</a></li>
            <li><a href="#">Cookie policy</a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <h3>Individuals</h3>
          <ul>
            <li><a href="#">Buy & sell</a></li>
            <li><a href="#">Earn free crypto</a></li>
            <li><a href="#">Wallet</a></li>
            <li><a href="#">Card</a></li>
            <li><a href="#">Payment methods</a></li>
            <li><a href="#">Account access</a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <h3>Support</h3>
          <ul>
            <li><a href="#">Help center</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Create account</a></li>
            <li><a href="#">ID verification</a></li>
            <li><a href="#">Account information</a></li>
            <li><a href="#">Supported crypto</a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <h3>Learn</h3>
          <ul>
            <li><a href="#">Browse crypto prices</a></li>
            <li><a href="#">Crypto basics</a></li>
            <li><a href="#">Tips & tutorials</a></li>
            <li><a href="#">Market updates</a></li>
            <li><a href="#">How to send crypto</a></li>
            <li><a href="#">What is a blockchain?</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


  <script src="{{ asset('accessories/js/jquery-3.4.1.min.js') }}"></script>
  <script src="{{ asset('accessories/js/popper.min.js') }}"></script>
  <script src="{{ asset('accessories/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('accessories/js/amcharts-core.min.js') }}"></script>
  <script src="{{ asset('accessories/js/amcharts.min.js') }}"></script>
  <script src="{{ asset('accessories/js/custom.js') }}"></script>

  <!-- <script src="{{ asset('assets/script/track.js') }}"></script> -->
</body>
</html>