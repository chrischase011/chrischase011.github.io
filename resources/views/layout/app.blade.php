<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Eyevent - Bookings and Reservation">
    <meta name="keywords" content="Eyevent, Reservation, Wedding, Debut, Birthday,">
    <meta name="author" content="Eyevent">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- ========== Title ========== -->
    <title>{{$title}}</title>
    <!-- ========== Favicon Ico ========== -->
    <!--<link rel="icon" href="fav.ico">-->
    <!-- ========== STYLESHEETS ========== -->
    <!-- Bootstrap CSS -->
    <link href="{{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Fonts Icon CSS -->
    <link href="{{ URL::asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/et-line.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/ionicons.min.css') }}" rel="stylesheet">
    <!-- Carousel CSS -->
    <link href="{{ URL::asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/animate.min.css') }}">
    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('assets/css/main.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ URL::asset('assets/img/origLogo.png')}}">
</head>
<body>
<div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>
<!--header start here -->
<header class="header navbar fixed-top navbar-expand-md">
    <div class="container">
        <a class="navbar-brand logo" href="#">
            <img src="{{ URL::asset('assets/img/origLogo.png')}}" alt="Evento"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="lnr lnr-text-align-right"></span>
        </button>
        <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
            <ul class=" nav navbar-nav menu">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Contact</a>
                </li>
                @guest
                      <li class="nav-item">
                        <a class="nav-link " href="{{ url('/login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('/reg') }}">Register</a>
                    </li>                   
                @else
                    @if(Auth::check())
                        @if(Auth::user()->usercontrol == 3)
                            <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hello {{ Auth::user()->fname }}
                            </a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Client Profile</a><form action="" method="post">
                                        {{ csrf_field() }}
                                    <a href="{{ url('/logout') }}" class="dropdown-item">Logout</a>
                                    </form>
                                </div>
                            </li>
                        @elseif(Auth::user()->usercontrol == 2)
                            <li class="nav-item dropdown">
                               <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Hello {{ Auth::user()->fname }}
                            </a>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Organizer Profile</a>
                                    <form action="" method="post">
                                        {{ csrf_field() }}
                                    <a href="{{ url('/logout') }}" class="dropdown-item">Logout</a>
                                    </form>
                                </div>
                            </li>
                        @endif

                    @endif
                        
                   
                @endguest
            </ul>
        </div>
    </div>
</header>
<!--header end here-->
@yield("cover");
@yield("content")<br><br><br><br><br><br><br><br><br><br><br><br>
<div class="copyright_footer fixed-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                <p>
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
</p>
            </div>
            <div class="col-12 col-md-6 ">
                <ul class="footer_menu">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Speakers</a>
                    </li>
                    <li>
                        <a href="#">Events</a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--footer end -->

<!-- jquery -->
<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
<!-- bootstrap -->
<script src="{{ URL::asset('assets/js/popper.js') }}"></script>
<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/waypoints.min.js') }}"></script>
<!--slick carousel -->
<script src="{{ URL::asset('assets/js/owl.carousel.min.js') }}"></script>
<!--parallax -->
<script src="{{ URL::asset('assets/js/parallax.min.js') }}"></script>
<!--Counter up -->
<script src="{{ URL::asset('assets/js/jquery.counterup.min.js') }}"></script>
<!--Counter down -->
<script src="{{ URL::asset('assets/js/jquery.countdown.min.js') }}"></script>
<!-- WOW JS -->
<script src="{{ URL::asset('assets/js/wow.min.js') }}"></script>
<!-- Custom js -->
<script src="{{ URL::asset('assets/js/main.js') }}"></script>
</body>
</html>