<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta name="description" content="Eyevent - Bookings and Reservation">
    <meta name="keywords" content="Eyevent, Reservation, Wedding, Debut, Birthday,">
    <meta name="author" content="Eyevent">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/orgreg/css/montserrat-font.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/orgreg/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/orgreg/css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/loginformstyle/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/loginformstyle/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/loginformstyle/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/loginformstyle/css/main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/clientreg/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css') }}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/clientreg/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/loginformstyle/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/loginformstyle/fonts/iconic/css/material-design-iconic-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/loginformstyle/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/loginformstyle/css/main.css') }}">
    <link rel="icon" href="{{ URL::asset('assets/img/origLogo.png')}}">
</head>
<body>

@yield('content')


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