@extends('frontend.home_dashboard')

@section('home')

@section('title')

    Category Page | {{ $breadcat->category_name }}

@endsection

<!-- Breadcrumb -->

<div class="container">

    <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">

        <div class="f2-s-1 p-r-30 m-tb-6 size-w-0 flex-wr-s-c">

            <a href="{{ route('home.index') }}" class="breadcrumb-item f1-s-3 cl9">

                Home

            </a>

            <a href="{{ url('news/category/'.$breadcat->id.'/'.$breadcat->category_slug) }}" class="breadcrumb-item f1-s-3 cl9">

                {{ $breadcat->category_name }}

            </a>

        </div>

        <div class="form-group mt-3 mr-2">

            <select class="form-control changeLang bo-1-rad-18 of-hidden bocl11" id="exampleFormControlSelect1">

                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }} >English</option>

                <option value="id" {{ session()->get('locale') == 'id' ? 'selected' : '' }} >Indonesia</option>

                <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }} >Arab</option>

                <option value="nl" {{ session()->get('locale') == 'nl' ? 'selected' : '' }} >Dutch</option>

                <option value="ja" {{ session()->get('locale') == 'ja' ? 'selected' : '' }} >Jepang</option>

            </select>

        </div>

        <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">

            <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">

            <button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">

                <i class="zmdi zmdi-search"></i>

            </button>

        </div>

    </div>

</div>

<!-- Page heading -->

<div class="container p-t-4 p-b-40">

    <h2 class="f1-l-1 cl2">

        {{ $breadcat->category_name }}

    </h2>

</div>

<!-- Feature post -->

<section class="bg0">

    <div class="container">

        <div class="row m-rl--1">

            @foreach ($news as $item)

                @if ($loop->index < 1)

                    <div class="col-12 p-rl-1 p-b-2">

                        <div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url({{ asset($item->image) }});">

                            <a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}" class="dis-block how1-child1 trans-03"></a>

                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">

                                <a href="{{ url('news/category/'.$item->id.'/'.$item->category_slug) }}" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">

                                    {{ $item['categoryRelation']['category_name'] }}

                                </a>

                                <h3 class="how1-child2 m-t-14 m-b-10">

                                    <a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">

                                        {{ $item->news_title }}

                                    </a>

                                </h3>

                                <span class="how1-child2">

                                    <span class="f1-s-4 cl11">

                                        <a class="cl11 hov-cl10 trans-03" href="{{ route('reporter.all.news',$item['userRelation']['id']) }}">{{ $item['userRelation']['name'] }}</a>

                                    </span>

                                    <span class="f1-s-3 cl11 m-rl-3">

                                        -

                                    </span>

                                    <span class="f1-s-3 cl11">

                                        {{ Carbon\Carbon::parse($item->post_date)->diffForHumans() }}

                                    </span>

                                </span>

                            </div>

                        </div>

                    </div>

                @endif

            @endforeach

            @foreach ($newsfour as $item)

                @if ($loop->index > 0)

                    <div class="col-sm-6 col-md-3 p-rl-1 p-b-2">

                        <div class="bg-img1 size-a-14 how1 pos-relative" style="background-image: url({{ asset($item->image) }});">

                            <a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}" class="dis-block how1-child1 trans-03"></a>

                            <div class="flex-col-e-s s-full p-rl-25 p-tb-20">

                                <a href="{{ url('news/category/'.$item->id.'/'.$item->category_slug) }}" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">

                                    {{ $item['categoryRelation']['category_name'] }}

                                </a>

                                <h3 class="how1-child2 m-t-14">

                                    <a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">

                                        {{ $item->news_title }}

                                    </a>

                                </h3>

                            </div>

                        </div>

                    </div>

                @endif

            @endforeach

        </div>

    </div>

</section>

<!-- Post -->

