@extends('admin.admin_dashboard')

@section('admin')

<div class="content">

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <h4 class="page-title">Datatables</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- Form row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Update Banner</h4>
                        <p class="text-muted font-13">More complex layouts can also be created with the grid system.</p>

                        <form method="post" action="{{ route('banners.update') }}" id="myForm" enctype="multipart/form-data">

                            @csrf

                            <input type="hidden" name="id" value="{{ $banner->id }}">

                            <div class="mb-3 form-group">

                                <label for="image" class="form-label">Home Banner One</label>

                                <input type="file" id="image1" name="home_one" class="form-control">

                            </div>

                            <div class="mb-3 form-group">

                                <img id="showImage" src="{{ (!empty($banner->home_one)) ? url($banner->home_one) : url('upload/no_image.jpg') }}" class="img-fluid rounded" width="200" alt="profile-image">

                            </div>

                            <div class="mb-3 form-group">

                                <label for="image" class="form-label">Home Banner Two</label>

                                <input type="file" id="image2" name="home_two" class="form-control">

                            </div>

                            <div class="mb-3 form-group">

                                <img id="showImage2" src="{{ (!empty($banner->home_two)) ? url($banner->home_two) : url('upload/no_image.jpg') }}" class="img-fluid rounded" width="200" alt="profile-image">

                            </div>

                            <div class="mb-3 form-group">

                                <label for="image" class="form-label">Home Banner Three</label>

                                <input type="file" id="image3" name="home_three" class="form-control">

                            </div>

                            <div class="mb-3 form-group">

                                <img id="showImage3" src="{{ (!empty($banner->home_three)) ? url($banner->home_three) : url('upload/no_image.jpg') }}" class="img-fluid rounded" width="200" alt="profile-image">

                            </div>

                            <div class="mb-3 form-group">

                                <label for="image" class="form-label">Home Banner Four</label>

                                <input type="file" id="image4" name="home_four" class="form-control">

                            </div>

                            <div class="mb-3 form-group">

                                <img id="showImage4" src="{{ (!empty($banner->home_four)) ? url($banner->home_four) : url('upload/no_image.jpg') }}" class="img-fluid rounded" width="200" alt="profile-image">

                            </div>

                            <div class="mb-3 form-group">

                                <label for="image" class="form-label">News Category Banner</label>

                                <input type="file" id="image5" name="news_category_one" class="form-control">

                            </div>

                            <div class="mb-3 form-group">

                                <img id="showImage5" src="{{ (!empty($banner->news_category_one)) ? url($banner->news_category_one) : url('upload/no_image.jpg') }}" class="img-fluid rounded" width="200" alt="profile-image">

                            </div>

                            <div class="mb-3 form-group">

                                <label for="image" class="form-label">News Detail Banner</label>

                                <input type="file" id="image6" name="news_details_one" class="form-control">

                            </div>

                            <div class="mb-3 form-group">

                                <img id="showImage6" src="{{ (!empty($banner->news_details_one)) ?  url($banner->news_details_one) : url('upload/no_image.jpg') }}" class="img-fluid rounded" width="200" alt="profile-image">

                            </div>

                            <div class="mb-3 form-group">

                                <label for="image" class="form-label">Vertical Banner</label>

                                <input type="file" id="image7" name="vertical_banner" class="form-control">

                            </div>

                            <div class="mb-3 form-group">

                                <img id="showImage7" src="{{ (!empty($banner->vertical_banner)) ?  url($banner->vertical_banner) : url('upload/no_image.jpg') }}" class="img-fluid rounded" width="200" alt="profile-image">

                            </div>

                            <button type="submit" class="btn btn-primary waves-effect waves-light">Edit Data</button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script type="text/javascript">

    // Code untuk mengganti foto sesuai dengan input type file dengan change event jquery.

    $(document).ready(function() {

        $('#image1').change(function(e) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('#showImage').attr('src',e.target.result);

            }

            reader.readAsDataURL(e.target.files['0']);

        });

    });

</script>

<script type="text/javascript">

    // Code untuk mengganti foto sesuai dengan input type file dengan change event jquery.

    $(document).ready(function() {

        $('#image2').change(function(e) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('#showImage2').attr('src',e.target.result);

            }

            reader.readAsDataURL(e.target.files['0']);

        });

    });

</script>

<script type="text/javascript">

    // Code untuk mengganti foto sesuai dengan input type file dengan change event jquery.

    $(document).ready(function() {

        $('#image3').change(function(e) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('#showImage3').attr('src',e.target.result);

            }

            reader.readAsDataURL(e.target.files['0']);

        });

    });

</script>

<script type="text/javascript">

    // Code untuk mengganti foto sesuai dengan input type file dengan change event jquery.

    $(document).ready(function() {

        $('#image4').change(function(e) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('#showImage4').attr('src',e.target.result);

            }

            reader.readAsDataURL(e.target.files['0']);

        });

    });

</script>

<script type="text/javascript">

    // Code untuk mengganti foto sesuai dengan input type file dengan change event jquery.

    $(document).ready(function() {

        $('#image5').change(function(e) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('#showImage5').attr('src',e.target.result);

            }

            reader.readAsDataURL(e.target.files['0']);

        });

    });

</script>

<script type="text/javascript">

    // Code untuk mengganti foto sesuai dengan input type file dengan change event jquery.

    $(document).ready(function() {

        $('#image6').change(function(e) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('#showImage6').attr('src',e.target.result);

            }

            reader.readAsDataURL(e.target.files['0']);

        });

    });


</script>

<script type="text/javascript">

    // Code untuk mengganti foto sesuai dengan input type file dengan change event jquery.

    $(document).ready(function() {

        $('#image7').change(function(e) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('#showImage7').attr('src',e.target.result);

            }

            reader.readAsDataURL(e.target.files['0']);

        });

    });


</script>

@endsection
