<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel='icon' href="{{ asset('images/ARC Logo 3.png') }}">

    <title>{{ config('app.name') }} - @yield('title')</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Font -->
    {{-- <link href="https://fonts.googleapis.com/css?family=Encode+Sans+Expanded:400,600,700" rel="stylesheet"> --}}

    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/themify/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <link rel="stylesheet" href="{{asset('fonts/elegant-font/html-css/style.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/animate/animate.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/animsition/css/animsition.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/lightbox2/css/lightbox.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/util.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body class="animsition">
    @include('includes.header')


<script>
    console.log('from header uh?');
    console.log(document.querySelector('.countrySelector'))
    document.querySelector('.countrySelector').addEventListener('change', something);
    document.querySelector('.countrySelector2').addEventListener('change', something);
    function something(e){
        let tar = e.target.options[e.target.selectedIndex];
        sessionStorage.setItem('region',tar.value);
        window.location.reload();
    }
console.log('still in header uh?')
</script>
    @include('includes.script')
    @yield('content')

    @include('includes.footer')




<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
    <span class="symbol-btn-back-to-top">
        <i class="fa fa-angle-double-up" aria-hidden="true"></i>
    </span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>

</body>
</html>