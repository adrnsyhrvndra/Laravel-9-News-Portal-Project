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

                        <h4 class="header-title">Update SEO</h4>

                        <p class="text-muted font-13">More complex layouts can also be created with the grid system.</p>

                        <form method="post" action="{{ route('seo.update') }}" id="myForm">

                            @csrf

                            <input type="hidden" name="id" value="{{ $seo->id }}">

                            <div class="mb-3 form-group">

                                <label for="meta_title" class="form-label">Meta Title</label>

                                <input type="text" class="form-control" name="meta_title" id="meta_title" placeholder="1234 Main St" value="{{ $seo->meta_title }}">

                            </div>

                            <div class="mb-3 form-group">

                                <label for="meta_author" class="form-label">Meta Author</label>

                                <input type="text" class="form-control" name="meta_author" id="meta_author" placeholder="1234 Main St" value="{{ $seo->meta_author }}">

                            </div>

                            <div class="mb-3 form-group">

                                <label class="form-label">Meta Keyword</label>

                                <input type="text" class="selectize-close-btn" name="meta_keyword" value="{{ $seo->meta_keyword }}"">

                            </div>

                            <div class="mb-3 form-group">

                                <label for="meta_description" class="form-label">Meta Description</label>

                                <input type="text" class="form-control" name="meta_description" id="meta_description" placeholder="1234 Main St" value="{{ $seo->meta_description }}">

                            </div>

                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Data</button>

                        </form>

                    </div>

                </div>

            </div>

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

        $('#image').change(function(e) {

            var reader = new FileReader();

            reader.onload = function(e) {

                $('#showImage').attr('src',e.target.result);

            }

            reader.readAsDataURL(e.target.files['0']);

        });

    });

</script>

@endsection
