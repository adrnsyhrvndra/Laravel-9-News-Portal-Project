@php

    $cddate = new DateTime();

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

                    <a href="#">

                        <span class="fab fa-facebook-f"></span>

                    </a>

                    <a href="#">

                        <span class="fab fa-twitter"></span>

                    </a>

                    <a href="#">

                        <span class="fab fa-pinterest-p"></span>

                    </a>

                    <a href="#">

                        <span class="fab fa-vimeo-v"></span>

                    </a>

                    <a href="#">

                        <span class="fab fa-youtube"></span>

                    </a>

                </div>

            </div>

        </div>

        <!-- Header Mobile -->
        <div class="wrap-header-mobile">
            <!-- Logo moblie -->
            <div class="logo-mobile">
                <a href="index.html"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
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
                        <span>
                            New York, NY
                        </span>

                        <img class="m-b-1 m-rl-8" src="images/icons/icon-night.png" alt="IMG">

                        <span>
                            HI 58° LO 56°
                        </span>
                    </span>
                </li>

                <li class="left-topbar">
                    <a href="#" class="left-topbar-item">
                        About
                    </a>

                    <a href="#" class="left-topbar-item">
                        Contact
                    </a>

                    <a href="#" class="left-topbar-item">
                        Sing up
                    </a>

                    <a href="#" class="left-topbar-item">
                        Log in
                    </a>
                </li>

                <li class="right-topbar">
                    <a href="#">
                        <span class="fab fa-facebook-f"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-twitter"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-pinterest-p"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-vimeo-v"></span>
                    </a>

                    <a href="#">
                        <span class="fab fa-youtube"></span>
                    </a>
                </li>
            </ul>

            <ul class="main-menu-m">
                <li>
                    <a href="index.html">Home</a>
                    <ul class="sub-menu-m">
                        <li><a href="index.html">Homepage v1</a></li>
                        <li><a href="home-02.html">Homepage v2</a></li>
                        <li><a href="home-03.html">Homepage v3</a></li>
                    </ul>

                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>

                <li>
                    <a href="category-01.html">News</a>
                </li>

                <li>
                    <a href="category-02.html">Entertainment </a>
                </li>

                <li>
                    <a href="category-01.html">Business</a>
                </li>

                <li>
                    <a href="category-02.html">Travel</a>
                </li>

                <li>
                    <a href="category-01.html">Life Style</a>
                </li>

                <li>
                    <a href="category-02.html">Video</a>
                </li>

                <li>
                    <a href="#">Features</a>
                    <ul class="sub-menu-m">
                        <li><a href="category-01.html">Category Page v1</a></li>
                        <li><a href="category-02.html">Category Page v2</a></li>
                        <li><a href="blog-grid.html">Blog Grid Sidebar</a></li>
                        <li><a href="blog-list-01.html">Blog List Sidebar v1</a></li>
                        <li><a href="blog-list-02.html">Blog List Sidebar v2</a></li>
                        <li><a href="blog-detail-01.html">Blog Detail Sidebar</a></li>
                        <li><a href="blog-detail-02.html">Blog Detail No Sidebar</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>

                    <span class="arrow-main-menu-m">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </li>
            </ul>
        </div>

        <div class="wrap-logo container">

            <!-- Logo desktop -->

            <div class="logo">

                @php

                    $logoapp =  App\Models\Sitesetting::find(1);

                @endphp

                <a href="index.html"><img src="{{ asset($logoapp->site_logo) }}" alt="LOGO" width="90"></a>

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

                                @php

                                    $subcategories = App\Models\Subcategory::where('category_id',$category->id)->orderBy('subcategory_name','ASC')->get();

                                @endphp

                                <ul class="sub-menu">

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


