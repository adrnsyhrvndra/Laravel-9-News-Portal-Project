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
                        <h4 class="header-title">Edit Admin</h4>
                        <p class="text-muted font-13">More complex layouts can also be created with the grid system.</p>

                        <form method="post" action="{{ route('admin.update') }}" id="myForm">

                            @csrf

                            <input type="hidden" name="id" value="{{ $adminuser->id }}">

                            <div class="mb-3 form-group">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Input Your Name"  value="{{ $adminuser->name }}">
                            </div>

                            <div class="mb-3 form-group">
                                <label for="username" class="form-label">Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Input Your Username"  value="{{ $adminuser->username }}">
                            </div>

                            <div class="mb-3 form-group">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Input Your Email"  value="{{ $adminuser->email }}">
                            </div>

                            <div class="mb-3 form-group">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Input Your Phone"  value="{{ $adminuser->phone }}">
                            </div>

                            <div class="mb-3 form-group">

                                <label for="role" class="form-label">Select Roles</label>

                                <select class="form-select" id="role" name="role">

                                    <option>Select One Roles</option>

                                    @foreach ($roles as $role)

                                        <option value="{{ $role->id }}" {{ $adminuser->hasRole($role->name) ? 'selected' : '' }} >{{ $role->name }}</option>

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
