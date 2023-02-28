@extends('admin.admin_dashboard')

@section('admin')

<div class="content">

    <div class="container-fluid">

        <!-- start page title -->

        @include('admin.includescustom.start_page_title')

        <!-- end page title -->

        <!-- Form row -->

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-body">

                        <h4 class="header-title">Edit Video</h4>

                        <p class="text-muted font-13">More complex layouts can also be created with the grid system.</p>

                        <form method="post" action="{{ route('update.video.gallery') }}" id="myForm" enctype="multipart/form-data">

                            @csrf

                            <input type="hidden" name="id" value="{{ $video->id }}">

                            <div class="mb-3 form-group">
                                <label for="video_title" class="form-label">Video Title</label>
                                <input type="text" class="form-control" name="video_title" id="video_title" placeholder="Input Video Title" value="{{ $video->video_title }}">
                            </div>

                            <div class="mb-3 form-group">
                                <label for="video_url" class="form-label">Video URL</label>
                                <textarea class="form-control" name="video_url" id="video_url" rows="5">{{ $video->video_url }}</textarea>
                            </div>

                            <div class="mb-3 form-group">
                                <label for="video_image" class="form-label">Video Image</label>
                                <input type="file" class="form-control" name="video_image" id="video_image" placeholder="1234 Main St">
                            </div>

                            <div class="mb-3 form-group">
                                <label for="video_image" class="form-label"></label>
                                <img class="img-thumbnail" width="200" id="showImage" src="{{ asset($video->video_image)  }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                            </div>

                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Data</button>

                        </form>

                    </div> <!-- end card-body -->

                </div> <!-- end card-->

            </div> <!-- end col -->

        </div>

    </div>

</div>

<script type="text/javascript">

    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                category_name: {
                    required : true,
                },
            },
            messages :{
                category_name: {
                    required : 'Please Enter Category Name',
                },
            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>

<script type="text/javascript">

    // Code untuk mengganti foto sesuai dengan input type file dengan change event jquery.

    $(document).ready(function() {

        $('#video_image').change(function(e) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('#showImage').attr('src',e.target.result);

            }

            reader.readAsDataURL(e.target.files['0']);

        });

    });

</script>

@endsection
