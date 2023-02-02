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

    <meta name="keywords" content="{{ $seo->meta_keyword }}">

    <meta name="description" content="{{ $seo->meta_description }}">

    <!--==================================  MAGNEWS THEME CSS  =============================================================-->

	<link rel="icon" type="image/png" href="{{ asset('frontend/assets/images/icons/favicon.png') }}images/icons/favicon.png"/>

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/fonts/fontawesome-5.0.8/css/fontawesome-all.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/fonts/iconic/css/material-design-iconic-font.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/animate/animate.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/css-hamburgers/hamburgers.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/vendor/animsition/css/animsition.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/util.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/assets/css/main.css') }}">

    <!-- Jquery -->

    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

</head>

<body class="animsition">

    <div class="main_website">

        @include('frontend.body.header')

        {{-- @include('frontend.body.breaking_news') --}}

        @yield('home')

        {{-- @include('frontend.body.footer') --}}

    </div>

    <!--==================================  MAGNEWS THEME JS  =============================================================-->

	{{-- <script src="{{ asset('frontend/assets/vendor/jquery/jquery-3.2.1.min.js') }}"></script> --}}

    <script src="{{ asset('frontend/assets/vendor/animsition/js/animsition.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
