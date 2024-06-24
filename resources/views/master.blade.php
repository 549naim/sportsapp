<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>SPORTS STREAM| LIVE</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="{{ asset('js/jquery-1.4.2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/cufon-yui.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/cufon-replace.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/Gill_Sans_400.font.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
    <!--[if lt IE 7]>
    <script type="text/javascript" src="{{ asset('js/ie_png.js') }}"></script>
    <script type="text/javascript">
        ie_png.fix('.png, .link1 span, .link1');
    </script>
    <link href="{{ asset('css/ie6.css') }}" rel="stylesheet" type="text/css" />
    <![endif]-->
</head>

<body id="page1">
    <!-- START PAGE SOURCE -->
    <div class="tail-top">
        <div class="tail-bottom">
            <div id="main">
                <div id="header">
                    <div class="row-1">
                        <div class="fleft"><a href="#">Sports stream <span>Live</span></a></div>
                        <ul>
                            <li><a href="#"><img src="{{ asset('images/icon1-act.gif') }}" alt="" /></a></li>
                            <li><a href="#"><img src="{{ asset('images/icon2.gif') }}" alt="" /></a></li>
                            <li><a href="#"><img src="{{ asset('images/icon3.gif') }}" alt="" /></a></li>
                        </ul>
                    </div>
                    <div class="row-2">
                        <ul>
                            <li><a href="{{ url('/') }}" class="active">Home</a></li>
                            <li><a href="{{ url('/about') }}">About</a></li>
                            <li><a href="{{ url('/article') }}">Articles</a></li>
                            <li><a href="{{ url('/contact-us') }}">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div id="content">
                    <div class="my-3">
                        @yield('content')
                    </div>
                </div>
                <div id="footer">
                    <div class="left">
                        <div class="right">
                            <div class="footerlink">
                                <p class="lf">Copyright &copy; 2024 <a href="#">SPORTS STREAM| LIVE</a> - All
                                    Rights Reserved</p>
                                <p class="rf">Design by <a href="http://www.templatemonster.com/">Sports Stream live
                                        Team</a></p>
                                <div style="clear:both;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        Cufon.now();
    </script>
    <!-- END PAGE SOURCE -->
</body>

</html>