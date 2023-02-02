@extends('admin.admin_dashboard')

@section('admin')

<div class="content">

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <a href="{{ route('add.category') }}" class="btn btn-success waves-effect waves-light">
                            Add Admin<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
                        </a>
                    </div>
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

                        <h4 class="header-title">Edit Live TV</h4>

                        <p class="text-muted font-13">More complex layouts can also be created with the grid system.</p>

                        <form method="post" action="{{ route('update.live.tv') }}" id="myForm" enctype="multipart/form-data">

                            @csrf

                            <input type="hidden" name="id" value="{{ $livetv->id }}">

                            <div class="mb-3 form-group">
                                <label for="live_url" class="form-label">Live URL</label>
                                <input type="text" class="form-control" name="live_url" id="live_url" placeholder="1234 Main St" value="{{ $livetv->live_url }}">
                            </div>

                            <div class="mb-3 form-group">
                                <label for="live_image" class="form-label">Live Image</label>
                                <input type="file" class="form-control" name="live_image" id="live_image" placeholder="1234 Main St">
                            </div>

                            <div class="mb-3 form-group">
                                <label for="live_image" class="form-label"></label>
                                <img id="showImage" src="{{ asset($livetv->live_image)  }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
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

        $('#live_image').change(function(e) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('#showImage').attr('src',e.target.result);

            }

            reader.readAsDataURL(e.target.files['0']);

        });

    });

</script>

@endsection
