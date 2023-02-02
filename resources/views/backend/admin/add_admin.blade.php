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
                        <h4 class="header-title">Add Admin</h4>
                        <p class="text-muted font-13">More complex layouts can also be created with the grid system.</p>

                        <form method="post" action="{{ route('admin.store') }}" id="myForm">

                            @csrf

                            <div class="mb-3 form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="1234 Main St">
                            </div>

                            <div class="mb-3 form-group">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="1234 Main St">
                            </div>

                            <div class="mb-3 form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="1234 Main St">
                            </div>

                            <div class="mb-3 form-group">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="1234 Main St">
                            </div>

                            <div class="mb-3 form-group">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="1234 Main St">
                            </div>

                            <div class="mb-3 form-group">

                                <label for="role" class="form-label">Select Roles</label>

                                <select class="form-select" id="role" name="role">

                                    <option>Select One Roles</option>

                                    @foreach ($roles as $role)

                                        <option value="{{ $role->id }}">{{ $role->name }}</option>

                                    @endforeach

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
