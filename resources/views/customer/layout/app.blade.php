<!DOCTYPE html>
<html class="no-js" lang="">


<!-- Mirrored by: HTTrack Website Copier/3.x. Site: www.radiustheme.com. File: /demo/html/classima/grid-view1.html. Date: Thu, 01 Dec 2022 06:32:58 GMT -->
<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Code97 | Products</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('customer_asset/dependencies/bootstrap/css/bootstrap.min.css') }}">
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{ asset('customer_asset/dependencies/fontawesome/css/all.min.css') }}">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('customer_asset/dependencies/flaticon/flaticon.css') }}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{ asset('customer_asset/dependencies/owl.carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('customer_asset/dependencies/owl.carousel/css/owl.theme.default.min.css') }}">
    <!-- Animated Headlines CSS -->
    <link rel="stylesheet" href="{{ asset('customer_asset/dependencies/jquery-animated-headlines/css/jquery.animatedheadline.css') }}">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="{{ asset('customer_asset/dependencies/magnific-popup/css/magnific-popup.css') }}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('customer_asset/dependencies/animate.css/css/animate.min.css') }}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{ asset('customer_asset/dependencies/meanmenu/css/meanmenu.min.css') }}">
    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="{{ asset('customer_asset/assets/css/app.css') }}">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <style>
        
    </style>
</head>

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->
    <!-- ScrollUp Start Here -->
    <a href="#wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- ScrollUp End Here -->
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <div id="wrapper" class="wrapper">

        <!--=====================================-->
        <!--=            Header Start           =-->
        <!--=====================================-->
        @include('customer.layout.header')


        <!--=====================================-->
        <!--=    All Pages Content Yield Here   =-->
        <!--=====================================-->
        @yield('content')



        <!--=====================================-->
        <!--=       Footer Start           	=-->
        <!--=====================================-->
        @include('customer.layout.footer')

    </div>
    <!-- Jquery Js -->
    <script src="{{ asset('customer_asset/dependencies/jquery/js/jquery.min.js') }}"></script>
    <!-- Popper Js -->
    <script src="{{ asset('customer_asset/dependencies/popper.js/js/popper.min.js') }}"></script>
    <!-- Bootstrap Js -->
    <script src="{{ asset('customer_asset/dependencies/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Waypoints Js -->
    <script src="{{ asset('customer_asset/dependencies/waypoints/js/jquery.waypoints.min.js') }}"></script>
    <!-- Counterup Js -->
    <script src="{{ asset('customer_asset/dependencies/jquery.counterup/js/jquery.counterup.min.js') }}"></script>
    <!-- Owl Carousel Js -->
    <script src="{{ asset('customer_asset/dependencies/owl.carousel/js/owl.carousel.min.js') }}"></script>
    <!-- ImagesLoaded Js -->
    <script src="{{ asset('customer_asset/dependencies/imagesloaded/js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- Isotope Js -->
    <script src="{{ asset('customer_asset/dependencies/isotope-layout/js/isotope.pkgd.min.js') }}"></script>
    <!-- Animated Headline Js -->
    <script src="{{ asset('customer_asset/dependencies/jquery-animated-headlines/js/jquery.animatedheadline.min.js') }}"></script>
    <!-- Magnific Popup Js -->
    <script src="{{ asset('customer_asset/dependencies/magnific-popup/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- ElevateZoom Js -->
    <script src="{{ asset('customer_asset/dependencies/elevatezoom/js/jquery.elevateZoom-2.2.3.min.js') }}"></script>
    <!-- Bootstrap Validate Js -->
    <script src="{{ asset('customer_asset/dependencies/bootstrap-validator/js/validator.min.js') }}"></script>
    <!-- Meanmenu Js -->
    <script src="{{ asset('customer_asset/dependencies/meanmenu/js/jquery.meanmenu.min.js') }}"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtmXSwv4YmAKtcZyyad9W7D4AC08z0Rb4"></script>
    <!-- Site Scripts -->
    <script src="{{ asset('customer_asset/assets/js/app.js') }}"></script>

</body>


<!-- Mirrored by: HTTrack Website Copier/3.x. Site: www.radiustheme.com. File: /demo/html/classima/grid-view1.html. Date: Thu, 01 Dec 2022 06:33:05 GMT -->
</html>