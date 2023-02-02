@extends('admin.admin_dashboard')

@section('admin')

<div class="content">

    <!-- Start Content-->

    <div class="container-fluid">

        <!-- start page title -->

        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Profile</h4>
                </div>
            </div>
        </div>

        <div class="row">

            <div class="col-lg-4 col-xl-4">

                <div class="card text-center">

                    <div class="card-body">

                        <img src="{{ (!empty($adminData->photo)) ? url('upload/admin_images/'.$adminData->photo) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                        <h4 class="mb-0">{{ $adminData->name }}</h4>

                        <p class="text-muted">@ {{ $adminData->username }}</p>

                        <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>

                        <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>

                        <div class="text-start mt-3">
                            <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ms-2">{{ $adminData->name }}</span></p>

                            <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ms-2">{{ $adminData->phone }}</span></p>

                            <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ms-2">{{ $adminData->email }}</span></p>

                        </div>

                        <ul class="social-list list-inline mt-3 mb-0">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div> <!-- end card -->

            </div> <!-- end col-->

            <div class="col-lg-8 col-xl-8">

                <div class="card">

                    <div class="card-body">

                        <form action="{{ route('admin.store.profile') }}" method="post" enctype="multipart/form-data">

                            @csrf

                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i>Admin Personal Info</h5>

                            <div class="row">

                                <div class="col-md-6">

                                    <div class="mb-3">

                                        <label for="name" class="form-label">Name</label>

                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{ $adminData->name }}">

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="mb-3">

                                        <label for="username" class="form-label">Username</label>

                                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username" value="{{ $adminData->username }}">

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="mb-3">

                                        <label for="email" class="form-label">Email</label>

                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="{{ $adminData->email }}">

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="mb-3">

                                        <label for="phone" class="form-label">Phone Number</label>

                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter your phone" value="{{ $adminData->phone }}">

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="mb-3">

                                        <label for="image" class="form-label">Admin Profile Picture</label>

                                        <input type="file" id="image" name="photo" class="form-control">

                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <div class="mb-3">

                                        <img id="showImage" src="{{ (!empty($adminData->photo)) ? url('upload/admin_images/'.$adminData->photo) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                                    </div>

                                </div>

                            </div>

                            <div class="text-end">

                                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>

                            </div>

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
