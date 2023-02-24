@php

    $cddate = new DateTime();

@endphp

@php

    $logoapp =  App\Models\Sitesetting::find(1);

@endphp

@php

    $urlSettingSociale =  App\Models\Sitesetting::find(1);

@endphp

<header>

    <div class="container-menu-desktop">

        <div class="topbar">

            <div class="content-topbar container h-100">

                <div class="left-topbar">

                    <span class="left-topbar-item flex-wr-s-c">

                        {{-- <img class="m-b-1 m-rl-8" src="images/icons/icon-night.png" alt="IMG"> --}}

                        <span>

                            {{ $cddate->format('l d-m-Y') }}

                        </span>

                    </span>

                    @auth

                        <a href="{{ route('user.dashboard') }}" class="left-topbar-item">My Account</a>

                        <a href="{{ route('user.logout') }}" class="left-topbar-item">Logout</a>

                    @else

                        <a href="{{ route('login') }}" class="left-topbar-item">Login</a>

                        <a href="{{ route('register') }}" class="left-topbar-item">Register</a>

                    @endauth

                </div>

                <div class="right-topbar">

                    <a href="{{ $urlSettingSociale->facebook_url }}">

                        <span class="fab fa-facebook-f"></span>

                    </a>

                    <a href="{{ $urlSettingSociale->instagram_url }}">

                        <span class="fab fa-instagram"></span>

                    </a>

                    <a href="{{ $urlSettingSociale->pinterest_url }}">

                        <span class="fab fa-pinterest-p"></span>

                    </a>

                    <a href="{{ $urlSettingSociale->youtube_url }}">

                        <span class="fab fa-youtube"></span>

                    </a>

                </div>

            </div>

        </div>

        <!-- Header Mobile -->

        <div class="wrap-header-mobile">

            <!-- Logo moblie -->

            <div class="logo-mobile">

                <a href="index.html">

                    <img src="{{ asset($logoapp->site_logo) }}" alt="IMG-LOGO">

                </a>

            </div>

            <!-- Button show menu -->

            <div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">

                <span class="hamburger-box">

                    <span class="hamburger-inner"></span>

                </span>

            </div>

        </div>

        <!-- Menu Mobile -->

        <div class="menu-mobile">

            <ul class="topbar-mobile">

                <li class="left-topbar">

                    <span class="left-topbar-item flex-wr-s-c">

                        {{-- <img class="m-b-1 m-rl-8" src="images/icons/icon-night.png" alt="IMG"> --}}

                        <span>

                            {{ $cddate->format('l d-m-Y') }}

                        </span>

                    </span>

                </li>

                <li class="left-topbar">

                    @auth

                        <a href="{{ route('user.dashboard') }}" class="left-topbar-item">My Account</a>

                        <a href="{{ route('user.logout') }}" class="left-topbar-item">Logout</a>

                    @else

                        <a href="{{ route('login') }}" class="left-topbar-item">Login</a>

                        <a href="{{ route('register') }}" class="left-topbar-item">Register</a>

                    @endauth

                </li>

                <li class="right-topbar">

                    <a href="{{ $urlSettingSociale->facebook_url }}">

                        <span class="fab fa-facebook-f"></span>

                    </a>

                    <a href="{{ $urlSettingSociale->instagram_url }}">

                        <span class="fab fa-instagram"></span>

                    </a>

                    <a href="{{ $urlSettingSociale->pinterest_url }}">

                        <span class="fab fa-pinterest-p"></span>

                    </a>

                    <a href="{{ $urlSettingSociale->youtube_url }}">

                        <span class="fab fa-youtube"></span>

                    </a>

                </li>

            </ul>

            <ul class="main-menu-m">

                @php

                    $categories = App\Models\Category::orderBy('category_name','ASC')->limit(9)->get();

                @endphp

                @foreach ( $categories as $category)

                    <li>

                        <a href="{{ url('news/category/'.$category->id.'/'.$category->category_slug) }}">{{ GoogleTranslate::trans($category->category_name, app()->getLocale()) }}</a>

                        <ul class="sub-menu-m">

                            @php

                                $subcategories = App\Models\Subcategory::where('category_id',$category->id)->orderBy('subcategory_name','ASC')->get();

                            @endphp

                            @foreach ($subcategories as $subcategory)

                                <li>

                                    <a href="{{ url('news/subcategory/'.$subcategory->id.'/'.$subcategory->subcategory_slug) }}">

                                        {{ GoogleTranslate::trans($subcategory->subcategory_name, app()->getLocale())  }}

                                    </a>

                                </li>

                            @endforeach

                        </ul>

                        <span class="arrow-main-menu-m">

                            <i class="fa fa-angle-right" aria-hidden="true"></i>

                        </span>

                    </li>

                @endforeach

            </ul>

        </div>

        <div class="wrap-logo container">

            <!-- Logo desktop -->

            <div class="logo">

                <a href="index.html"><img src="{{ asset($logoapp->site_logo) }}" alt="LOGO"></a>

            </div>

            <!-- Banner -->

            <div class="banner-header">

                @php

                    $banner =  App\Models\Banners::find(1);

                @endphp

                <a href="https://themewagon.com/themes/free-bootstrap-4-html5-news-website-template-magnews2/">

                    <img src="{{ asset($banner->home_one) }}" alt="IMG">

                </a>

            </div>

        </div>


        <div class="wrap-main-nav">

            <div class="main-nav">

                <!-- Menu desktop -->

                <nav class="menu-desktop">

                    <a class="logo-stick" href="index.html">

                        <img src="images/icons/logo-01.png" alt="LOGO">

                    </a>

                    <ul class="main-menu">

                        <li class="main-menu-active">

                            <a href="{{ route('home.index') }}">Home</a>

                        </li>

                        @php

                            $categories = App\Models\Category::orderBy('category_name','ASC')->limit(9)->get();

                        @endphp

                        @foreach ( $categories as $category)

                            <li>

                                <a href="{{ url('news/category/'.$category->id.'/'.$category->category_slug) }}">{{ GoogleTranslate::trans($category->category_name, app()->getLocale()) }}</a>

                                <ul class="sub-menu">

                                    @php

                                        $subcategories = App\Models\Subcategory::where('category_id',$category->id)->orderBy('subcategory_name','ASC')->get();

                                    @endphp

                                    @foreach ($subcategories as $subcategory)

                                    <li>

                                        <a href="{{ url('news/subcategory/'.$subcategory->id.'/'.$subcategory->subcategory_slug) }}">

                                            {{ GoogleTranslate::trans($subcategory->subcategory_name, app()->getLocale())  }}

                                        </a>

                                    </li>

                                    @endforeach

                                </ul>

                            </li>

                        @endforeach

                    </ul>

                </nav>

            </div>

        </div>

    </div>

</header>

<script type="text/javascript">

    var url = "{{ route('changeLang') }}";

    $(".changeLang").change(function(){

        window.location.href = url + "?lang=" + $(this).val();

    });

</script>


