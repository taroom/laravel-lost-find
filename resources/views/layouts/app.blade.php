<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- Styles -->
    <link href="{{ asset('enno/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('enno/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('enno/assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('enno/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('enno/assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('enno/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    @stack('scriptcss')
</head>
<body>
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')

    <script src="{{ asset('enno/assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('enno/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('enno/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('enno/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('enno/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('enno/assets/vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('enno/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('enno/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('enno/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
    @stack('scriptjs')

    <script src="{{ asset('enno/assets/js/main.js') }}" defer></script>
</body>
</html>
