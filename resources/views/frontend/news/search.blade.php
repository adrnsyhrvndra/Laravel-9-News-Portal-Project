@extends('frontend.home_dashboard')

@section('home')

@section('title')

    Search News | {{ $item }}

@endsection

<!-- Headline -->

<div class="container">

    <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">

        <div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">

            <span class="text-uppercase cl2 p-r-8">

                Breaking News:

            </span>

            @php

                $breaking_news = App\Models\NewsPost::where('status',1)->where('breaking_news',1)->orderBy('created_at','DESC')->limit(3)->get();

            @endphp

            <span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">

                @foreach ($breaking_news as $beritabreaking)

                    <span class="dis-inline-block slide100-txt-item animated visible-false">

                        {{ Str::limit($beritabreaking->news_title,70) }}

                    </span>

                @endforeach

            </span>

        </div>

        <div class="form-group mt-3 mr-2">

            <select class="form-control changeLang bo-1-rad-18 of-hidden bocl11 custom-select-lang-brewok" id="exampleFormControlSelect1">

                <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }} >English</option>

                <option value="id" {{ session()->get('locale') == 'id' ? 'selected' : '' }} >Indonesia</option>

                <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }} >Arab</option>

                <option value="nl" {{ session()->get('locale') == 'nl' ? 'selected' : '' }} >Dutch</option>

                <option value="ja" {{ session()->get('locale') == 'ja' ? 'selected' : '' }} >Jepang</option>

            </select>

        </div>

        <form action="{{ route('news.search') }}" method="post">

            @csrf

            <div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">

                <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search News">

                <button type="submit" class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">

                    <i class="zmdi zmdi-search"></i>

                </button>

            </div>

        </form>

    </div>

</div>

<!-- Page heading -->

<div class="container p-t-4 p-b-40">

    <h2 class="f1-l-1 cl2">

        Search Result For "{{ $item }}"

    </h2>

</div>

<!-- Post -->

<section class="bg0 p-b-55">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-10 col-lg-8 p-b-80">

                <div class="row">

                    @foreach ($news as $item)

                        <div class="col-sm-6 p-r-25 p-r-15-sr991">

                            <!-- Item latest -->

                            <div class="m-b-45">

                                <a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}" class="wrap-pic-w hov1 trans-03">

                                    <img src="{{ asset($item->image) }}" alt="IMG">

                                </a>

                                <div class="p-t-16">

                                    <h5 class="p-b-5">

                                        <a href="{{ url('news/details/'.$item->id.'/'.$item->news_title_slug) }}" class="f1-m-3 cl2 hov-cl10 trans-03">

                                            {{ $item->news_title }}

                                        </a>

                                    </h5>

                                    <span class="cl8">

                                        <a href="{{ route('reporter.all.news',$item['userRelation']['id']) }}" class="f1-s-4 cl8 hov-cl10 trans-03">

                                            by {{ $item['userRelation']['name'] }}

                                        </a>

                                        <span class="f1-s-3 m-rl-3">

                                            -

                                        </span>

                                        <span class="f1-s-3">

                                            {{ $item->created_at->format('M d Y') }}

                                        </span>

                                    </span>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

                <!-- Pagination -->

                <div class="flex-wr-s-c m-rl--7 p-t-15">

                    <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7 pagi-active">1</a>

                    <a href="#" class="flex-c-c pagi-item hov-btn1 trans-03 m-all-7">2</a>

                </div>

            </div>

            <!-- Sidebar -->

            <div class="col-md-10 col-lg-4 p-b-30">

                <div class="p-l-10 p-rl-0-sr991">

                    <!-- Subscribe -->

                    <div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-55">

                        <h5 class="f1-m-5 cl0 p-b-10">

                            Langganan

                        </h5>

                        <p class="f1-s-1 cl0 p-b-25">

                            Dapatkan semua berita kami yang terupdate.

                        </p>

                        <form class="size-a-9 pos-relative">

                            <input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="Email">


                            <button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">

                                <i class="fa fa-arrow-right"></i>

                            </button>

                        </form>

                    </div>

                    <div>

                        <div class="how2 how2-cl4 flex-s-c">

                            <h3 class="f1-m-2 cl3 tab01-title">

                                Most Popular

                            </h3>

                        </div>

                        <ul class="p-t-35">

                            @foreach ($newspopular as $key => $newsitem)

                                <li class="flex-wr-sb-s p-b-22">

                                    <div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">

                                        {{ $key+1 }}

                                    </div>

                                    <a href="{{ url('news/details/'.$newsitem->id.'/'.$newsitem->news_title_slug) }}" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">

                                        {{ $newsitem->news_title }}

                                    </a>

                                </li>

                            @endforeach

                        </ul>

                    </div>

                    <!-- Banner Vertical -->

                    <div class="flex-c-s p-t-8">

                        <a href="#">

                            @php

                                $banners_vertical = App\Models\Banners::find(1);

                            @endphp

                            <img class="max-w-full" src="{{ asset($banners_vertical->vertical_banner) }}" alt="IMG">

                        </a>

                    </div>

                    <!-- Tag -->

                    <div>

                        <div class="how2 how2-cl4 flex-s-c m-b-30">

                            <h3 class="f1-m-2 cl3 tab01-title">

                                Tags

                            </h3>

                        </div>

                        <div class="flex-wr-s-s m-rl--5">

                            @foreach ($uniqueTags as $uniqueTag)

                                <a href="#" class="flex-c-c size-h-2 bo-1-rad-20 bocl12 f1-s-1 cl8 hov-btn2 trans-03 p-rl-20 p-tb-5 m-all-5">

                                    {{ $uniqueTag }}

                                </a>

                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
