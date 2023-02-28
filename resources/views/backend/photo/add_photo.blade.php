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

                                    <h3 class="text-dark mt-1"><span data-plugin="counterup">{{ count($photo) }}</span></h3>

                                    <p class="text-muted mb-1 text-truncate">Total Of Photo Gallery</p>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="card">

                    <div class="card-body">

                        <h4 class="header-title">Add Multi Photo</h4>

                        <p class="text-muted font-13">More complex layouts can also be created with the grid system.</p>

                        <form method="post" action="{{ route('store.photo.gallery') }}" id="myForm" enctype="multipart/form-data">

                            @csrf

                            <div class="mb-3 form-group">

                                <label for="multi_image" class="form-label">Multi Photo Gallery</label>

                                <input id="multiImg" type="file" class="form-control" name="multi_image[]" id="multi_image" placeholder="1234 Main St" multiple>

                                <div class="row" id="preview_img"></div>

                            </div>

                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save Data</button>

                        </form>

                    </div>

                </div>

            </div>

            <div class="col-6">

                <div class="card">

                    <div class="card-body">

                        <h4 class="header-title">All Photo Gallery Data</h4>

                        <table id="scroll-vertical-datatable" class="table dt-responsive nowrap w-100">

                            <thead>

                                <tr>

                                    <th>No</th>

                                    <th>Image</th>

                                    <th>Date</th>

                                </tr>

                            </thead>


                            <tbody>

                                @foreach ($photo as $key => $item)

                                    <tr>

                                        <td>{{ $key+1 }}</td>

                                        <td>

                                            <img class="img-thumbnail" width="100" src="{{ asset($item->photo_gallery) }}" alt="" srcset="">

                                        </td>

                                        <td>{{ $item->post_date }}</td>

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