<section class="bg0 p-t-110 p-b-25">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-10 col-lg-8 p-b-80">

                <div class="row">

                    @foreach ($newsallbycategory as $item)

                        @if ($loop->index > 5)

                            <div class="col-sm-6 p-r-25 p-r-15-sr991">

                                <!-- Item -->

                                <div class="p-b-53">

                                    <a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}" class="wrap-pic-w hov1 trans-03">

                                        <img src="{{ asset($item->image) }}" alt="IMG">

                                    </a>

                                    <div class="flex-col-s-c p-t-16">

                                        <h5 class="p-b-5 txt-center">

                                            <a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}" class="f1-m-3 cl2 hov-cl10 trans-03">

                                                {{ $item->news_title }}

                                            </a>

                                        </h5>

                                        <div class="cl8 txt-center p-b-17">

                                            <a href="{{ url('news/category/'.$item->category_id.'/'.$item->category_slug) }}" class="f1-s-4 cl8 hov-cl10 trans-03">

                                                {{ $item['categoryRelation']['category_name'] }}

                                            </a>

                                            <span class="f1-s-3 m-rl-3">

                                                -

                                            </span>

                                            <span class="f1-s-3">

                                                {{ Carbon\Carbon::parse($item->post_date)->diffForHumans() }}

                                            </span>

                                        </div>

                                        <p class="f1-s-11 cl6 txt-center p-b-16">

                                            {!! Str::limit($item->news_details,150) !!}

                                        </p>

                                        <a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}" class="f1-s-1 cl9 hov-cl10 trans-03">

                                            Read More

                                            <i class="m-l-2 fa fa-arrow-circle-right" aria-hidden="true"></i>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        @endif

                    @endforeach

                    @foreach ($newsallbycategory as $item)

                        @if ($loop->index < 5)

                            <div class="col-sm-6 p-r-25 p-r-15-sr991">

                                <!-- Item -->

                                <div class="p-b-53">

                                    <a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}" class="wrap-pic-w hov1 trans-03">

                                        <img src="{{ asset($item->image) }}" alt="IMG">

                                    </a>

                                    <div class="flex-col-s-c p-t-16">

                                        <h5 class="p-b-5 txt-center">

                                            <a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}" class="f1-m-3 cl2 hov-cl10 trans-03">

                                                {{ $item->news_title }}

                                            </a>

                                        </h5>

                                        <div class="cl8 txt-center p-b-17">

                                            <a href="{{ url('news/category/'.$item->category_id.'/'.$item->category_slug) }}" class="f1-s-4 cl8 hov-cl10 trans-03">

                                                {{ $item['categoryRelation']['category_name'] }}

                                            </a>

                                            <span class="f1-s-3 m-rl-3">

                                                -

                                            </span>

                                            <span class="f1-s-3">

                                                {{ Carbon\Carbon::parse($item->post_date)->diffForHumans() }}

                                            </span>

                                        </div>

                                        <p class="f1-s-11 cl6 txt-center p-b-16">

                                            {!! Str::limit($item->news_details,150) !!}

                                        </p>

                                        <a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}" class="f1-s-1 cl9 hov-cl10 trans-03">

                                            Read More

                                            <i class="m-l-2 fa fa-arrow-circle-right" aria-hidden="true"></i>

                                        </a>

                                    </div>

                                </div>

                            </div>

                        @endif

                    @endforeach

                </div>

                <!-- Pagination -->

                {{ $newsallbycategory->links('vendor.pagination.custom-num') }}

            </div>

            <div class="col-md-10 col-lg-4 p-b-80">

                <!-- Category -->

                <div class="p-b-60">

                    <div class="how2 how2-cl4 flex-s-c">

                        <h3 class="f1-m-2 cl3 tab01-title">

                            Category

                        </h3>

                    </div>

                    <ul class="p-t-35">

                        @foreach ($allcategories as $categoryitem)

                            <li class="how-bor3 p-rl-4">

                                <a href="{{ url('news/category/'.$categoryitem->id.'/'.$categoryitem->category_slug) }}" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">

                                    {{ $categoryitem->category_name }}

                                </a>

                            </li>

                        @endforeach

                    </ul>

                </div>

                <!-- Popular Posts -->

                <div class="p-b-30">

                    <div class="how2 how2-cl4 flex-s-c">

                        <h3 class="f1-m-2 cl3 tab01-title">

                            Popular Post

                        </h3>

                    </div>

                    <ul class="p-t-35">

                        @foreach ($newspopular as $newspopularitem)

                            <li class="flex-wr-sb-s p-b-30">

                                <a href="{{ url('news/details/'.$newspopularitem->id.'/'.$newspopularitem->news_title_slug) }}" class="size-w-10 wrap-pic-w hov1 trans-03">

                                    <img src="{{ asset($newspopularitem->image) }}" alt="IMG">

                                </a>

                                <div class="size-w-11">

                                    <h6 class="p-b-4">

                                        <a href="{{ url('news/details/'.$newspopularitem->id.'/'.$newspopularitem->news_title_slug) }}" class="f1-s-5 cl3 hov-cl10 trans-03">

                                            {{ $newspopularitem->news_title }}

                                        </a>

                                    </h6>

                                    <span class="cl8 txt-center p-b-24">

                                        <a href="{{ url('news/details/'.$newspopularitem->category_id.'/'.$newspopularitem->news_title_slug) }}" class="f1-s-6 cl8 hov-cl10 trans-03">

                                            {{ $newspopularitem['categoryRelation']['category_name'] }}

                                        </a>

                                        <span class="f1-s-3 m-rl-3">

                                            -

                                        </span>

                                        <span class="f1-s-3">

                                            {{ $newspopularitem->created_at->format('M d Y') }}

                                        </span>

                                    </span>

                                </div>

                            </li>

                        @endforeach

                    </ul>

                </div>

                <div class="p-l-10 p-rl-0-sr991">

                    <!-- Banner -->

                    <div class="flex-c-s p-t-8">

                        <a href="#">

                            @php

                                $banners_vertical = App\Models\Banners::find(1);

                            @endphp

                            <img class="max-w-full" src="{{ asset($banners_vertical->vertical_banner) }}" alt="IMG">

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
