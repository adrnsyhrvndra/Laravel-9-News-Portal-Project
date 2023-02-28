@extends('admin.admin_dashboard')

@section('admin')

<div class="content">

    <div class="container-fluid">

        <!-- start page title -->

            @include('admin.includescustom.start_page_title')

        <!-- end page title -->

        <!-- Form row -->

        <div class="row">

            <div class="col-6">

                <div class="widget-rounded-circle card">

                    <div class="card-body">

                        <div class="row">

                            <div class="col-6">

                                <div class="avatar-lg rounded-circle bg-primary border-primary border shadow">

                                    <i class="mdi mdi-format-list-checkbox font-22 avatar-title text-white"></i>

                                </div>

                            </div>

                            <div class="col-6">

                                <div class="text-end">

                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ count($categories) }}</span></h3>

                                    <p class="text-muted mb-1 text-truncate">Total Of Category</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="card">

                    <div class="card-body">

                        <h4 class="header-title">Form Edit Category</h4>

                        <p class="text-muted font-13">Kategori berita memainkan peran yang sangat penting dalam membuat sebuah portal berita yang berkualitas. Kategori berita memungkinkan para pembaca untuk dengan mudah menemukan berita yang mereka inginkan dengan cepat dan mudah.</p>


                        <form method="post" action="{{ route('category.update') }}" id="myForm">

                            @csrf

                            <input type="hidden" name="id" value="{{ $category->id }}">

                            <div class="mb-3 form-group">
                                <label for="category_name" class="form-label">Category Name</label>
                                <input type="text" class="form-control" name="category_name" id="category_name" value="{{ $category->category_name }}" placeholder="Input Category Name">
                            </div>

                            <button type="submit" class="btn btn-primary waves-effect waves-light">Edit Data</button>

                        </form>

                    </div>

                </div>

            </div>

            <div class="col-6">

                <div class="card">

                    <div class="card-body">

                        <h4 class="header-title">All Category Data</h4>

                        <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">

                            <thead>

                                <tr>

                                    <th>No</th>

                                    <th>Category Name</th>

                                </tr>

                            </thead>


                            <tbody>

                                @foreach ($categories as $key => $item)

                                    <tr>

                                        <td>{{ $key+1 }}</td>

                                        <td>{{ $item->category_name }}</td>

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

<script type="text/javascript">

    $(document).ready(function (){

        $('#myForm').validate({

            rules: {
                category_name: {
                    required : true,
                    maxlength: 15
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
