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

                        <h4 class="header-title">Data All Category</h4>

                        <p class="text-muted font-13 mb-4">

                            Pada tampilan ini, Anda bisa menemukan seluruh kategori berita yang tersedia dalam portal berita kami. Kategori berita ini disusun dalam urutan yang logis dan teratur sehingga para pembaca dapat dengan mudah menavigasi dan mencari berita yang diinginkan.

                        </p>

                        <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">

                            <thead>

                                <tr>

                                    <th>No</th>

                                    <th>Category Name</th>

                                    <th>Action</th>

                                </tr>

                            </thead>


                            <tbody>

                                @foreach ($category_restore as $key => $item)

                                    <tr>

                                        <td>{{ $key+1 }}</td>

                                        <td>{{ $item->category_name }}</td>

                                        <td>

                                            <a href="{{ route('restore.category',$item->id) }}" class="btn btn-success waves-effect waves-light">

                                                <i class="mdi mdi-delete-restore"></i>

                                            </a>

                                            <a id="delete" href="{{ route('category.trash.destroy',$item->id) }}" class="btn btn-danger waves-effect waves-light">

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
