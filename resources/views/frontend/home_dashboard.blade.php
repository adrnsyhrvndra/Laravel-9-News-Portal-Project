<!DOCTYPE html>

<html lang="en-US">

<head>

    @php

        $seo = App\Models\SeoSetting::find(1);

    @endphp

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="title" content="{{ $seo->meta_title }}">

    <meta name="author" content="{{ $seo->meta_author }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> @yield('title') </title>

    <link rel="shortcut icon" href="assets/images/favicon.gif" type="image/x-icon">

    <meta name="keywords" content="{{ $seo->meta_keyword }}">

    <meta name="description" content="{{ $seo->meta_description }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/line-awesome.min.css') }}" />

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/headstyle.css') }}" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style>

        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }

    </style>

    <link rel="stylesheet" id="wp-block-library-css" href="{{ asset('frontend/assets/css/style.min.css') }}"
        media="all">
    <link rel="stylesheet" id="contact-form-7-css" href="{{ asset('frontend/assets/css/styles.css') }}" media="all">
    <link rel="stylesheet" id="newsflash-style-css" href="{{ asset('frontend/assets/css/style.css') }}" media="all">
    <link rel="stylesheet" id="common-themesbazar-css" href="{{ asset('frontend/assets/css/common-themesbazar.css') }}"
        media="all">
    <link rel="stylesheet" id="newsflash-lineawesome-css" href="{{ asset('frontend/assets/css/line-awesome.min.css') }}"
        media="all">
    <link rel="stylesheet" id="newsflash-stellarnav-css" href="{{ asset('frontend/assets/css/stellarnav.css') }}"
        media="all">
    <link rel="stylesheet" id="newsflash-jquery-css" href="{{ asset('frontend/assets/css/jquery-ui.css') }}"
        media="all">
    <link rel="stylesheet" id="newsflash-magnific-css" href="{{ asset('frontend/assets/css/magnific-popup.css') }}"
        media="all">
    <link rel="stylesheet" id="newsflash-carousel-css" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}"
        media="all">
    <link rel="stylesheet" id="newsflash-responsive-css" href="{{ asset('frontend/assets/css/responsive.css') }}"
        media="all">
    <link rel="stylesheet" id="newsflash-bootstrap-css" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}"
        media="all">

    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <script charset="utf-8" src="{{ asset('frontend/assets/js/horizon_timeline.08c300ab95020b1109a05214ccb84dea.js') }}">
    </script>

    <!-- Jquery -->

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

</head>

<body class="home blog" oncontextmenu="return true" data-new-gr-c-s-check-loaded="14.1078.0" data-gr-ext-installed="">

    <div class="main_website">

        @include('frontend.body.header')

        @include('frontend.body.breaking_news')

        @yield('home')

        @include('frontend.body.footer')

    </div>

    <script src="{{ asset('frontend/assets/regenerator-runtime.min.js') }}" id="regenerator-runtime-js"></script>
    <script src="{{ asset('frontend/assets/wp-polyfill.min.js') }}" id="wp-polyfill-js"></script>

    <script src="{{ asset('frontend/assets/js/index.js') }}" id="contact-form-7-js"></script>
    <script src="{{ asset('frontend/assets/js/jquery-3.5.1.min.js') }}" id="newsflash-jquery-js"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}" id="newsflash-bootstrap-js"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}" id="newsflash-bootstrapbundle-js"></script>
    <script src="{{ asset('frontend/assets/js/stellarnav.min.js') }}" id="newsflash-stellarnav-js"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}" id="newsflash-carousel-js"></script>
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}" id="newsflash-magnific-js"></script>
    <script src="{{ asset('frontend/assets/js/jquery-ui.js') }}" id="newsflash-jqueryui-js"></script>
    <script src="{{ asset('frontend/assets/js/lazyload.min.js') }}" id="newsflash-lazyload-js"></script>
    <script src="{{ asset('frontend/assets/js/main.js') }}" id="newsflash-main-js"></script>

    <script src="https://kit.fontawesome.com/97ff43f8ef.js" crossorigin="anonymous"></script>

</body>

</html>
