@extends('admin.admin_dashboard')

@section('admin')

@php

    $activenews = App\Models\NewsPost::where('status',1)->get();

    $inactivenews = App\Models\NewsPost::where('status',0)->get();

    $breaking_news = App\Models\NewsPost::where('breaking_news',1)->get();

@endphp

<div class="content">

    <div class="container-fluid">

        <!-- start page title -->

        @include('admin.includescustom.start_page_title')

        <!-- end page title -->

        <div class="row">

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-primary border-primary border shadow">
                                    <i class="fe-heart font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ count($allnews) }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">All News Post</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-success border-success border shadow">
                                    <i class="fe-shopping-cart font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ count($activenews) }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Active News</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-info border-info border shadow">
                                    <i class="fe-bar-chart-line- font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ count($inactivenews) }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Inactive News</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="avatar-lg rounded-circle bg-warning border-warning border shadow">
                                    <i class="fe-eye font-22 avatar-title text-white"></i>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ count($breaking_news) }}</span></h3>
                                    <p class="text-muted mb-1 text-truncate">Breaking News</p>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div>
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-body">

                        <h4 class="header-title">Data All News Post <span class="btn btn-danger">{{ count($allnews) }}</span> </h4>

                        <p class="text-muted font-13 mb-4">

                            The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                            that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.

                        </p>

                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">

                            <thead>

                                <tr>

                                    <th>No</th>

                                    <th>Image</th>

                                    <th>Title</th>

                                    <th>Category</th>

                                    <th>Sub Category</th>

                                    <th>User</th>

                                    <th>Date</th>

                                    <th>Status</th>

                                    <th>Action</th>

                                </tr>

                            </thead>


                            <tbody>

                                @foreach ($allnews as $key => $item)

                                <tr>

                                    <td>{{ $key+1 }}</td>

                                    <td>

                                        <img id="showImage" src="{{ asset($item->image) }}" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">

                                    </td>

                                    <td>{{ Str::limit($item->news_title,20)  }}</td>

                                    <td>{{ $item['categoryRelation']['category_name'] }}</td>

                                    <td>

                                        @if (empty($item['subcategoryRelation']))

                                        <span class="badge bg-danger text-white">Tidak Ada Sub Kategori</span>

                                        @else

                                            {{ $item['subcategoryRelation']['subcategory_name'] }}

                                        @endif

                                    </td>

                                    <td>{{ $item['userRelation']['name'] }}</td>

                                    <td>{{ Carbon\Carbon::parse($item->post_date)->diffForHumans() }}</td>

                                    <td>

                                        @if ( $item->status == 1)

                                            <span class="badge bg-success text-white">Active</span>

                                        @else

                                            <span class="badge bg-danger text-white">Inactive</span>

                                        @endif


                                    </td>

                                    <td>

                                        <a href="{{ route('edit.news.post',$item->id) }}" class="btn btn-success waves-effect waves-light"><i class="mdi mdi-lead-pencil"></i></a>

                                        <a id="delete" href="{{ route('delete.news.post',$item->id) }}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-delete"></i></a>

                                        @if ($item->status == 1)

                                            <a href="{{ route('inactive.news.post',$item->id) }}" class="btn btn-danger waves-effect waves-light" title="Inactive"><i class="fa-solid fa-thumbs-down"></i></a>

                                        @else

                                            <a href="{{ route('active.news.post',$item->id) }}" class="btn btn-danger waves-effect waves-light" title="Active"><i class="fa-solid fa-thumbs-up"></i></a>

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
