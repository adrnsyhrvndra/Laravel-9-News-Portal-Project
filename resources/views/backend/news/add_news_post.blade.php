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
                            Add News Post<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
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
                        <h4 class="header-title">Add News Post</h4>
                        <p class="text-muted font-13">More complex layouts can also be created with the grid system.</p>

                        <form method="post" action="{{ route('news.post.store') }}" id="myForm" enctype="multipart/form-data">

                            @csrf

                            <div class="mb-3">

                                <label for="category_id" class="form-label">Category</label>

                                <select class="form-select" id="category_id" name="category_id">

                                    <option>Select Category</option>

                                    @foreach ($categories as $category)

                                        <option value="{{ $category->id }}"> {{ $category->category_name }} </option>

                                    @endforeach

                                </select>

                            </div>

                            <div class="mb-3">

                                <label for="subcategory_id" class="form-label">Sub Category</label>

                                <select class="form-select" id="subcategory_id" name="subcategory_id">

                                    <option> </option>

                                </select>

                            </div>

                            <div class="mb-3">

                                <label for="user_id" class="form-label">Writter</label>

                                <select class="form-select" id="user_id" name="user_id">

                                    <option>Select Category</option>

                                    @foreach ($adminuser as $user)

                                        <option value="{{ $user->id }}"> {{ $user->name }} </option>

                                    @endforeach

                                </select>

                            </div>

                            <div class="mb-3 form-group">

                                <label for="news_title" class="form-label">News Title</label>

                                <input type="text" class="form-control" name="news_title" id="news_title" placeholder="1234 Main St">

                            </div>

                            <div class="mb-3 form-group">

                                <label class="form-label">Tags</label>

                                <input type="text" class="selectize-close-btn" name="tags" value="awesome,neat">

                            </div>

                            <div class="mb-3 form-group form-check-primary form-check">

                                <input class="form-check-input" type="checkbox" value="1" id="breaking_news" name="breaking_news" >

                                <label class="form-check-label" for="breaking_news">Breaking News</label>

                            </div>

                            <div class="mb-3 form-group form-check-success form-check">

                                <input class="form-check-input" type="checkbox" value="1" id="top_slider" name="top_slider" >

                                <label class="form-check-label" for="top_slider">Top Slider</label>

                            </div>

                            <div class="mb-3 form-group form-check-danger form-check">

                                <input class="form-check-input" type="checkbox" value="1" id="first_section_three" name="first_section_three" >

                                <label class="form-check-label" for="first_section_three">First Section Three</label>

                            </div>

                            <div class="mb-3 form-group form-check-warning form-check">

                                <input class="form-check-input" type="checkbox" value="1" id="first_section_nine" name="first_section_nine" >

                                <label class="form-check-label" for="first_section_nine">First Section Nine</label>

                            </div>

                            <div class="mb-3 form-group">

                                <label for="image" class="form-label">News Post Picture</label>

                                <input type="file" id="image" name="image" class="form-control">

                            </div>

                            <div class="mb-3 form-group">

                                <img id="showImage" src="{{ url('upload/no_image.jpg') }}" class="img-fluid rounded" width="200" alt="profile-image">

                            </div>

                            <div class="mb-3 form-group">

                                <label for="news_details" class="form-label">News Details</label>

                                <textarea name="news_details" id="mytextarea" cols="30" rows="10"></textarea>

                            </div>

                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Data</button>

                        </form>

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

<script type="text/javascript">

    $(document).ready(function(){

        $('select[name="category_id"]').on('change', function(){

            var category_id = $(this).val();

            if (category_id) {

                $.ajax({

                    url: "{{ url('/subcategory/ajax') }}/"+category_id,
                    type: "GET",
                    dataType: "json",

                    success:function(data){

                        $('select[name="subcategory_id"]').html('');
                        var d =$('select[name="subcategory_id"]').empty();

                        $.each(data, function(key, value){

                            $('select[name="subcategory_id"]').append('<option value="'+ value.id +'"> ' + value.subcategory_name + '</option>');

                        });

                    },

                });

            }

            else{

                alert('danger');

            }

        });

    });

</script>

@endsection
