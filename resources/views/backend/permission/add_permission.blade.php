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

                        <h4 class="header-title">Add Permission</h4>

                        <p class="text-muted font-13">More complex layouts can also be created with the grid system.</p>

                        <form method="post" action="{{ route('store.permission') }}" id="myForm">

                            @csrf


                            <div class="mb-3 form-group">
                                <label for="name" class="form-label">Permission Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="1234 Main St">
                            </div>

                            <div class="mb-3 form-group">

                                <label for="group_name" class="form-label">Group Name</label>

                                <select class="form-select" id="group_name" name="group_name">

                                    <option>Select One Category</option>

                                    <option value="category">Category</option>

                                    <option value="subcategory">Sub Category</option>

                                    <option value="banner">Banner</option>

                                    <option value="news">News Post</option>

                                    <option value="photo">Photo</option>

                                    <option value="video">Video</option>

                                    <option value="live">Live Video</option>

                                    <option value="review">Review</option>

                                    <option value="seo">SEO</option>

                                    <option value="admin">Admin Setting</option>

                                    <option value="role">Role & Permission</option>

                                </select>

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

@endsection
