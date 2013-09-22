<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>This day in history of Bangladesh :: আজকের দিনে বাংলাদেশ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="{{ URL::asset('assets/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/bootstrap/css/custom.css') }}" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="{{ URL::asset('assets/css/flat-ui.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ URL::asset('assets/images/favicon.ico') }}">
    <script src="{{ URL::asset('assets/js/jquery-1.8.3.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery-ui-1.10.3.custom.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap-select.js') }}"></script>
    <script src="{{ URL::asset('assets/js/bootstrap-switch.js') }}"></script>
    <script src="{{ URL::asset('assets/js/flatui-checkbox.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.tagsinput.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.placeholder.js') }}"></script>
    <script src="{{ URL::asset('assets/js/application.js') }}"></script>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="{{ URL::asset('assets/js/html5shiv.js') }}"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <h1 class="demo-panel-title">This day in <span class="green">Bangladesh</span></h1>
      <div class="row demo-row">
        <div class="span12">
          <div class="navbar navbar-inverse">
            <div class="navbar-inner">
              <div class="container">
                <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#nav-collapse-01"></button>
                <div class="nav-collapse collapse" id="nav-collapse-01">
                  <ul class="nav">
                    <li>
                      <a href="<?php echo URL::to(''); ?>">
                        Home
                        <span class="navbar-unread">5</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        Fact Types
                      </a>
                      <ul>
                        <li><a href="#">Happiness</a></li>
                        <li><a href="#">Sorrows</a></li>
                        <li>
                          <a href="#">Other</a>
                          <ul>
                            <li><a href="#">Birth</a></li>
                            <li><a href="#">Death</a></li>
                            <li><a href="#">Politics</a></li>
                            <li><a href="#">Revolution</a></li>
                            <li><a href="#">Social</a></li>
                            <li><a href="#">Literature</a></li>
                          </ul> <!-- /Sub menu -->
                        </li>
                      </ul> <!-- /Sub menu -->
                    </li>
                    <li>
                      <a href="#">
                        Talk of Year
                      </a>
                    </li>                  
                    <li>
                      <a href="#">
                        Most Discussed
                      </a>
                    </li>    
                    <li>
                      <a href="#">
                        Prior 1971
                      </a>
                    </li>                                    
                    <li>
                      <a href="<?php echo URL::to('about'); ?>">
                        About Us
                      </a>
                    </li>
                  </ul>
                </div><!--/.nav -->
              </div>
            </div>
          </div>
        </div>
      </div> <!-- /row -->

      @yield('dateandtalkofthisday')

      <div class="row demo-row">
        <div class="span3">
          <div class="share mrl">
            <ul>
              <li>
                <label class="share-label" for="share-toggle2">Facebook</label>
                <input type="checkbox" checked="" data-toggle="switch" />
              </li>
              <li>
                <label class="share-label" for="share-toggle4">Twitter</label>
                <input type="checkbox" data-toggle="switch" />
              </li>
              <li>
                <label class="share-label" for="share-toggle6">Pinterest</label>
                <input type="checkbox" data-toggle="switch" />
              </li>
            </ul>
            <a href="#" class="btn btn-info btn-block btn-large">Share</a>
          </div> <!-- /share -->          
        </div>
          
        @yield('eventlisting')
        @yield('about')
      </div> <!-- /row -->

    </div> <!-- /container -->
    
    <!-- Load JS here for greater good =============================-->
    <script type="text/javascript">
        $(document).ready(function() {
            $(".day" ).change(function() {
                if(($('#select-month').val() && $('#select-day').val()) != '') {
                    window.location = "<?php echo URL::to(''); ?>"+"/facts/"+$('#select-month').val()+'/'+$('#select-day').val();
                }
                
            });
        });
    </script>       
  </body>
</html>
