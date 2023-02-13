@extends('frontend.home_dashboard')

@section('home')

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

            <div class="col-md-6">

                <div class="p-rl-35 p-t-28 p-b-15 m-b-20 txt-center clblack">

                    <div class="profile-header-container-brewok">

                        <div class="profile-header-img-brewok">

                            <img class="img-circle-brewok" src="{{ (!empty($userData->photo)) ? url('upload/user_images/'.$userData->photo) : url('upload/no_image.jpg') }}" width="40">

                            <!-- badge -->

                            <div class="rank-label-container-brewok">

                                <span class="label label-default rank-label"> {{ $userData->username }} </span>

                            </div>

                        </div>

                    </div>

                    <h5 class="f1-m-5 cl0 p-b-10 m-t-20 clblack warna-hitam-tulisan-brewok">

                        {{ $userData->name }}

                    </h5>

                    <p class="f1-s-1 cl0 p-b-25 clblack warna-hitam-tulisan-brewok">

                        {{ $userData->email }}

                    </p>

                    <ul class="list-group list-group-flush">

                        <li class="list-group-item">

                            <a href="{{ route('user.change.password') }}">Change Password</a>

                        </li>

                    </ul>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="p-r-10 p-r-0-sr991">

                    <form action="{{ route('user.store.profile') }}" method="post" enctype="multipart/form-data">

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

                        <input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="name" placeholder="Name*" value="{{ $userData->name }}">

                        <input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="username" placeholder="Username*" value="{{ $userData->username }}">

                        <input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="email" placeholder="Email*" value="{{ $userData->email }}">

                        <input class="bo-1-rad-3 bocl13 size-a-19 f1-s-13 cl5 plh6 p-rl-18 m-b-20" type="text" name="phone" placeholder="Phone" value="{{ $userData->phone }}">

                        <img id="showImage" src="{{ (!empty($userData->photo)) ? url('upload/user_images/'.$userData->photo) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image" style="width: 100px; height:100px;">

                        <input class="m-t-20" type="file" name="photo" id="photo">

                        <button type="submit" class="size-a-20 bg2 borad-3 f1-s-12 cl0 hov-btn1 trans-03 p-rl-15 m-t-20">

                            Send

                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

    <script type="text/javascript">

        // Code untuk mengganti foto sesuai dengan input type file dengan change event jquery.

        $(document).ready(function() {

            $('#photo').change(function(e) {

                var reader = new FileReader();

                reader.onload = function(e) {

                    $('#showImage').attr('src',e.target.result);

                }

                reader.readAsDataURL(e.target.files['0']);

            });

        });

    </script>


@endsection
