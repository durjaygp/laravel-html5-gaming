<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="robots" content="index,follow"><!-- All Search Engines -->
    <meta name="googlebot" content="index,follow"><!-- Google Specific -->
    <meta name="author" content="{{$website->author}}"/>
    <meta name="keywords" content="{{$website->keywords}}" />
    <meta name="url" content="{{$website->url}}" />
    <meta name="google-site-verification" content="{{$website->google}}">
    <meta name="tags" content="{{$website->tags}}" />
    <meta name="description" content="{{$website->description}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset($website->fav_icon)}}">
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
    <link rel="stylesheet" href="{{asset('/')}}iziToast/dist/css/iziToast.min.css">
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

<script src="{{asset('/')}}iziToast/dist/js/iziToast.min.js"></script>
<script src="{{asset('geco')}}/js/main.js"></script>
@if($errors->any())
    @foreach($errors->all() as $error)
        <script>
            iziToast.error({
                title: '',
                position:'topRight',
                message: '{{$error}}',
            });
        </script>
    @endforeach
@endif

@if(session()->get('success'))
    <script>
        iziToast.success({
            title: '',
            position:'topRight',
            message: '{{session()->get('success')}}',
        });

    </script>
@endif

@if(session()->get('warning'))
    <script>
        iziToast.warning({
            title: '',
            position:'topRight',
            message: '{{session()->get('warning')}}',
        });
    </script>
@endif
</body>
</html>
