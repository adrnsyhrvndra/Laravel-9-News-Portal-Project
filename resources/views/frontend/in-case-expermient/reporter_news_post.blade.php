<section class="author-page">

    <div class="container">

        <div class="row">

            <div class="col-lg-8 col-md-8">

                <div class="row">

                    @foreach ($news as $item)

                        <div class="custom-col-6">

                            <div class="author-wrpp">

                            <div class="authorNews-image">
                                <a href=" " ><img class="lazyload" src="{{ asset($item->image) }}"/></a>
                            </div>

                            <div class="authorPage-content">
                                <h2 class="authorPage-title">
                                <a href=" ">{{ $item->news_title }}</a>
                                </h2>
                                <div class="author-date">
                                <a href=" "> {{ $item->userRelation_name }} </a>
                                <span>
                                    <i class="las la-clock"></i>
                                    {{ $item->created_at->format('l M d Y') }}
                                </span>
                                </div>
                            </div>
                            </div>
                        </div>

                    @endforeach

                </div>

                <div class="row">

                    <div class="col-lg-8 col-md-8">
                        <div class="post-nav">
                        <ul class="pager">
                            <li class="previous">
                            <a href=" "><i class="las la-step-backward"></i> </a>
                            </li>
                            <li>
                            <a href=" " title="previous"
                                ><i class="la la-backward" aria-hidden="true"></i>
                            </a>
                            </li>
                            <li><a href=" ">01</a></li>
                            <li class="active"><span class="active">02</span></li>
                            <li><a href=" ">03</a></li>
                            <li><a href=" ">04</a></li>
                            <li>
                            <a href=" " title="next"
                                ><i class="la la-forward" aria-hidden="true"></i>
                            </a>
                            </li>
                            <li class="next">
                            <a href=" "><i class="las la-step-forward"></i> </a>
                            </li>
                        </ul>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-lg-4 col-md-4">
                <div class="fixd-sitebar" style="position: sticky; top: 0">
                <div
                    class="authorPage-content"
                    style="
                    background: #fbf7f7;
                    border: 2px solid #e1dfdf;
                    border-radius: 5px;
                    "
                >
                    <figure class="authorPage-image">
                    <img
                        alt=""
                        src="{{ (!empty($reporter->photo)) ? url('upload/admin_images/'.$reporter->photo) : url('upload/no_image.jpg') }}"
                        class="avatar avatar-96 photo"
                        height="96"
                        width="96"
                        loading="lazy"
                    />
                    </figure>
                    <h1 class="authorPage-name">
                    <a href=" "> {{ $reporter->name }} </a>
                    </h1>
                    <div class="author-social">
                    <a
                        href="https://www.facebook.com//"
                        target="_black"
                        title="Facebook"
                        ><i class="lab la-facebook-f"></i
                    ></a>
                    <a
                        href="https://www.twitter.com//"
                        target="_black"
                        title="Twitter"
                        ><i class="lab la-twitter"></i
                    ></a>
                    <a
                        href="https://www.youtube.com//"
                        target="_black"
                        title="Youtube"
                        ><i class="lab la-youtube"></i
                    ></a>
                    <a
                        href="https://www.linkedin.com//"
                        target="_black"
                        title="Linkedin"
                        ><i class="lab la-linkedin-in"></i
                    ></a>
                    <a
                        href="https://www.instagram.com//"
                        target="_black"
                        title="Instagram"
                        ><i class="lab la-instagram"></i
                    ></a>
                    </div>
                    <div class="author-details" style="text-align: justify">
                    Earlier, on Sunday morning, Prime Minister Sheikh Hasina
                    along with her younger sister Sheikh Rehana went to the
                    Palace of Westminster to pay their last respect to the late
                    Queen where the body of Elizabeth II was kept in the
                    Lying-in-State.
                    </div>
                </div>

                <div class="authorPopular_item"></div>
                </div>
            </div>

        </div>

    </div>

</section>
