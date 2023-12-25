<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('geco')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('geco')}}/css/animate.min.css">
    <link rel="stylesheet" href="{{asset('geco')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('geco')}}/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="{{asset('geco')}}/css/odometer.css">
    <link rel="stylesheet" href="{{asset('geco')}}/css/aos.css">
    <link rel="stylesheet" href="{{asset('geco')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('geco')}}/css/meanmenu.css">
    <link rel="stylesheet" href="{{asset('geco')}}/css/slick.css">
    <link rel="stylesheet" href="{{asset('geco')}}/css/default.css">
    <link rel="stylesheet" href="{{asset('geco')}}/css/style.css">
    <link rel="stylesheet" href="{{asset('geco')}}/css/responsive.css">
</head>
<body>
<!-- preloader -->
<div id="preloader">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <img src="{{asset('geco')}}/img/icon/preloader.svg" alt="">
        </div>
    </div>
</div>
<!-- preloader-end -->

<!-- header-area -->
@include('homePage.inc.header')
<!-- header-area-end -->

<!-- main-area -->
<main>

   @yield('content')

</main>
<!-- main-area-end -->

<!-- footer-area -->
@include('homePage.inc.footer')
<!-- footer-area-end -->




<script src="{{asset('geco')}}/js/vendor/jquery-3.4.1.min.js"></script>
<script src="{{asset('geco')}}/js/popper.min.js"></script>
<script src="{{asset('geco')}}/js/bootstrap.min.js"></script>
<script src="{{asset('geco')}}/js/isotope.pkgd.min.js"></script>
<script src="{{asset('geco')}}/js/slick.min.js"></script>
<script src="{{asset('geco')}}/js/jquery.meanmenu.min.js"></script>
<script src="{{asset('geco')}}/js/wow.min.js"></script>
<script src="{{asset('geco')}}/js/aos.js"></script>
<script src="{{asset('geco')}}/js/jquery.lettering.js"></script>
<script src="{{asset('geco')}}/js/jquery.textillate.js"></script>
<script src="{{asset('geco')}}/js/jquery.odometer.min.js"></script>
<script src="{{asset('geco')}}/js/jquery.appear.js"></script>
<script src="{{asset('geco')}}/js/owl.carousel.min.js"></script>
<script src="{{asset('geco')}}/js/jquery.countdown.min.js"></script>
<script src="{{asset('geco')}}/js/jquery.scrollUp.min.js"></script>
<script src="{{asset('geco')}}/js/imagesloaded.pkgd.min.js"></script>
<script src="{{asset('geco')}}/js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('geco')}}/js/plugins.js"></script>
<script src="{{asset('geco')}}/js/main.js"></script>
</body>
</html>
