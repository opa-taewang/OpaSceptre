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
    <link rel="stylesheet" href="{{asset('custom/style.min.css')}}">
</head>
<body id="app">
    <div class="page-wrapper">
       {{-- header --}}
       @include('layouts.header')

        <main class="main">
            @yield('content')
        </main><!-- End .main -->

            @include('layouts.footer')
        <!-- End .footer -->
    </div><!-- End .page-wrapper -->

    {{-- Mobile menu --}}
    @include('layouts.mobile')

    {{-- Newsletter Pop up --}}
    {{-- @include('layouts.newsletter') --}}

    {{-- Add Cart Modal --}}
    @include('layouts.cart')

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,600,700,800', 'Poppins:300,400,500,600,700']
            }
        };
        (function (d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = '/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
</body>
</html>
