<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Basic page needs-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://res.cloudinary.com/opasceptre/image/upload/v1604537283/icons/favicon_qz0ykx.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta name="keywords" content="HTML5 Template"/>
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('custom/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('custom/custom.css')}}">

    @toastr_css
</head>
<body>
    <div class="page-wrapper" id="app">
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
    @toastr_js

    @toastr_render
    @include('sweetalert::alert')

    @if(Session::has('otp_generated'))
        <script>
            $(function() {
                $('#otpInput').modal('show');
            });
        </script>
    @endif
    {{-- <script>
        $(document).ready(function() {

            // For select
            $('.selectQuantity').change(function (e) {
                e.preventDefault();

                var productId = $(this).attr("id");
                    $.ajax({
                        url: '/cartq/update/'+productId,
                        method: "get",
                        data: $('#quantityForm' + productId).serialize(),
                        success: function(data) {
                            data.type == 'success' ? toastr.success(data.message) : toastr.warning(data.message);
                            location.reload();
                        }
                    })
            });

    });
    </script> --}}
</body>
</html>
