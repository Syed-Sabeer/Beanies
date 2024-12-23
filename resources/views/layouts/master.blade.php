<!doctype html>
<html lang="en" data-bs-theme="light" data-footer="dark">

    <head>

        <meta charset="utf-8">
        <title>Index | Toner eCommerce + Admin HTML Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Toner - eCommerce + Admin HTML Template Build with HTML, React, Laravel, Nodejs" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!--Swiper slider css-->
        <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="{{ asset('assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.5.0/remixicon.css" integrity="sha512-6p+GTq7fjTHD/sdFPWHaFoALKeWOU9f9MPBoPnvJEWBkGS4PKVVbCpMps6IXnTiXghFbxlgDE8QRHc3MU91lJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" integrity="sha512-dPXYcDub/aeb08c63jRq/k6GaKccl256JQy/AnOq7CAnEZ9FzSL9wSbcZkMp4R26vBsMLFYH4kQ67/bbV8XaCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>


        @include('layouts.nav')



        @yield('main-container')

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-info btn-icon" style="bottom: 50px;" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->



    @include('layouts.footer')

         <!-- JAVASCRIPT -->
         <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
         <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
         <script src="{{ asset('assets/js/plugins.js') }}"></script>

         <!-- isotope-layout -->
         <script src="{{ asset('assets/libs/isotope-layout/isotope.pkgd.min.js') }}"></script>

         <!--Swiper slider js-->
         <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

         <!-- Countdown js -->
         <script src="{{ asset('assets/js/pages/coming-soon.init.js') }}"></script>

         <script src="{{ asset('assets/js/frontend/landing-index.init.js') }}"></script>
         <script src="{{ asset('assets/js/frontend/product-details.init.js') }}"></script>

         <script src="{{ asset('assets/js/frontend/menu.init.js') }}"></script>

     </body>

 </html>
