
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

                <li class="menu-title">Navigation</li>

                <li>

                    <a href="{{ route('admin.dashboard') }}">

                        <i class="mdi mdi-view-dashboard-outline"></i>

                        <span> Dashboard </span>

                    </a>

                </li>

                @if ($status == 'active')

                    <li class="menu-title mt-2">Menu</li>

                    {{-- can() adalah fungsi dari laravel spattie --}}

                    @if (Auth::user()->can('category.menu'))

                        <li>

                            <a href="#sidebarEcommerce" data-bs-toggle="collapse">

                                <i class="mdi mdi-cart-outline"></i>

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

                            <i class="mdi mdi-cart-outline"></i>

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

                    <li>

                        <a href="#newspost" data-bs-toggle="collapse">

                            <i class="mdi mdi-cart-outline"></i>

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

                        <a href="#banner" data-bs-toggle="collapse">

                            <i class="mdi mdi-cart-outline"></i>

                            <span> Banner Setting </span>

                            <span class="menu-arrow"></span>

                        </a>

                        <div class="collapse" id="banner">

                            <ul class="nav-second-level">

                                <li>

                                    <a href="{{ route('all.banners') }}">All Banner </a>

                                </li>

                            </ul>

                        </div>

                    </li>

                    <li>
                        <a href="#photoSetting" data-bs-toggle="collapse">
                            <i class="mdi mdi-email-multiple-outline"></i>
                            <span> Photo Setting </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="photoSetting">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('all.photo.gallery') }}">Photo Gallery</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#videoSetting" data-bs-toggle="collapse">
                            <i class="mdi mdi-email-multiple-outline"></i>
                            <span> Video Setting </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="videoSetting">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('all.video.gallery') }}">Video Gallery</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#livetvsetting" data-bs-toggle="collapse">
                            <i class="mdi mdi-email-multiple-outline"></i>
                            <span> Live Tv Setting </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="livetvsetting">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('edit.live.tv') }}">Live TV</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>

                        <a href="#reviewcomment" data-bs-toggle="collapse">
                            <i class="mdi mdi-email-multiple-outline"></i>
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

                        <a href="#seosetting" data-bs-toggle="collapse">
                            <i class="mdi mdi-email-multiple-outline"></i>
                            <span> SEO Setting </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <div class="collapse" id="seosetting">

                            <ul class="nav-second-level">

                                <li>
                                    <a href="{{ route('seo.setting') }}">Update SEO</a>
                                </li>

                            </ul>

                        </div>

                    </li>

                    <li>

                        <a href="#seosetting" data-bs-toggle="collapse">
                            <i class="mdi mdi-email-multiple-outline"></i>
                            <span> Site Setting </span>
                            <span class="menu-arrow"></span>
                        </a>

                        <div class="collapse" id="seosetting">

                            <ul class="nav-second-level">

                                <li>
                                    <a href="{{ route('seo.setting') }}">Update SEO</a>
                                </li>

                            </ul>

                        </div>

                    </li>

                    <li class="menu-title mt-2">Setting</li>

                    <li>

                        <a href="#sidebarAuth" data-bs-toggle="collapse">

                            <i class="mdi mdi-account-circle-outline"></i>

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
                            <i class="mdi mdi-text-box-multiple-outline"></i>
                            <span> Roles And Permission </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="roles">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('all.permission') }}">All Permission</a>
                                </li>
                                <li>
                                    <a href="{{ route('all.roles') }}">All Roles</a>
                                </li>
                                <li>
                                    <a href="{{ route('add.roles.permission') }}">Roles In Permission</a>
                                </li>
                                <li>
                                    <a href="{{ route('all.roles.permission') }}">All Roles In Permission</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="menu-title mt-2">Components</li>

                    <li>

                        <a href="#sidebarIcons" data-bs-toggle="collapse">

                            <i class="mdi mdi-bullseye"></i>

                            <span> Icons </span>

                            <span class="menu-arrow"></span>

                        </a>

                        <div class="collapse" id="sidebarIcons">

                            <ul class="nav-second-level">
                                <li>
                                    <a href="icons-material-symbols.html">Material Symbols Icons</a>
                                </li>
                                <li>
                                    <a href="icons-two-tone.html">Two Tone Icons</a>
                                </li>
                                <li>
                                    <a href="icons-feather.html">Feather Icons</a>
                                </li>
                                <li>
                                    <a href="icons-mdi.html">Material Design Icons</a>
                                </li>
                                <li>
                                    <a href="icons-dripicons.html">Dripicons</a>
                                </li>
                                <li>
                                    <a href="icons-font-awesome.html">Font Awesome 5</a>
                                </li>
                                <li>
                                    <a href="icons-themify.html">Themify</a>
                                </li>
                                <li>
                                    <a href="icons-simple-line.html">Simple Line</a>
                                </li>
                                <li>
                                    <a href="icons-weather.html">Weather</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <a href="#sidebarForms" data-bs-toggle="collapse">
                            <i class="mdi mdi-bookmark-multiple-outline"></i>
                            <span> Forms </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarForms">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="forms-elements.html">General Elements</a>
                                </li>
                                <li>
                                    <a href="forms-advanced.html">Advanced</a>
                                </li>
                                <li>
                                    <a href="forms-validation.html">Validation</a>
                                </li>
                                <li>
                                    <a href="forms-pickers.html">Pickers</a>
                                </li>
                                <li>
                                    <a href="forms-wizard.html">Wizard</a>
                                </li>
                                <li>
                                    <a href="forms-masks.html">Masks</a>
                                </li>
                                <li>
                                    <a href="forms-quilljs.html">Quilljs Editor</a>
                                </li>
                                <li>
                                    <a href="forms-file-uploads.html">File Uploads</a>
                                </li>
                                <li>
                                    <a href="forms-x-editable.html">X Editable</a>
                                </li>
                                <li>
                                    <a href="forms-image-crop.html">Image Crop</a>
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
