
@if (Request::segment(1) == "add" && Request::segment(2) == "category")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Category News Data</a></li>

                        <li class="breadcrumb-item active">Add Category News Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Add Category News Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "all" && Request::segment(2) == "category")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item active">Category News Data</li>

                    </ol>

                </div>

                <h4 class="page-title">All Category News Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "edit" && Request::segment(2) == "category")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item">Category News Data</li>

                        <li class="breadcrumb-item active">Edit Category News Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Edit Category News Data Of {{ $category->category_name }}</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "all" && Request::segment(2) == "sub" && Request::segment(3) == "category")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item active">Sub Category News Data</li>

                    </ol>

                </div>

                <h4 class="page-title">All Sub Category News Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "add" && Request::segment(2) == "sub" && Request::segment(3) == "category")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Sub Category News Data</a></li>

                        <li class="breadcrumb-item active">Add Sub Category News Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Add Sub Category News Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "edit" && Request::segment(2) == "sub" && Request::segment(3) == "category")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item">Sub Category News Data</li>

                        <li class="breadcrumb-item active">Edit Sub Category News Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Edit Sub Category News Data Of {{ $subcategory->subcategory_name }}</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "all" && Request::segment(2) == "news" && Request::segment(3) == "post")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item active">News Post Data</li>

                    </ol>

                </div>

                <h4 class="page-title">All News Post Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "add" && Request::segment(2) == "news" && Request::segment(3) == "post")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item"><a href="javascript: void(0);">News Post Data</a></li>

                        <li class="breadcrumb-item active">Add News Post Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Add News Post Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "edit" && Request::segment(2) == "news" && Request::segment(3) == "post")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item">News Post Data</li>

                        <li class="breadcrumb-item active">Edit News Post Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Edit News Post Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "all" && Request::segment(2) == "photo" && Request::segment(3) == "gallery")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item active">Photo Gallery Data</li>

                    </ol>

                </div>

                <h4 class="page-title">All Photo Gallery Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "add" && Request::segment(2) == "photo" && Request::segment(3) == "gallery")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Photo Gallery Data</a></li>

                        <li class="breadcrumb-item active">Add Photo Gallery Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Add Photo Gallery Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "edit" && Request::segment(2) == "photo" && Request::segment(3) == "gallery")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item">Photo Gallery Data</li>

                        <li class="breadcrumb-item active">Edit Photo Gallery Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Edit Photo Gallery Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "edit" && Request::segment(2) == "live" && Request::segment(3) == "tv")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item">Live Tv Data</li>

                        <li class="breadcrumb-item active">Edit Live Tv Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Edit Live Tv Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "all" && Request::segment(2) == "banners")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item">Banner Data</li>

                        <li class="breadcrumb-item active">Update Banner Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Update Banner Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "pending" && Request::segment(2) == "review")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item active">All Pending Review Data</li>

                    </ol>

                </div>

                <h4 class="page-title">All Pending Review Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "approve" && Request::segment(2) == "review")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item active">All Approve Review Data</li>

                    </ol>

                </div>

                <h4 class="page-title">All Approve Review Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "seo" && Request::segment(2) == "setting" && Request::segment(3) == "update")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item active">All Seo Data</li>

                    </ol>

                </div>

                <h4 class="page-title">All Seo Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "all" && Request::segment(2) == "video" && Request::segment(3) == "gallery")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item active">Video Gallery Data</li>

                    </ol>

                </div>

                <h4 class="page-title">All Video Gallery Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "add" && Request::segment(2) == "video" && Request::segment(3) == "gallery")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Video Gallery Data</a></li>

                        <li class="breadcrumb-item active">Add Video Gallery Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Add Video Gallery Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "edit" && Request::segment(2) == "video" && Request::segment(3) == "gallery")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item">Video Gallery Data</li>

                        <li class="breadcrumb-item active">Edit Video Gallery Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Edit Video Gallery Data</h4>

            </div>

        </div>

    </div>

    @elseif(Request::segment(1) == "all" && Request::segment(2) == "admin")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item active">Admin Data</li>

                    </ol>

                </div>

                <h4 class="page-title">All Admin Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "add" && Request::segment(2) == "admin")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin Data</a></li>

                        <li class="breadcrumb-item active">Add Admin Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Add Admin Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "edit" && Request::segment(2) == "admin")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin Data</a></li>

                        <li class="breadcrumb-item active">Add Admin Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Edit Admin Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "all" && Request::segment(2) == "roles" && Request::segment(3) == "permission")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Roles & Permission Data</a></li>

                        <li class="breadcrumb-item active">All Roles & Permission Data</li>

                    </ol>

                </div>

                <h4 class="page-title">All Roles & Permission Data</h4>

            </div>

        </div>

    </div>

    @elseif(Request::segment(1) == "add" && Request::segment(2) == "roles" && Request::segment(3) == "permission")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Roles Permission Data</a></li>

                        <li class="breadcrumb-item active">Add Roles Permission Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Add Roles Permission Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "edit" && Request::segment(2) == "roles" && Request::segment(3) == "permission")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Roles & Permission Data</a></li>

                        <li class="breadcrumb-item active">Edit Roles & Permission Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Edit Roles & Permission Data</h4>

            </div>

        </div>

    </div>


@elseif(Request::segment(1) == "all" && Request::segment(2) == "permission")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Permission Data</a></li>

                        <li class="breadcrumb-item active">Add Permission Data</li>

                    </ol>

                </div>

                <h4 class="page-title">All Permission Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "all" && Request::segment(2) == "roles")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item active">All Roles Data</li>

                    </ol>

                </div>

                <h4 class="page-title">All Roles Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "add" && Request::segment(2) == "roles")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item active">Add Roles Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Add Roles Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "edit" && Request::segment(2) == "roles")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item active">Edit Roles Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Edit Roles Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "add" && Request::segment(2) == "permission")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Permission Data</a></li>

                        <li class="breadcrumb-item active">Add Permission Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Add Permission Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "edit" && Request::segment(2) == "permission")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Permission Data</a></li>

                        <li class="breadcrumb-item active">Edit Permission Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Edit Permission Data</h4>

            </div>

        </div>

    </div>

@elseif(Request::segment(1) == "edit" && Request::segment(2) == "sitesetting")

    <div class="row">

        <div class="col-12">

            <div class="page-title-box">

                <div class="page-title-right">

                    <ol class="breadcrumb m-0">

                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>

                        <li class="breadcrumb-item active">Update Site Setting Data</li>

                    </ol>

                </div>

                <h4 class="page-title">Update Site Setting Data</h4>

            </div>

        </div>

    </div>

@endif


