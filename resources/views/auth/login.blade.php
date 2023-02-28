@extends('frontend.home_dashboard')

@section('home')

@section('title')

    Login Page | Brewok News

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

			<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">

				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">

				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">

					<i class="zmdi zmdi-search"></i>

				</button>

			</div>

		</div>

	</div>

    <div class="container">

        <div class="row padding-top-custom-brewok-profile-page">

            <div class="col-lg-7">

                <h2 class="f1-l-1 cl2 p-b-30">

                    Login Page

                </h2>

                <div class="p-r-10 p-r-0-sr991">

                    <form action="{{ route('login') }}" method="post">

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

                        <input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20 @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" type="email" name="email" placeholder="Email*">

                        @error('email')

                            <span class="invalid-feedback" role="alert">

                                <strong>{{ $message }}</strong>

                            </span>

                        @enderror

                        <input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20 @error('password') is-invalid @enderror" id="password" type="password" name="password" placeholder="Password*">

                        @error('password')

                            <span class="invalid-feedback" role="alert">

                                <strong>{{ $message }}</strong>

                            </span>

                        @enderror

                        <input type="submit" class="size-a-20 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-20" value="Login">

                    </form>

                </div>

            </div>

            <div class="col-lg-5">

                <div class="social-box-brewok">

                    <div class="text-center">

                        <div class="box">

                            <div class="box-title">

                                @php

                                    $logoapp =  App\Models\Sitesetting::find(1);

                                @endphp

                                <img src="{{ asset($logoapp->site_logo) }}" alt="LOGO">

                            </div>

                            <div class="box-text">

                                @php

                                    $sitesetting =  App\Models\Sitesetting::find(1);

                                @endphp

                                <div style="color: black;"> {!! $sitesetting->footer_description !!} </div>

                            </div>

                            <div class="box-btn">

                                <div class="p-t-10">

                                    <a href="{{ $sitesetting->facebook_url }}" class="fs-18 cl11 hov-cl10 trans-03 m-r-5 m-l-5">

                                        <span class="fab fa-facebook-f"></span>

                                    </a>

                                    <a href="{{ $sitesetting->instagram_url }}" class="fs-18 cl11 hov-cl10 trans-03 m-r-5 m-l-5">

                                        <span class="fab fa-instagram"></span>

                                    </a>

                                    <a href="{{ $sitesetting->pinterest_url }}" class="fs-18 cl11 hov-cl10 trans-03 m-r-5 m-l-5">

                                        <span class="fab fa-pinterest-p"></span>

                                    </a>

                                    <a href="{{ $sitesetting->youtube_url }}" class="fs-18 cl11 hov-cl10 trans-03 m-r-5 m-l-5">

                                        <span class="fab fa-youtube"></span>

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
