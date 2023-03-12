@extends('admin.admin_dashboard')

@section('admin')

<div class="content">

    <div class="container-fluid">

        <!-- start page title -->

        @include('admin.includescustom.start_page_title')

        <!-- end page title -->

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-body">

                        <h4 class="header-title">Data All Sub Category</h4>

                        <p class="text-muted font-13 mb-4">

                            The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                            that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.

                        </p>

                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">

                            <thead>

                                <tr>

                                    <th>No</th>

                                    <th>Category Name</th>

                                    <th>Sub Category Name</th>

                                    <th>Action</th>

                                </tr>

                            </thead>

                            <tbody>

                                @foreach ($subcategory_restore as $key => $item)

                                <tr>

                                    <td>{{ $key+1 }}</td>

                                    <td>{{ $item['category']['category_name'] }}</td>

                                    <td>{{ $item->subcategory_name }}</td>

                                    <td>

                                        <a href="{{ route('restore.sub.category',$item->id) }}" class="btn btn-success waves-effect waves-light">

                                            <i class="mdi mdi-delete-restore"></i>

                                        </a>

                                        <a id="delete" href="{{ route('sub.category.trash.destroy',$item->id) }}" class="btn btn-danger waves-effect waves-light">

                                            <i class="mdi mdi-delete"></i>

                                        </a>

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
