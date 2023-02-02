@extends('admin.admin_dashboard')

@section('admin')

<div class="content">

    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <a href="{{ route('add.admin') }}" class="btn btn-success waves-effect waves-light">
                            Add Admin<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
                        </a>
                    </div>
                    <h4 class="page-title">Datatables</h4>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-body">

                        <h4 class="header-title">Data Admin <span class="btn btn-danger">{{ count($alladminuser) }}</span> </h4>

                        <p class="text-muted font-13 mb-4">

                            The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                            that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.

                        </p>

                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">

                            <thead>

                                <tr>

                                    <th>No</th>

                                    <th>Image</th>

                                    <th>Name</th>

                                    <th>Email</th>

                                    <th>Phone</th>

                                    <th>Role</th>

                                    <th>Status</th>

                                    <th>Action</th>

                                </tr>

                            </thead>


                            <tbody>

                                @foreach ($alladminuser as $key => $item)

                                <tr>

                                    <td>{{ $key+1 }}</td>

                                    <td>

                                        <img id="showImage" src="{{ (!empty($item->photo)) ? url('upload/admin_images/'.$item->photo) : url('upload/no_image.jpg') }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                                    </td>

                                    <td>{{ $item->name }}</td>

                                    <td>{{ $item->email }}</td>

                                    <td>{{ $item->phone }}</td>

                                    <td>

                                        @foreach ($item->roles as $role)

                                            <span class="badge badge-pill bg-danger">

                                                {{ $role->name }}

                                            </span>

                                        @endforeach

                                    </td>

                                    <td>

                                        @if ( $item->status == 'active')

                                            <span class="badge bg-success text-white">Active</span>

                                        @else

                                            <span class="badge bg-danger text-white">Inactive</span>

                                        @endif


                                    </td>

                                    <td>

                                        <a href="{{ route('edit.admin',$item->id) }}" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-lead-pencil"></i></a>

                                        <a id="delete" href="{{ route('delete.admin',$item->id) }}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-delete"></i></a>

                                        @if ($item->status == 'active')

                                            <a href="{{ route('inactive.admin.user',$item->id) }}" class="btn btn-danger waves-effect waves-light" title="Inactive"><i class="fa-solid fa-thumbs-down"></i></a>

                                        @else

                                            <a href="{{ route('active.admin.user',$item->id) }}" class="btn btn-danger waves-effect waves-light" title="Active"><i class="fa-solid fa-thumbs-up"></i></a>

                                        @endif

                                    </td>

                                </tr>

                                @endforeach

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection
