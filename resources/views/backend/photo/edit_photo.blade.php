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

                        <h4 class="header-title">Edit Multi Photo</h4>

                        <p class="text-muted font-13">More complex layouts can also be created with the grid system.</p>

                        <form method="post" action="{{ route('update.photo.gallery') }}" id="myForm" enctype="multipart/form-data">

                            @csrf

                            <input type="hidden" name="id" value="{{ $photogallery->id }}">

                            <div class="mb-3 form-group">

                                <label for="multi_image" class="form-label">Multi Photo Gallery</label>

                                <input id="multiImg" type="file" class="form-control" name="multi_image" id="multi_image" placeholder="1234 Main St">

                            </div>

                            <div class="mb-3 form-group">

                                <label for="multi_image" class="form-label"></label>

                                <img class="img-thumbnail" width="500" src="{{ asset($photogallery->photo_gallery) }}" alt="" srcset="">

                            </div>

                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Data</button>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script>

    $(document).ready(function(){

     $('#multiImg').on('change', function(){ //on file input change

        if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
        {
            var data = $(this)[0].files; //this file data

            $.each(data, function(index, file){ //loop though each file
                if(/(\.|\/)(gif|jpe?g|png|webp)$/i.test(file.type)){ //check supported file type
                    var fRead = new FileReader(); //new filereader
                    fRead.onload = (function(file){ //trigger function on successful read
                    return function(e) {
                        var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(100)
                    .height(80); //create image element
                        $('#preview_img').append(img); //append image to output element
                    };
                    })(file);
                    fRead.readAsDataURL(file); //URL representing the file's data.
                }
            });

        }else{
            alert("Your browser doesn't support File API!"); //if File API is absent
        }
        });
    });

</script>

<script type="text/javascript">

    $(document).ready(function (){

        $('#myForm').validate({

            rules: {

                multi_image[]: {

                    required : true,

                },

            },

            messages :{

                multi_image[]: {

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
