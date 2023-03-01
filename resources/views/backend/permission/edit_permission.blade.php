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
                        <h4 class="header-title">Edit Permission</h4>
                        <p class="text-muted font-13">More complex layouts can also be created with the grid system.</p>

                        <form method="post" action="{{ route('update.permission') }}" id="myForm">

                            @csrf

                            <input type="hidden" name="id" value="{{ $permission->id }}">

                            <div class="mb-3 form-group">
                                <label for="name" class="form-label">Permission Name</label>
                                <input type="text" value="{{ $permission->name }}" class="form-control" name="name" id="name" placeholder="1234 Main St">
                            </div>

                            <div class="mb-3 form-group">

                                <label for="group_name" class="form-label">Group Name</label>

                                <select class="form-select" id="group_name" name="group_name">

                                    <option>Select One Category</option>

                                    <option value="category" {{ $permission->group_name == 'category' ? 'selected' : '' }} >Category</option>

                                    <option value="subcategory" {{ $permission->group_name == 'subcategory' ? 'selected' : '' }}>Sub Category</option>

                                    <option value="banner" {{ $permission->group_name == 'banner' ? 'selected' : '' }}>Banner</option>

                                    <option value="news" {{ $permission->group_name == 'news' ? 'selected' : '' }}>News Post</option>

                                    <option value="photo" {{ $permission->group_name == 'photo' ? 'selected' : '' }}>Photo</option>

                                    <option value="video" {{ $permission->group_name == 'video' ? 'selected' : '' }}>Video</option>

                                    <option value="live" {{ $permission->group_name == 'live' ? 'selected' : '' }}>Live Video</option>

                                    <option value="review"{{ $permission->group_name == 'review' ? 'selected' : '' }}>Review</option>

                                    <option value="seo"{{ $permission->group_name == 'seo' ? 'selected' : '' }}>SEO</option>

                                    <option value="admin"{{ $permission->group_name == 'admin' ? 'selected' : '' }}>Admin Setting</option>

                                    <option value="role" {{ $permission->group_name == 'role' ? 'selected' : '' }}>Role & Permission</option>

                                </select>

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

@endsection
