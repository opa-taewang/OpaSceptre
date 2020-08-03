<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Basic page needs-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/storage/images/icons/favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Fonts -->
    {{-- <link rel="dns-prefetch" href="//fonts.gstatic.com"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="app">
    <div class="page-wrapper">
       {{-- header --}}
       @include('layouts.header')

        <main class="main">
            @yield('content')

            @include('layouts.footer')
        <!-- End .footer -->
    </div><!-- End .page-wrapper -->

    {{-- Mobile menu --}}
    @include('layouts.mobile')

    {{-- Newsletter Pop up --}}
    @include('layouts.newsletter')

    {{-- Add Cart Modal --}}
    @include('layouts.cart')

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
