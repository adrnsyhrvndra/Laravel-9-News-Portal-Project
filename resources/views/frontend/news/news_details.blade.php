@extends('frontend.home_dashboard')

@section('home')

@section('title')

    News Detail Page | {{$news->news_title }}

@endsection

    <!-- Breadcrumb -->
	<div class="container">

        <div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">

            <div class="f2-s-1 p-r-30 m-tb-6 size-w-0 flex-wr-s-c">

                <a href="{{ route('home.index') }}" class="breadcrumb-item f1-s-3 cl9">

                    Home

                </a>

                <a href="{{ url('news/category/'.$news->id.'/'.$news->category_slug) }}" class="breadcrumb-item f1-s-3 cl9">

                    {{ $news->news_title }}

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

    <section class="bg0 p-b-140 p-t-10">

        <div class="container">

            <div class="row justify-content-center">

                <!-- Main Content -->

                <div class="col-md-10 col-lg-8 p-b-20">

                    <div class="p-r-10 p-r-0-sr991">

                        <!-- Blog Detail -->

                        <div class="p-b-45">

                            <a href="#" class="f1-s-10 cl2 hov-cl10 trans-03 text-uppercase">

                                {{$news->category_name }}

                            </a>

                            <h3 class="f1-l-3 cl2 p-b-16 p-t-33 respon2">

                                {{$news->news_title }}

                            </h3>

                            <div class="flex-wr-s-s p-b-40">

                                <span class="f1-s-3 cl8 m-r-15">

                                    <a href="{{ route('reporter.all.news',$news->user_id) }}" class="f1-s-4 cl8 hov-cl10 trans-03">

                                        by {{ $news['userRelation']['name'] }}

                                    </a>

                                    <span class="m-rl-3"> - </span>

                                    <span>

                                        {{ $news->created_at->format('M d Y') }}

                                    </span>

                                </span>

                                <span class="f1-s-3 cl8 m-r-15">

                                    Views : {{ $news->view_count }}

                                </span>

                                <a href="#" class="f1-s-3 cl8 hov-cl10 trans-03 m-r-15">

                                    0 Comment

                                </a>

                            </div>

                            <div class="wrap-pic-max-w p-b-30">

                                <img src="{{ asset($news->image) }}" alt="IMG">

                            </div>

                            <button id="inc" class="btn btn-dark">A+</button>

                            <button id="dec" class="btn btn-dark">A-</button>

                            <news-font>

                                <p class="f1-s-11 cl6 p-b-25">

                                    {!! $news->news_details !!}

                                </p>

                            </news-font>

                            <!-- Tag -->

                            <div class="flex-s-s p-t-12 p-b-15">

                                <span class="f1-s-12 cl5 m-r-8">

                                    Tags:

                                </span>

                                <div class="flex-wr-s-s size-w-0">

                                    @foreach ($tags_all as $tag)

                                        <a href="#" class="f1-s-12 cl8 hov-link1 m-r-15">

                                            {{ ucwords($tag) }}

                                        </a>

                                    @endforeach

                                </div>

                            </div>

                            <!-- Share -->

                            <div class="flex-s-s">
                                <span class="f1-s-12 cl5 p-t-1 m-r-15">
                                    Share:
                                </span>

                                <div class="flex-wr-s-s size-w-0">
                                    <a href="#" class="dis-block f1-s-13 cl0 bg-facebook borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                        <i class="fab fa-facebook-f m-r-7"></i>
                                        Facebook
                                    </a>

                                    <a href="#" class="dis-block f1-s-13 cl0 bg-twitter borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                        <i class="fab fa-twitter m-r-7"></i>
                                        Twitter
                                    </a>

                                    <a href="#" class="dis-block f1-s-13 cl0 bg-google borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                        <i class="fab fa-google-plus-g m-r-7"></i>
                                        Google+
                                    </a>

                                    <a href="#" class="dis-block f1-s-13 cl0 bg-pinterest borad-3 p-tb-4 p-rl-18 hov-btn1 m-r-3 m-b-3 trans-03">
                                        <i class="fab fa-pinterest-p m-r-7"></i>
                                        Pinterest
                                    </a>
                                </div>
                            </div>

                        </div>

                        @php

                            $review = App\Models\Reviews::where('news_id',$news->id)->latest()->limit(5)->get();

                        @endphp

                        @foreach ($review as $item)

                            @if ($item->status == 0)



                            @else

                                <div class='container p-b-50'>

                                    <div class="media comment-box">

                                        <div class="media-left">

                                            <a href="#">

                                                <img class="img-responsive user-photo" src="{{ (!empty($item->UserRelation->photo)) ? url('upload/user_images/'.$item->UserRelation->photo) : url('upload/no_image.jpg') }}">

                                            </a>

                                        </div>

                                        <div class="media-body">

                                            <h4 class="media-heading">{{ $item->UserRelation->name }} - {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</h4>

                                            <p>{{ $item->comment }}</p>

                                        </div>

                                    </div>

                                </div>

                            @endif

                        @endforeach

                        <!-- Leave a comment -->

                        @guest

                            <p>

                                <b> To Post A Comment,You Need To Login First <a href="{{ route('login') }}"></a> </b>

                            </p>

                        @else

                            <form action="{{ route('store.review') }}" method="post">

                                @csrf

                                @if (session('status'))

                                    <div class="alert alert-success" role="alert">

                                        {{ session('status') }}

                                    </div>

                                @elseif(session('error'))

                                    <div class="alert alert-danger" role="alert">

                                        {{ session('error') }}

                                    </div>

                                @endif

                                <div>

                                    <h4 class="f1-l-4 cl3 p-b-12">

                                        Leave a Comment

                                    </h4>

                                    <p class="f1-s-13 cl8 p-b-40">

                                        Your email address will not be published. Required fields are marked *

                                    </p>

                                    <input type="hidden" name="news_id" value="{{ $news->id }}">

                                    <textarea class="bo-1-rad-3 bocl13 size-a-15 f1-s-13 cl5 plh6 p-rl-18 p-tb-14 m-b-20" name="comment" placeholder="Comment..."></textarea>

                                    <button type="submit" class="size-a-17 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-10">

                                        Post Comment

                                    </button>

                                </div>

                            </form>

                        @endguest

                    </div>

                    <div class="p-r-10 p-r-0-sr991 p-t-95">

                        <!-- Related News -->

                        <div class="m-t--40 p-b-40">

							<!-- Item post -->

                            <div class="how2 how2-cl4 flex-s-c">

                                <h3 class="f1-m-2 cl3 tab01-title">

                                    Related News

                                </h3>

                            </div>

                            @foreach ($relatedNews as $related)

                                <div class="flex-wr-sb-s p-t-40 p-b-15 how-bor2">

                                    <a href="blog-detail-02.html" class="size-w-8 wrap-pic-w hov1 trans-03 w-full-sr575 m-b-25">

                                        <img src="{{ asset($related->image) }}" alt="IMG">

                                    </a>

                                    <div class="size-w-9 w-full-sr575 m-b-25">

                                        <h5 class="p-b-12">

                                            <a href="blog-detail-02.html" class="f1-l-1 cl2 hov-cl10 trans-03 respon2">

                                                {{ $related->news_title }}

                                            </a>

                                        </h5>

                                        <div class="cl8 p-b-18">

                                            <a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">

                                                by {{ $related['userRelation']['name'] }}

                                            </a>

                                            <span class="f1-s-3 m-rl-3">

                                                -

                                            </span>

                                            <span class="f1-s-3">

                                                {{ $related->created_at->format('M d Y') }}

                                            </span>

                                        </div>

                                        <a href="blog-detail-02.html" class="f1-s-1 cl9 hov-cl10 trans-03">

                                            Read More

                                            <i class="m-l-2 fa fa-long-arrow-alt-right"></i>

                                        </a>

                                    </div>

                                </div>

                            @endforeach

						</div>

						<a href="#" class="flex-c-c size-a-13 bo-all-1 bocl11 f1-m-6 cl6 hov-btn1 trans-03">

							Load More

						</a>

                    </div>

                </div>

                <!-- Sidebar -->

                <div class="col-md-10 col-lg-4 p-b-30">

                    <div class="p-l-10 p-rl-0-sr991 p-t-70">

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

                                        <a href="#" class="dis-block f1-s-10 text-uppercase cl2 hov-cl10 trans-03 p-tb-13">

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

                                        <a href="#" class="size-w-10 wrap-pic-w hov1 trans-03">

                                            <img src="{{ asset($newspopularitem->image) }}" alt="IMG">

                                        </a>

                                        <div class="size-w-11">

                                            <h6 class="p-b-4">

                                                <a href="blog-detail-02.html" class="f1-s-5 cl3 hov-cl10 trans-03">

                                                    {{ $newspopularitem->news_title }}

                                                </a>

                                            </h6>

                                            <span class="cl8 txt-center p-b-24">

                                                <a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">

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

    <script>

        // Button untuk tambah font size dan kurangin font size

        var size = 14;

        function setFontSize(s){

            size = s;

            $('news-font').css('font-size','' + size + 'px');
        }

        function increaseFontSize(){

            setFontSize(size + 3);
        }

        function decreaseFontSize(){

            if (size > 5) {

                setFontSize(size - 3);

            }

        }

        $('#inc').click(increaseFontSize);

        $('#dec').click(decreaseFontSize);

        setFontSize(size);

    </script>

@endsection
