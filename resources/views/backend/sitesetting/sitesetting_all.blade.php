@extends('admin.admin_dashboard')

@section('admin')

@section('title')

    Update Site Setting | Admin Dashboard

@endsection

<div class="content">

    <div class="container-fluid">

        <!-- Form row -->

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-body">

                        <h4 class="header-title">Update Site Setting</h4>

                        <p class="text-muted font-13">More complex layouts can also be created with the grid system.</p>

                        <form method="post" action="{{ route('update.sitesetting') }}" id="myForm" enctype="multipart/form-data">

                            @csrf

                            <input type="hidden" name="id" value="{{ $site->id }}">


                            <div class="mb-3 form-group">

                                <label for="news_details" class="form-label">Footer Description</label>

                                <textarea name="footer_description" id="mytextarea" cols="30" rows="10"> {{ $site->footer_description }} </textarea>

                            </div>

                            <div class="mb-3 form-group">

                                <label for="news_details" class="form-label">Footer Copyright</label>

                                <textarea name="footer_copyright" id="mytextarea" cols="30" rows="10"> {{ $site->footer_copyright }} </textarea>

                            </div>

                            <div class="mb-3 form-group">

                                <label for="site_logo" class="form-label">Site Logo</label>

                                <input type="file" id="site_logo" name="site_logo" class="form-control">

                            </div>

                            <div class="mb-3 form-group">

                                <img id="showImage" src="{{ asset($site->image) }}" class="img-fluid rounded" width="200" alt="profile-image">

                            </div>

                            <div class="mb-3 form-group">

                                <label for="instagram_url" class="form-label">Instagram URL</label>

                                <input type="text" class="form-control" name="instagram_url" id="instagram_url" placeholder="1234 Main St" value="{{ $site->instagram_url }}">

                            </div>

                            <div class="mb-3 form-group">

                                <label for="facebook_url" class="form-label">Facebook URL</label>

                                <input type="text" class="form-control" name="facebook_url" id="facebook_url" placeholder="1234 Main St" value="{{ $site->facebook_url }}">

                            </div>

                            <div class="mb-3 form-group">

                                <label for="pinterest_url" class="form-label">Pinterest URL</label>

                                <input type="text" class="form-control" name="pinterest_url" id="pinterest_url" placeholder="1234 Main St" value="{{ $site->pinterest_url }}">

                            </div>

                            <div class="mb-3 form-group">

                                <label for="youtube_url" class="form-label">Youtube URL</label>

                                <input type="text" class="form-control" name="youtube_url" id="youtube_url" placeholder="1234 Main St" value="{{ $site->youtube_url }}">

                            </div>

                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Data</button>

                        </form>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


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

        $('#site_logo').change(function(e) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('#showImage').attr('src',e.target.result);

            }

            reader.readAsDataURL(e.target.files['0']);

        });

    });

</script>

@endsection