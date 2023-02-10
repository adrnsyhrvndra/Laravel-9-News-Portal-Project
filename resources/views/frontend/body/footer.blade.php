@php

    $sitesetting =  App\Models\Sitesetting::find(1);

@endphp

<!-- Footer -->

<footer>

    <div class="bg2 p-t-40 p-b-25">

        <div class="container">

            <div class="row">

                <div class="col-lg-4 p-b-20">

                    <div class="size-h-3 flex-s-c">

                        <a href="index.html">

                            <img class="max-s-full" src="{{ asset($sitesetting->site_logo_footer) }}" alt="LOGO">

                        </a>

                    </div>

                    <div>

                        <div class="f1-s-1 cl11 p-b-16">

                            {!! $sitesetting->footer_description !!}

                        </div>

                        <div class="p-t-15">

                            <a href="{{ $sitesetting->facebook_url }}" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">

                                <span class="fab fa-facebook-f"></span>

                            </a>

                            <a href="{{ $sitesetting->instagram_url }}" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">

                                <span class="fab fa-instagram"></span>

                            </a>

                            <a href="{{ $sitesetting->pinterest_url }}" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">

                                <span class="fab fa-pinterest-p"></span>

                            </a>

                            <a href="{{ $sitesetting->youtube_url }}" class="fs-18 cl11 hov-cl10 trans-03 m-r-8">

                                <span class="fab fa-youtube"></span>

                            </a>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-lg-4 p-b-20">

                    <div class="size-h-3 flex-s-c">

                        <h5 class="f1-m-7 cl0">

                            Popular Posts

                        </h5>

                    </div>

                    <ul>

                        @php

                            $popular_news = App\Models\NewsPost::orderBy('view_count','DESC')->limit(3)->get();

                        @endphp

                        @foreach ($popular_news as $news_popular)

                            <li class="flex-wr-sb-s p-b-20">

                                <a href="#" class="size-w-4 wrap-pic-w hov1 trans-03">

                                    <img src="{{ $news_popular->image }}" alt="IMG">

                                </a>

                                <div class="size-w-5">

                                    <h6 class="p-b-5">

                                        <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03">

                                            {{ $news_popular->news_title }}

                                        </a>
                                    </h6>

                                    <span class="f1-s-3 cl6">

                                        {{ Carbon\Carbon::parse($news_popular->post_date)->diffForHumans() }}

                                    </span>

                                </div>

                            </li>

                        @endforeach

                    </ul>

                </div>

                <div class="col-sm-6 col-lg-4 p-b-20">

                    <div class="size-h-3 flex-s-c">

                        <h5 class="f1-m-7 cl0">

                            Category

                        </h5>

                    </div>

                    <ul class="m-t--12">

                        @php

                            $category = App\Models\Category::orderBy('category_name','ASC')->limit(7)->get();

                        @endphp

                        @foreach ($category as $allcategory)

                            <li class="how-bor1 p-rl-5 p-tb-10">

                                <a href="#" class="f1-s-5 cl11 hov-cl10 trans-03 p-tb-8">

                                    {{ $allcategory->category_name }}

                                </a>

                            </li>

                        @endforeach

                    </ul>

                </div>

            </div>

        </div>

    </div>

    <div class="bg11">

        <div class="container size-h-4 flex-c-c p-tb-15">

            <span class="f1-s-1 cl0 txt-center">

                {!! $sitesetting->footer_copyright !!}

            </span>

        </div>

    </div>

</footer>

<!-- Back to top -->

<div class="btn-back-to-top" id="myBtn">

    <span class="symbol-btn-back-to-top">

        <span class="fas fa-angle-up"></span>

    </span>

</div>

<!-- Modal Video 01-->

@php

    $video = App\Models\VideoGalleries::orderBy('created_at','DESC')->take(3)->get();

@endphp

@foreach ($video as $video_data)

    <div class="modal fade" id="modal-video-01" tabindex="-1" role="dialog" aria-hidden="true">

        <div class="modal-dialog" role="document" data-dismiss="modal">

            <div class="close-mo-video-01 trans-0-4" data-dismiss="modal" aria-label="Close">&times;</div>

            <div class="wrap-video-mo-01">

                <div class="video-mo-01">

                    <iframe src="{{ $video_data->video_url }}" allowfullscreen></iframe>

                </div>

            </div>

        </div>

    </div>

@endforeach

