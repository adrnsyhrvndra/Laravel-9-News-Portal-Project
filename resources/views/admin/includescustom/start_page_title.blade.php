
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

@endif


