
@php

    $id = Auth::user()->id;

    $userid = App\Models\User::find($id);

    $status = $userid->status;

@endphp

<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->

        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Main Menu</li>

                <li>

                    <a href="{{ route('admin.dashboard') }}">

                        <i class="mdi mdi-view-dashboard-outline"></i>

                        <span> Dashboard </span>

                    </a>

                </li>

                @if ($status == 'active')

                    <li class="menu-title mt-2">Category News</li>

                    {{-- can() adalah fungsi dari laravel spattie --}}

                    @if (Auth::user()->can('category.menu'))

                        <li>

                            <a href="#sidebarEcommerce" data-bs-toggle="collapse">

                                <i class="mdi mdi-format-list-checkbox"></i>

                                <span> Category </span>

                                <span class="menu-arrow"></span>

                            </a>

                            <div class="collapse" id="sidebarEcommerce">

                                <ul class="nav-second-level">

                                    @if (Auth::user()->can('category.list'))

                                        <li>

                                            <a href="{{ route('all.category') }}">All Category </a>

                                        </li>

                                    @endif

                                    @if (Auth::user()->can('category.add'))

                                        <li>

                                            <a href="{{ route('add.category') }}">Add Category </a>

                                        </li>

                                    @endif

                                </ul>

                            </div>

                        </li>

                    @endif

                    <li>

                        <a href="#subcategory" data-bs-toggle="collapse">

                            <i class="mdi mdi-format-list-bulleted-square"></i>

                            <span> Sub Category </span>

                            <span class="menu-arrow"></span>

                        </a>

                        <div class="collapse" id="subcategory">

                            <ul class="nav-second-level">

                                <li>

                                    <a href="{{ route('all.sub.category') }}">All Sub Category </a>

                                </li>

                                <li>

                                    <a href="{{ route('add.sub.category') }}">Add Sub Category </a>

                                </li>

                            </ul>

                        </div>

                    </li>

                    <li class="menu-title">News Page Setting</li>

                    <li>

                        <a href="#newspost" data-bs-toggle="collapse">

                            <i class="mdi mdi-newspaper-variant-multiple-outline"></i>

                            <span> News Post Setting </span>

                            <span class="menu-arrow"></span>

                        </a>

                        <div class="collapse" id="newspost">

                            <ul class="nav-second-level">

                                <li>

                                    <a href="{{ route('all.news.post') }}">All News Post </a>

                                </li>

                                <li>

                                    <a href="{{ route('add.news.post') }}">Add News Post </a>

                                </li>

                            </ul>

                        </div>

                    </li>

                    <li>

                        <a href="#photoSetting" data-bs-toggle="collapse">

                            <i class="mdi mdi-camera-wireless-outline"></i>

                            <span> Photo Setting </span>

                            <span class="menu-arrow"></span>

                        </a>

                        <div class="collapse" id="photoSetting">

                            <ul class="nav-second-level">

                                <li>

                                    <a href="{{ route('all.photo.gallery') }}">Photo Gallery</a>

                                </li>

                                <li>

                                    <a href="{{ route('add.photo.gallery') }}">Add Photo Gallery</a>

                                </li>

                            </ul>

                        </div>

                    </li>

                    <li>

                        <a href="#videoSetting" data-bs-toggle="collapse">

                            <i class="mdi mdi-file-video-outline"></i>

                            <span> Video Setting </span>

                            <span class="menu-arrow"></span>

                        </a>

                        <div class="collapse" id="videoSetting">

                            <ul class="nav-second-level">

                                <li>

                                    <a href="{{ route('all.video.gallery') }}">Video Gallery</a>

                                </li>

                                <li>

                                    <a href="{{ route('add.video.gallery') }}">Add Video Gallery</a>

                                </li>

                            </ul>

                        </div>

                    </li>

                    <li>

                        <a href="{{ route('edit.live.tv') }}">

                            <i class="mdi mdi-youtube-tv"></i>

                            <span> Live Tv Setting </span>

                        </a>

                    </li>

                    <li>

                        <a href="{{ route('all.banners') }}">

                            <i class="mdi mdi-image-area-close"></i>

                            <span> Banner Setting </span>

                        </a>

                    </li>

                    <li class="menu-title">Admin Authority Setting</li>

                    <li>

                        <a href="#reviewcomment" data-bs-toggle="collapse">

                            <i class="mdi mdi-comment-multiple-outline"></i>

                            <span> Review Setting </span>

                            <span class="menu-arrow"></span>

                        </a>

                        <div class="collapse" id="reviewcomment">

                            <ul class="nav-second-level">

                                <li>
                                    <a href="{{ route('pending.review') }}">Pending Review</a>
                                </li>

                                <li>
                                    <a href="{{ route('approve.review') }}">Approve Review</a>
                                </li>

                            </ul>

                        </div>

                    </li>

                    <li>

                        <a href="{{ route('seo.setting') }}">

                            <i class="mdi mdi-code-tags-check"></i>

                            <span>Update SEO</span>

                        </a>

                    </li>

                    <li>

                        <a href="#sidebarAuth" data-bs-toggle="collapse">

                            <i class="mdi mdi-account-multiple-outline"></i>

                            <span> Setting Admin User </span>

                            <span class="menu-arrow"></span>

                        </a>

                        <div class="collapse" id="sidebarAuth">

                            <ul class="nav-second-level">

                                <li>

                                    <a href="{{ route('all.admin') }}">All Admin</a>

                                </li>

                                <li>

                                    <a href="{{ route('add.admin') }}">Add Admin</a>

                                </li>

                            </ul>

                        </div>

                    </li>

                    <li>

                        <a href="#roles" data-bs-toggle="collapse">

                            <i class="mdi mdi-account-arrow-right"></i>

                            <span> Roles </span>

                            <span class="menu-arrow"></span>

                        </a>

                        <div class="collapse" id="roles">

                            <ul class="nav-second-level">

                                <li>

                                    <a href="{{ route('all.roles') }}">All Roles</a>

                                </li>

                                <li>

                                    <a href="{{ route('add.roles') }}">Add Roles</a>

                                </li>

                            </ul>

                        </div>

                    </li>

                    <li>

                        <a href="#permission" data-bs-toggle="collapse">

                            <i class="mdi mdi-account-cog-outline"></i>

                            <span> Permission </span>

                            <span class="menu-arrow"></span>

                        </a>

                        <div class="collapse" id="permission">

                            <ul class="nav-second-level">

                                <li>

                                    <a href="{{ route('all.permission') }}">All Permission</a>

                                </li>

                                <li>

                                    <a href="{{ route('add.permission') }}">Add Permission</a>

                                </li>

                            </ul>

                        </div>

                    </li>

                    <li>

                        <a href="#rolespermission" data-bs-toggle="collapse">

                            <i class="mdi mdi-account-details"></i>

                            <span> Roles And Permission </span>

                            <span class="menu-arrow"></span>

                        </a>

                        <div class="collapse" id="rolespermission">

                            <ul class="nav-second-level">

                                <li>

                                    <a href="{{ route('all.roles.permission') }}">All Roles In Permission</a>

                                </li>

                                <li>

                                    <a href="{{ route('add.roles.permission') }}">Add Roles In Permission</a>

                                </li>

                            </ul>

                        </div>

                    </li>

                    <li class="menu-title mt-2">App Profile Setting</li>

                    <li>

                        <a href="#site" data-bs-toggle="collapse">

                            <i class="mdi mdi-web-box"></i>

                            <span> Site Setting </span>

                            <span class="menu-arrow"></span>

                        </a>

                        <div class="collapse" id="site">

                            <ul class="nav-second-level">

                                <li>

                                    <a href="{{ route('edit.sitesetting') }}">Site Setting</a>

                                </li>

                            </ul>

                        </div>

                    </li>

                @else

                @endif

            </ul>

        </div>

        <div class="clearfix"></div>

    </div>

</div>
