@extends('frontend.home_dashboard')

@section('home')

@section('title')

    Home | Brewok News

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

	<!-- Feature post -->

	<section class="bg0">

		<div class="container">

			<div class="row m-rl--1">

                @php

                    $section_one_a = App\Models\NewsPost::where('status',1)->where('top_slider',1)->orderBy('created_at','DESC')->skip(1)->first();

                @endphp

                <div class="col-md-6 p-rl-1 p-b-2">

                    <div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url({{ $section_one_a->image }});">

                        <a href="{{ url('news/details/'.$section_one_a->id.'/'.$section_one_a->news_title_slug) }}" class="dis-block how1-child1 trans-03"></a>

                        <div class="flex-col-e-s s-full p-rl-25 p-tb-20">

                            <a href="{{ url('news/category/'.$section_one_a->category_id.'/'.$section_one_a->news_title_slug) }}" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">

                                {{ $section_one_a['categoryRelation']['category_name'] }}

                            </a>

                            <h3 class="how1-child2 m-t-14 m-b-10">

                                <a href="{{ url('news/details/'.$section_one_a->id.'/'.$section_one_a->news_title_slug) }}" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">

                                    {{ $section_one_a->news_title }}

                                </a>

                            </h3>

                            <span class="how1-child2">

                                <span class="f1-s-4 cl11">

                                    <a class="cl11 hov-cl10 trans-03" href="{{ route('reporter.all.news',$section_one_a['userRelation']['id']) }}">{{ $section_one_a['userRelation']['name'] }}</a>

                                </span>

                                <span class="f1-s-3 cl11 m-rl-3">
                                    -
                                </span>

                                <span class="f1-s-3 cl11">

                                    {{ $section_one_a->created_at->format('M d Y') }}

                                </span>

                            </span>

                        </div>

                    </div>

                </div>

				<div class="col-md-6 p-rl-1">

					<div class="row m-rl--1">

                        @php

                            $section_one_b = App\Models\NewsPost::where('status',1)->where('top_slider',1)->orderBy('created_at','DESC')->first();

                        @endphp

						<div class="col-12 p-rl-1 p-b-2">

							<div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url({{ $section_one_b->image }});">

								<a href="{{ url('news/details/'.$section_one_b->id.'/'.$section_one_b->news_title_slug) }}" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-24">

									<a href="{{ url('news/category/'.$section_one_b->category_id.'/'.$section_one_b->news_title_slug) }}" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">

										{{ $section_one_b['categoryRelation']['category_name'] }}

									</a>

									<h3 class="how1-child2 m-t-14">

										<a href="{{ url('news/details/'.$section_one_b->id.'/'.$section_one_b->news_title_slug) }}" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">

                                            {{ $section_one_b->news_title }}

										</a>
									</h3>

								</div>

							</div>

						</div>

                        @php

                            $section_two = App\Models\NewsPost::where('status',1)->where('first_section_three',1)->orderBy('created_at','DESC')->skip(2)->limit(2)->get();

                        @endphp

                        @foreach ($section_two as $two)

                            <div class="col-sm-6 p-rl-1 p-b-2">

                                <div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url({{ asset($two->image) }});">

                                    <a href="{{ url('news/details/'.$two->id.'/'.$two->news_title_slug) }}" class="dis-block how1-child1 trans-03"></a>

                                    <div class="flex-col-e-s s-full p-rl-25 p-tb-20">

                                        <a href="{{ url('news/category/'.$two->category_id.'/'.$two->news_title_slug) }}" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">

                                            {{ $two['categoryRelation']['category_name'] }}

                                        </a>

                                        <h3 class="how1-child2 m-t-14">

                                            <a href="{{ url('news/details/'.$two->id.'/'.$two->news_title_slug) }}" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">

                                                {{ $two->news_title }}

                                            </a>

                                        </h3>

                                    </div>

                                </div>

                            </div>

                        @endforeach

					</div>

				</div>

			</div>

		</div>

	</section>

	<!-- Post -->

	<section class="bg0 p-t-70">

		<div class="container">

			<div class="row justify-content-center">

				<div class="col-md-10 col-lg-8">

					<div class="p-b-20">

						<!-- Tab 01 -->

						<div class="tab01 p-b-20">

							<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">

								<!-- Brand tab -->

								<h3 class="f1-m-2 cl12 tab01-title">

									{{ $skip_cat_1->category_name }}

								</h3>

								<!-- Nav tabs -->

								<ul class="nav nav-tabs" role="tablist">

									<li class="nav-item">

										<a class="nav-link active" data-toggle="tab" href="#all" role="tab">All</a>

									</li>

                                    @php

                                        $skip_news_1_convert_subcategory_nav = App\Models\Subcategory::where('category_id',$skip_cat_1->id)->orderBy('id','ASC')->get();

                                    @endphp

                                    @foreach ($skip_news_1_convert_subcategory_nav as $item)

                                        <li class="nav-item">

                                            <a class="nav-link" data-toggle="tab" href="#{{ $item->subcategory_slug }}" role="tab">{{ $item->subcategory_name }}  </a>

                                        </li>

                                    @endforeach

									<li class="nav-item-more dropdown dis-none">

										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">

											<i class="fa fa-ellipsis-h"></i>

										</a>

										<ul class="dropdown-menu">

										</ul>

									</li>

								</ul>

							</div>

							<!-- Tab panes -->

							<div class="tab-content p-t-35">

								<!-- All -->

                                <div class="tab-pane fade show active" id="all" role="tabpanel">

                                    <div class="row">

                                        @foreach ( $skip_news_1 as $itemnews )

                                            @if($loop->index < 1)

                                                <div class="col-sm-6 p-r-25 p-r-15-sr991">

                                                    <!-- Item post Main -->

                                                    <div class="m-b-30">

                                                        <a href="{{ url('news/details/'.$itemnews->id.'/'.$itemnews->news_title_slug) }}" class="wrap-pic-w hov1 trans-03">

                                                            <img src="{{ $itemnews->image }}" alt="IMG">

                                                        </a>

                                                        <div class="p-t-20">

                                                            <h5 class="p-b-5">

                                                                <a href="{{ url('news/details/'.$itemnews->id.'/'.$itemnews->news_title_slug) }}" class="f1-m-3 cl2 hov-cl10 trans-03">

                                                                    {{ $itemnews->news_title }}

                                                                </a>

                                                            </h5>

                                                            <span class="cl8">

                                                                <a href="{{ url('news/category/'.$itemnews->category_id.'/'.$itemnews->news_title_slug) }}" class="f1-s-4 cl8 hov-cl10 trans-03">

                                                                    {{ $itemnews['categoryRelation']['category_name'] }}

                                                                </a>

                                                                <span class="f1-s-3 m-rl-3">
                                                                    -
                                                                </span>

                                                                <span class="f1-s-3">

                                                                    {{ Carbon\Carbon::parse($itemnews->post_date)->diffForHumans() }}

                                                                </span>

                                                            </span>

                                                        </div>

                                                    </div>

                                                </div>

                                            @endif

                                        @endforeach

                                        <div class="col-sm-6 p-r-25 p-r-15-sr991">

                                            <!-- Item post Three -->

                                            @foreach ( $skip_news_1 as $itemnews )

                                                @if($loop->index > 0)

                                                    <div class="flex-wr-sb-s m-b-30">

                                                        <a href="{{ url('news/details/'.$itemnews->id.'/'.$itemnews->news_title_slug) }}" class="size-w-1 wrap-pic-w hov1 trans-03">

                                                            <img src="{{ $itemnews->image }}" alt="IMG">

                                                        </a>

                                                        <div class="size-w-2">

                                                            <h5 class="p-b-5">

                                                                <a href="{{ url('news/details/'.$itemnews->id.'/'.$itemnews->news_title_slug) }}" class="f1-s-5 cl3 hov-cl10 trans-03">

                                                                    {{ $itemnews->news_title }}

                                                                </a>

                                                            </h5>

                                                            <span class="cl8">

                                                                <a href="{{ url('news/category/'.$itemnews->category_id.'/'.$itemnews->news_title_slug) }}" class="f1-s-6 cl8 hov-cl10 trans-03">

                                                                    {{ $itemnews['categoryRelation']['category_name'] }}

                                                                </a>

                                                                <span class="f1-s-3 m-rl-3">

                                                                    -

                                                                </span>

                                                                <span class="f1-s-3">

                                                                    {{ Carbon\Carbon::parse($itemnews->post_date)->diffForHumans() }}

                                                                </span>

                                                            </span>

                                                        </div>

                                                    </div>

                                                @endif

                                            @endforeach

                                        </div>

                                    </div>

                                </div>

                                @php

                                    $skip_news_1_convert_subcategory_get_id = App\Models\Subcategory::where('category_id',$skip_cat_1->id)->orderBy('id','ASC')->get();

                                @endphp

                                @foreach ($skip_news_1_convert_subcategory_get_id as $newsItemSub)

                                    <div class="tab-pane fade" id="{{ $newsItemSub->subcategory_slug }}" role="tabpanel">

                                        @php

                                            $news_with_sub = App\Models\NewsPost::where('status',1)->where('subcategory_id',$newsItemSub->id)->orderBy('id','DESC')->limit(3)->get();

                                        @endphp

                                        <div class="row">

                                            @foreach ($news_with_sub as $beritadenganSub)

                                                @if($loop->index < 1)

                                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">

                                                        <!-- Item Post ALL -->

                                                        <div class="m-b-30">

                                                            <a href="{{ url('news/details/'.$beritadenganSub->id.'/'.$beritadenganSub->news_title_slug) }}" class="wrap-pic-w hov1 trans-03">

                                                                <img src="{{ $beritadenganSub->image }}" alt="IMG">

                                                            </a>

                                                            <div class="p-t-20">

                                                                <h5 class="p-b-5">

                                                                    <a href="{{ url('news/details/'.$beritadenganSub->id.'/'.$beritadenganSub->news_title_slug) }}" class="f1-m-3 cl2 hov-cl10 trans-03">

                                                                        {{ $beritadenganSub->news_title }}

                                                                    </a>

                                                                </h5>

                                                                <span class="cl8">

                                                                    <a href="{{ url('news/details/'.$beritadenganSub->subcategory_id.'/'.$beritadenganSub->news_title_slug) }}" class="f1-s-4 cl8 hov-cl10 trans-03">

                                                                        {{ $beritadenganSub['subcategoryRelation']['subcategory_name'] }}

                                                                    </a>

                                                                    <span class="f1-s-3 m-rl-3">
                                                                        -
                                                                    </span>

                                                                    <span class="f1-s-3">

                                                                        {{ Carbon\Carbon::parse($beritadenganSub->post_date)->diffForHumans() }}

                                                                    </span>

                                                                </span>

                                                            </div>

                                                        </div>

                                                    </div>

                                                @endif

                                            @endforeach

                                            <div class="col-sm-6 p-r-25 p-r-15-sr991">

                                                @foreach ($news_with_sub as $beritadenganSub)

                                                    @if($loop->index > 0)

                                                        <!-- Item post Three -->

                                                        <div class="flex-wr-sb-s m-b-30">

                                                            <a href="{{ url('news/details/'.$beritadenganSub->id.'/'.$beritadenganSub->news_title_slug) }}" class="size-w-1 wrap-pic-w hov1 trans-03">

                                                                <img src="{{ $beritadenganSub->image }}" alt="IMG">

                                                            </a>

                                                            <div class="size-w-2">

                                                                <h5 class="p-b-5">

                                                                    <a href="{{ url('news/details/'.$beritadenganSub->id.'/'.$beritadenganSub->news_title_slug) }}" class="f1-s-5 cl3 hov-cl10 trans-03">

                                                                        {{ $beritadenganSub->news_title }}

                                                                    </a>

                                                                </h5>

                                                                <span class="cl8">

                                                                    <a href="{{ url('news/details/'.$beritadenganSub->category_id.'/'.$beritadenganSub->news_title_slug) }}" class="f1-s-6 cl8 hov-cl10 trans-03">

                                                                        {{ $beritadenganSub['categoryRelation']['category_name'] }}

                                                                    </a>

                                                                    <span class="f1-s-3 m-rl-3">

                                                                        -

                                                                    </span>

                                                                    <span class="f1-s-3">

                                                                        {{ Carbon\Carbon::parse($beritadenganSub->post_date)->diffForHumans() }}

                                                                    </span>

                                                                </span>

                                                            </div>

                                                        </div>

                                                    @endif

                                                @endforeach

                                            </div>

                                        </div>

                                    </div>

                                @endforeach

							</div>

						</div>

                        <!-- Tab 02 -->

						<div class="tab01 p-b-20">

							<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">

								<!-- Brand tab -->

								<h3 class="f1-m-2 cl12 tab01-title">

									{{ $skip_cat_2->category_name }}

								</h3>

								<!-- Nav tabs -->

								<ul class="nav nav-tabs" role="tablist">

									<li class="nav-item">

										<a class="nav-link active" data-toggle="tab" href="#all2" role="tab">All</a>

									</li>

                                    @php

                                        $skip_news_2_convert_subcategory_nav = App\Models\Subcategory::where('category_id',$skip_cat_2->id)->orderBy('id','ASC')->get();

                                    @endphp

                                    @foreach ($skip_news_2_convert_subcategory_nav as $item)

                                        <li class="nav-item">

                                            <a class="nav-link" data-toggle="tab" href="#{{ $item->subcategory_slug }}" role="tab">{{ $item->subcategory_name }}  </a>

                                        </li>

                                    @endforeach

									<li class="nav-item-more dropdown dis-none">

										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">

											<i class="fa fa-ellipsis-h"></i>

										</a>

										<ul class="dropdown-menu">

										</ul>

									</li>

								</ul>

							</div>

							<!-- Tab panes -->

							<div class="tab-content p-t-35">

								<!-- All -->

                                <div class="tab-pane fade show active" id="all2" role="tabpanel">

                                    <div class="row">

                                        @foreach ( $skip_news_2 as $itemnews )

                                            @if($loop->index < 1)

                                                <div class="col-sm-6 p-r-25 p-r-15-sr991">

                                                    <!-- Item post Main -->

                                                    <div class="m-b-30">

                                                        <a href="{{ url('news/details/'.$itemnews->id.'/'.$itemnews->news_title_slug) }}" class="wrap-pic-w hov1 trans-03">

                                                            <img src="{{ $itemnews->image }}" alt="IMG">

                                                        </a>

                                                        <div class="p-t-20">

                                                            <h5 class="p-b-5">

                                                                <a href="{{ url('news/details/'.$itemnews->id.'/'.$itemnews->news_title_slug) }}" class="f1-m-3 cl2 hov-cl10 trans-03">

                                                                    {{ $itemnews->news_title }}

                                                                </a>

                                                            </h5>

                                                            <span class="cl8">

                                                                <a href="{{ url('news/details/'.$itemnews->category_id.'/'.$itemnews->news_title_slug) }}" class="f1-s-4 cl8 hov-cl10 trans-03">

                                                                    {{ $itemnews['categoryRelation']['category_name'] }}

                                                                </a>

                                                                <span class="f1-s-3 m-rl-3">
                                                                    -
                                                                </span>

                                                                <span class="f1-s-3">

                                                                    {{ Carbon\Carbon::parse($itemnews->post_date)->diffForHumans() }}

                                                                </span>

                                                            </span>

                                                        </div>

                                                    </div>

                                                </div>

                                            @endif

                                        @endforeach

                                        <div class="col-sm-6 p-r-25 p-r-15-sr991">

                                            <!-- Item post Three -->

                                            @foreach ( $skip_news_2 as $itemnews )

                                                @if($loop->index > 0)

                                                    <div class="flex-wr-sb-s m-b-30">

                                                        <a href="{{ url('news/details/'.$itemnews->id.'/'.$itemnews->news_title_slug) }}" class="size-w-1 wrap-pic-w hov1 trans-03">

                                                            <img src="{{ $itemnews->image }}" alt="IMG">

                                                        </a>

                                                        <div class="size-w-2">

                                                            <h5 class="p-b-5">

                                                                <a href="{{ url('news/details/'.$itemnews->id.'/'.$itemnews->news_title_slug) }}" class="f1-s-5 cl3 hov-cl10 trans-03">

                                                                    {{ $itemnews->news_title }}

                                                                </a>

                                                            </h5>

                                                            <span class="cl8">

                                                                <a href="{{ url('news/details/'.$itemnews->category_id.'/'.$itemnews->news_title_slug) }}" class="f1-s-6 cl8 hov-cl10 trans-03">

                                                                    {{ $itemnews['categoryRelation']['category_name'] }}

                                                                </a>

                                                                <span class="f1-s-3 m-rl-3">

                                                                    -

                                                                </span>

                                                                <span class="f1-s-3">

                                                                    {{ Carbon\Carbon::parse($itemnews->post_date)->diffForHumans() }}

                                                                </span>

                                                            </span>

                                                        </div>

                                                    </div>

                                                @endif

                                            @endforeach

                                        </div>

                                    </div>

                                </div>

                                @php

                                    $skip_news_2_convert_subcategory_get_id = App\Models\Subcategory::where('category_id',$skip_cat_2->id)->orderBy('id','ASC')->get();

                                @endphp

                                @foreach ($skip_news_2_convert_subcategory_get_id as $newsItemSub)

                                    <div class="tab-pane fade" id="{{ $newsItemSub->subcategory_slug }}" role="tabpanel">

                                        @php

                                            $news_with_sub = App\Models\NewsPost::where('status',1)->where('subcategory_id',$newsItemSub->id)->orderBy('id','DESC')->limit(3)->get();

                                        @endphp

                                        <div class="row">

                                            @foreach ($news_with_sub as $beritadenganSub)

                                                @if($loop->index < 1)

                                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">

                                                        <!-- Item Post ALL -->

                                                        <div class="m-b-30">

                                                            <a href="{{ url('news/details/'.$beritadenganSub->id.'/'.$beritadenganSub->news_title_slug) }}" class="wrap-pic-w hov1 trans-03">

                                                                <img src="{{ $beritadenganSub->image }}" alt="IMG">

                                                            </a>

                                                            <div class="p-t-20">

                                                                <h5 class="p-b-5">

                                                                    <a href="{{ url('news/details/'.$beritadenganSub->id.'/'.$beritadenganSub->news_title_slug) }}" class="f1-m-3 cl2 hov-cl10 trans-03">

                                                                        {{ $beritadenganSub->news_title }}

                                                                    </a>

                                                                </h5>

                                                                <span class="cl8">

                                                                    <a href="{{ url('news/details/'.$itemnews->subcategory_id.'/'.$itemnews->news_title_slug) }}" class="f1-s-4 cl8 hov-cl10 trans-03">

                                                                        {{ $beritadenganSub['subcategoryRelation']['subcategory_name'] }}

                                                                    </a>

                                                                    <span class="f1-s-3 m-rl-3">
                                                                        -
                                                                    </span>

                                                                    <span class="f1-s-3">

                                                                        {{ Carbon\Carbon::parse($beritadenganSub->post_date)->diffForHumans() }}

                                                                    </span>

                                                                </span>

                                                            </div>

                                                        </div>

                                                    </div>

                                                @endif

                                            @endforeach

                                            <div class="col-sm-6 p-r-25 p-r-15-sr991">

                                                @foreach ($news_with_sub as $beritadenganSub)

                                                    @if($loop->index > 0)

                                                        <!-- Item post Three -->

                                                        <div class="flex-wr-sb-s m-b-30">

                                                            <a href="{{ url('news/details/'.$beritadenganSub->id.'/'.$beritadenganSub->news_title_slug) }}" class="size-w-1 wrap-pic-w hov1 trans-03">

                                                                <img src="{{ $beritadenganSub->image }}" alt="IMG">

                                                            </a>

                                                            <div class="size-w-2">

                                                                <h5 class="p-b-5">

                                                                    <a href="{{ url('news/details/'.$beritadenganSub->id.'/'.$beritadenganSub->news_title_slug) }}" class="f1-s-5 cl3 hov-cl10 trans-03">

                                                                        {{ $beritadenganSub->news_title }}

                                                                    </a>

                                                                </h5>

                                                                <span class="cl8">

                                                                    <a href="{{ url('news/details/'.$beritadenganSub->category_id.'/'.$beritadenganSub->news_title_slug) }}" class="f1-s-6 cl8 hov-cl10 trans-03">

                                                                        {{ $beritadenganSub['categoryRelation']['category_name'] }}

                                                                    </a>

                                                                    <span class="f1-s-3 m-rl-3">

                                                                        -

                                                                    </span>

                                                                    <span class="f1-s-3">

                                                                        {{ Carbon\Carbon::parse($beritadenganSub->post_date)->diffForHumans() }}

                                                                    </span>

                                                                </span>

                                                            </div>

                                                        </div>

                                                    @endif

                                                @endforeach

                                            </div>

                                        </div>

                                    </div>

                                @endforeach

							</div>

						</div>

                        <!-- Tab 03 -->

						<div class="tab01 p-b-20">

							<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">

								<!-- Brand tab -->

								<h3 class="f1-m-2 cl12 tab01-title">

									{{ $skip_cat_0->category_name }}

								</h3>

								<!-- Nav tabs -->

								<ul class="nav nav-tabs" role="tablist">

									<li class="nav-item">

										<a class="nav-link active" data-toggle="tab" href="#all3" role="tab">All</a>

									</li>

                                    @php

                                        $skip_news_0_convert_subcategory_nav = App\Models\Subcategory::where('category_id',$skip_cat_0->id)->orderBy('id','ASC')->get();

                                    @endphp

                                    @foreach ($skip_news_0_convert_subcategory_nav as $item)

                                        <li class="nav-item">

                                            <a class="nav-link" data-toggle="tab" href="#{{ $item->subcategory_slug }}" role="tab">{{ $item->subcategory_name }}  </a>

                                        </li>

                                    @endforeach

									<li class="nav-item-more dropdown dis-none">

										<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">

											<i class="fa fa-ellipsis-h"></i>

										</a>

										<ul class="dropdown-menu">

										</ul>

									</li>

								</ul>

							</div>

							<!-- Tab panes -->

							<div class="tab-content p-t-35">

								<!-- All -->

                                <div class="tab-pane fade show active" id="all3" role="tabpanel">

                                    <div class="row">

                                        @foreach ( $skip_news_0 as $itemnews )

                                            @if($loop->index < 1)

                                                <div class="col-sm-6 p-r-25 p-r-15-sr991">

                                                    <!-- Item post Main -->

                                                    <div class="m-b-30">

                                                        <a href="{{ url('news/details/'.$itemnews->id.'/'.$itemnews->news_title_slug) }}" class="wrap-pic-w hov1 trans-03">

                                                            <img src="{{ $itemnews->image }}" alt="IMG">

                                                        </a>

                                                        <div class="p-t-20">

                                                            <h5 class="p-b-5">

                                                                <a href="{{ url('news/details/'.$itemnews->id.'/'.$itemnews->news_title_slug) }}" class="f1-m-3 cl2 hov-cl10 trans-03">

                                                                    {{ $itemnews->news_title }}

                                                                </a>

                                                            </h5>

                                                            <span class="cl8">

                                                                <a href="{{ url('news/details/'.$itemnews->category_id.'/'.$itemnews->news_title_slug) }}" class="f1-s-4 cl8 hov-cl10 trans-03">

                                                                    {{ $itemnews['categoryRelation']['category_name'] }}

                                                                </a>

                                                                <span class="f1-s-3 m-rl-3">
                                                                    -
                                                                </span>

                                                                <span class="f1-s-3">

                                                                    {{ Carbon\Carbon::parse($itemnews->post_date)->diffForHumans() }}

                                                                </span>

                                                            </span>

                                                        </div>

                                                    </div>

                                                </div>

                                            @endif

                                        @endforeach

                                        <div class="col-sm-6 p-r-25 p-r-15-sr991">

                                            <!-- Item post Three -->

                                            @foreach ( $skip_news_0 as $itemnews )

                                                @if($loop->index > 0)

                                                    <div class="flex-wr-sb-s m-b-30">

                                                        <a href="{{ url('news/details/'.$itemnews->id.'/'.$itemnews->news_title_slug) }}" class="size-w-1 wrap-pic-w hov1 trans-03">

                                                            <img src="{{ $itemnews->image }}" alt="IMG">

                                                        </a>

                                                        <div class="size-w-2">

                                                            <h5 class="p-b-5">

                                                                <a href="{{ url('news/details/'.$itemnews->id.'/'.$itemnews->news_title_slug) }}" class="f1-s-5 cl3 hov-cl10 trans-03">

                                                                    {{ $itemnews->news_title }}

                                                                </a>

                                                            </h5>

                                                            <span class="cl8">

                                                                <a href="{{ url('news/details/'.$itemnews->category_id.'/'.$itemnews->news_title_slug) }}" class="f1-s-6 cl8 hov-cl10 trans-03">

                                                                    {{ $itemnews['categoryRelation']['category_name'] }}

                                                                </a>

                                                                <span class="f1-s-3 m-rl-3">

                                                                    -

                                                                </span>

                                                                <span class="f1-s-3">

                                                                    {{ Carbon\Carbon::parse($itemnews->post_date)->diffForHumans() }}

                                                                </span>

                                                            </span>

                                                        </div>

                                                    </div>

                                                @endif

                                            @endforeach

                                        </div>

                                    </div>

                                </div>

                                @php

                                    $skip_news_0_convert_subcategory_get_id = App\Models\Subcategory::where('category_id',$skip_cat_0->id)->orderBy('id','ASC')->get();

                                @endphp

                                @foreach ($skip_news_0_convert_subcategory_get_id as $newsItemSub)

                                    <div class="tab-pane fade" id="{{ $newsItemSub->subcategory_slug }}" role="tabpanel">

                                        @php

                                            $news_with_sub = App\Models\NewsPost::where('status',1)->where('subcategory_id',$newsItemSub->id)->orderBy('id','DESC')->limit(3)->get();

                                        @endphp

                                        <div class="row">

                                            @foreach ($news_with_sub as $beritadenganSub)

                                                @if($loop->index < 1)

                                                    <div class="col-sm-6 p-r-25 p-r-15-sr991">

                                                        <!-- Item Post ALL -->

                                                        <div class="m-b-30">

                                                            <a href="{{ url('news/details/'.$beritadenganSub->id.'/'.$beritadenganSub->news_title_slug) }}" class="wrap-pic-w hov1 trans-03">

                                                                <img src="{{ $beritadenganSub->image }}" alt="IMG">

                                                            </a>

                                                            <div class="p-t-20">

                                                                <h5 class="p-b-5">

                                                                    <a href="{{ url('news/details/'.$beritadenganSub->id.'/'.$beritadenganSub->news_title_slug) }}" class="f1-m-3 cl2 hov-cl10 trans-03">

                                                                        {{ $beritadenganSub->news_title }}

                                                                    </a>

                                                                </h5>

                                                                <span class="cl8">

                                                                    <a href="{{ url('news/details/'.$beritadenganSub->subcategory_id.'/'.$beritadenganSub->news_title_slug) }}" class="f1-s-4 cl8 hov-cl10 trans-03">

                                                                        {{ $beritadenganSub['subcategoryRelation']['subcategory_name'] }}

                                                                    </a>

                                                                    <span class="f1-s-3 m-rl-3">
                                                                        -
                                                                    </span>

                                                                    <span class="f1-s-3">

                                                                        {{ Carbon\Carbon::parse($beritadenganSub->post_date)->diffForHumans() }}

                                                                    </span>

                                                                </span>

                                                            </div>

                                                        </div>

                                                    </div>

                                                @endif

                                            @endforeach

                                            <div class="col-sm-6 p-r-25 p-r-15-sr991">

                                                @foreach ($news_with_sub as $beritadenganSub)

                                                    @if($loop->index > 0)

                                                        <!-- Item post Three -->

                                                        <div class="flex-wr-sb-s m-b-30">

                                                            <a href="{{ url('news/details/'.$beritadenganSub->id.'/'.$beritadenganSub->news_title_slug) }}" class="size-w-1 wrap-pic-w hov1 trans-03">

                                                                <img src="{{ $beritadenganSub->image }}" alt="IMG">

                                                            </a>

                                                            <div class="size-w-2">

                                                                <h5 class="p-b-5">

                                                                    <a href="{{ url('news/details/'.$beritadenganSub->id.'/'.$beritadenganSub->news_title_slug) }}" class="f1-s-5 cl3 hov-cl10 trans-03">

                                                                        {{ $beritadenganSub->news_title }}

                                                                    </a>

                                                                </h5>

                                                                <span class="cl8">

                                                                    <a href="{{ url('news/details/'.$beritadenganSub->category_id.'/'.$beritadenganSub->news_title_slug) }}" class="f1-s-6 cl8 hov-cl10 trans-03">

                                                                        {{ $beritadenganSub['categoryRelation']['category_name'] }}

                                                                    </a>

                                                                    <span class="f1-s-3 m-rl-3">

                                                                        -

                                                                    </span>

                                                                    <span class="f1-s-3">

                                                                        {{ Carbon\Carbon::parse($beritadenganSub->post_date)->diffForHumans() }}

                                                                    </span>

                                                                </span>

                                                            </div>

                                                        </div>

                                                    @endif


                                                @endforeach

                                            </div>

                                        </div>

                                    </div>

                                @endforeach

							</div>

						</div>

					</div>

				</div>

				<div class="col-md-10 col-lg-4">

					<div class="p-l-10 p-rl-0-sr991 p-b-20">

						<div>

							<div class="how2 how2-cl4 flex-s-c">

								<h3 class="f1-m-2 cl3 tab01-title">

									Search News By Date

								</h3>

							</div>

                            <form action="{{ route('search-by-date') }}" method="post">

                                @csrf

                                <div class="pos-relative size-a-custom-brewok bo-1-rad-22 of-hidden bocl11 m-tb-32">

                                    <input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45 date-input" type="date" name="date" placeholder="Search">

                                    <button type="submit" class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">

                                        <i class="zmdi zmdi-calendar-alt"></i>

                                    </button>

                                </div>

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

						<!--  -->

						<div class="p-t-50">

							<div class="how2 how2-cl4 flex-s-c">

								<h3 class="f1-m-2 cl3 tab01-title">

									Stay Connected

								</h3>

							</div>

                            @php

                                $urlSettingSociale =  App\Models\Sitesetting::find(1);

                            @endphp

							<ul class="p-t-35">

								<li class="flex-wr-sb-c p-b-20">

									<a href="{{ $urlSettingSociale->facebook_url }}" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">

										<span class="fab fa-facebook-f"></span>

									</a>

									<div class="size-w-3 flex-wr-sb-c">

										<span class="f1-s-8 cl3 p-r-20">

											6879 Fans

										</span>

										<a href="{{ $urlSettingSociale->facebook_url }}" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">

											Like

										</a>

									</div>

								</li>

								<li class="flex-wr-sb-c p-b-20">

									<a href="{{ $urlSettingSociale->instagram_url }}" class="size-a-8 flex-c-c borad-3 size-a-8 bg-instagram fs-16 cl0 hov-cl0">

										<span class="fab fa-instagram"></span>

									</a>

									<div class="size-w-3 flex-wr-sb-c">

										<span class="f1-s-8 cl3 p-r-20">

											568 Followers

										</span>

										<a href="{{ $urlSettingSociale->instagram_url }}" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">

											Follow

										</a>

									</div>

								</li>

								<li class="flex-wr-sb-c p-b-20">

									<a href="{{ $urlSettingSociale->youtube_url }}" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">

										<span class="fab fa-youtube"></span>

									</a>

									<div class="size-w-3 flex-wr-sb-c">

										<span class="f1-s-8 cl3 p-r-20">

											5039 Subscribers

										</span>

										<a href="{{ $urlSettingSociale->youtube_url }}" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">

											Subscribe

										</a>
									</div>

								</li>

							</ul>

						</div>

					</div>

				</div>

			</div>

		</div>

	</section>

	<!-- Banner -->

	<div class="container">

        <div class="row">

            <div class="col-lg-6 col-md-6 col-sm-12">

                @php

                    $bannertwo =  App\Models\Banners::find(1);

                @endphp

                <a href="#">

                    <img class="max-w-full" src="{{ asset($bannertwo->home_two) }}" alt="IMG">

                </a>

            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">

                @php

                    $bannerthree =  App\Models\Banners::find(1);

                @endphp

                <a href="#">

                    <img class="max-w-full" src="{{ asset($bannerthree->home_three) }}" alt="IMG">

                </a>

            </div>

        </div>

	</div>

	<!-- Latest -->

	<section class="bg0 p-t-60 p-b-35">

		<div class="container">

			<div class="row justify-content-center">

				<div class="col-md-10 col-lg-8 p-b-20">

					<div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">

						<h3 class="f1-m-2 cl3 tab01-title">

							{{ GoogleTranslate::trans('Latest News', app()->getLocale()) }}

						</h3>

					</div>

					<div class="row p-t-35">

                        @php

                            $berita_latest = App\Models\NewsPost::where('status',1)->orderBy('created_at','DESC')->limit(8)->get();

                        @endphp

                        @foreach ($berita_latest as $latestnews)

                            <div class="col-sm-6 p-r-25 p-r-15-sr991">

                                <!-- Item latest -->

                                <div class="m-b-45">

                                    <a href="{{ url('news/details/'.$latestnews->id.'/'.$latestnews->news_title_slug) }}" class="wrap-pic-w hov1 trans-03">

                                        <img src="{{ $latestnews->image }}" alt="IMG">

                                    </a>

                                    <div class="p-t-16">

                                        <h5 class="p-b-8">

                                            <a href="{{ url('news/details/'.$latestnews->id.'/'.$latestnews->news_title_slug) }}" class="f1-m-3 cl2 hov-cl10 trans-03">

                                                {{ $latestnews->news_title }}

                                            </a>

                                        </h5>

                                        <span class="cl8">

                                            <img class="img-rounded-small-post-custom-brewok" src="{{  url('upload/admin_images/'.$latestnews['userRelation']['photo']) }}" alt="">

                                            <a href="{{ route('reporter.all.news',$latestnews['userRelation']['id']) }}" class="padding-left-name-custom-brewok f1-s-4 cl8 hov-cl10 trans-03">

                                                {{ $latestnews['userRelation']['name'] }}

                                            </a>

                                            <span class="f1-s-3 m-rl-3">

                                                -

                                            </span>

                                            <span class="f1-s-3">

                                                {{ Carbon\Carbon::parse($itemnews->post_date)->diffForHumans() }}

                                            </span>

                                        </span>

                                    </div>

                                </div>

                            </div>

                        @endforeach

					</div>

				</div>

				<div class="col-md-10 col-lg-4">

					<div class="p-l-10 p-rl-0-sr991 p-b-20">

						<!-- Video -->

						<div class="p-b-55">

							<div class="how2 how2-cl4 flex-s-c m-b-35">

								<h3 class="f1-m-2 cl3 tab01-title">

									Featured Video

								</h3>

							</div>

							<div>

                                @foreach ($video as $video_data)

                                    <div class="wrap-pic-w pos-relative">

                                        <img src="{{ asset($video_data->video_image) }}" alt="IMG">

                                        <button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal" data-target="#modal-video-01">

                                            <span class="fab fa-youtube"></span>

                                        </button>

                                    </div>

                                    <div class="p-tb-16 p-rl-25 bg3">

                                        <h5 class="p-b-5">

                                            <a href="#" class="f1-m-3 cl0 hov-cl10 trans-03">

                                                {{ $video_data->video_title }}

                                            </a>

                                        </h5>

                                        <span class="cl15">

                                            <span class="f1-s-3">

                                                {{ $video_data->created_at->format('M d Y') }}

                                            </span>

                                        </span>

                                    </div>

                                @endforeach

							</div>

						</div>

                        <!-- Photo -->

						<div class="p-b-55">

							<div class="how2 how2-cl4 flex-s-c m-b-35">

								<h3 class="f1-m-2 cl3 tab01-title">

									Photo Gallery

								</h3>

							</div>

							<div>

                                <div class="wrap-pic-w pos-relative">

                                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                                        <ol class="carousel-indicators">

                                            @foreach ($photo as $key => $photodata)

                                                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key+1 }}" class="{{ ($loop->index < 1) ? 'active' : '' }}"></li>

                                            @endforeach

                                        </ol>

                                        <div class="carousel-inner">

                                            @foreach ($photo as $photo_data)

                                                <div class="carousel-item {{ ($loop->index < 1) ? 'active' : '' }}">

                                                    <img class="d-block w-100" src="{{ asset($photo_data->photo_gallery) }}" alt="Second slide">

                                                </div>

                                            @endforeach

                                        </div>

                                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

                                            <i class="fas fa-arrow-circle-left fa-2x"></i>

                                            <span class="sr-only">Previous</span>

                                        </a>

                                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

                                            <i class="fas fa-arrow-circle-right fa-2x"></i>

                                            <span class="sr-only">Next</span>

                                        </a>

                                    </div>

                                </div>

							</div>

						</div>

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

						<!-- Tag -->

						<div class="p-b-55">

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

    <script type="text/javascript">

        var url = "{{ route('changeLang') }}";

        $(".changeLang").change(function(){

            window.location.href = url + "?lang=" + $(this).val();

        });

    </script>

@endsection
