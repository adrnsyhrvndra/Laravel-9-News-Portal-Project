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

                        <h4 class="header-title">Pending Review <span class="btn btn-danger">{{ count($review) }}</span> </h4>

                        <p class="text-muted font-13 mb-4">

                            The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                            that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.

                        </p>

                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">

                            <thead>

                                <tr>

                                    <th>No</th>

                                    <th>Image</th>

                                    <th>News</th>

                                    <th>Username</th>

                                    <th>Comment</th>

                                    <th>Status</th>

                                    <th>Action</th>

                                </tr>

                            </thead>


                            <tbody>

                                @foreach ($review as $key => $item)

                                <tr>

                                    <td>{{ $key+1 }}</td>

                                    <td>

                                        <img id="showImage" src="{{ asset($item['NewsPostRelation']['image']) }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                                    </td>

                                    <td>{{ $item['NewsPostRelation']['news_title'] }}</td>

                                    <td>{{ $item['UserRelation']['name'] }}</td>

                                    <td>{{ Str::limit($item->comment,25) }}</td>

                                    <td>

                                        @if ( $item->status == 0)

                                            <span class="badge bg-danger text-white">Pending</span>

                                        @else

                                            <span class="badge bg-success text-white">Publish</span>

                                        @endif


                                    </td>

                                    <td>

                                        <a href="{{ route('approve.review.update',$item->id) }}" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-lead-pencil"></i></a>

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
