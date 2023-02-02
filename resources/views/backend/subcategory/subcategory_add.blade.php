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
                            Add Sub Category<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
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
                        <h4 class="header-title">Add Sub Category</h4>
                        <p class="text-muted font-13">More complex layouts can also be created with the grid system.</p>

                        <form method="post" action="{{ route('sub.category.store') }}" id="myForm">

                            @csrf

                            <div class="mb-3 form-group">

                                <label for="category_name" class="form-label">Select One Category</label>

                                <select class="form-select" id="category_name" name="category_name">

                                    <option>Select One Category</option>

                                    @foreach ($categories as $category)

                                        <option value="{{ $category->id }}"> {{ $category->category_name }} </option>

                                    @endforeach

                                </select>

                            </div>

                            <div class="mb-3 form-group">
                                <label for="subcategory_name" class="form-label">Sub Category Name</label>
                                <input type="text" class="form-control" name="subcategory_name" id="subcategory_name" placeholder="1234 Main St">
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
