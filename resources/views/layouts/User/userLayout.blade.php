<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="{{ asset('User/User/assets/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ asset('User/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('User/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('User/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{asset('User/assets/css/swiper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('User/assets/css/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('User/assets/css/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('User/assets/css/custom-select.css')}}">
    <link rel="stylesheet" href="{{asset('User/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('User/assets/css/custom.css')}}">
    <style>
        .tm-cover
        {
            background: #fff;
            width: 100%;
            background-image: url("{{asset('User/assets/images/0104.png')}}");
            height: 58px;
            background-size: cover;
            background-repeat: no-repeat;
        }
        .tox :not(svg):not(rect),.tox
        {
            display: none !important;
        }
        @media only screen and (max-width: 700px) {
            .header-top
            {
                display: block !important;
            }
        }
    </style>
    @yield('head')
</head>

<body id="top-page" class="sticky-sidebar-home">
        <!-- header section start -->
        @include('layouts.User.header')
        <!-- header section end -->
        <div class="page-layout home-layout">
            @include('layouts.User.sideMenu')
            @yield('content')
        </div>
        <!-- footer section -->
        @include('layouts.User.footer')
        <!-- footer section -->

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src='{{asset('User/assets/js/jquery.min.js')}}'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/2.2.3/jquery.elevatezoom.min.js"></script>
        <script src='{{asset('User/assets/js/bootstrap.bundle.min.js')}}'></script>
        <script src='{{asset('User/assets/js/swiper.min.js')}}'></script>
        <script src="{{asset('User/assets/js/slick.js')}}"></script>
        <script src='{{asset('User/assets/js/jquery-easeing.min.js')}}'></script>
        <script src='{{asset('User/assets/js/scroll-nav.js')}}'></script>
        <script src='{{asset('User/assets/js/custom-select.js')}}'></script>
        <script src='{{asset('User/assets/js/fly-cart.js')}}'></script>
        <script src='{{asset('User/assets/js/multi-countdown.js')}}'></script>
        <script src='{{asset('User/assets/js/theia-sticky-sidebar.js')}}'></script>
        <script src='{{asset('User/assets/js/functions.js')}}'></script>
        <script src='{{asset('User/assets/js/custom.js')}}'></script>
@yield('scripts')

</body>

</html>
