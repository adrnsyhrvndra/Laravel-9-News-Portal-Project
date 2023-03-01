@extends('admin.admin_dashboard')

@section('admin')

<style>

    .form-check{

        text-transform: capitalize;

    }

</style>

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

                        <h4 class="header-title">Add Permission</h4>

                        <p class="text-muted font-13">More complex layouts can also be created with the grid system.</p>

                        <form method="post" action="{{ route('store.roles.permission') }}" id="myForm">

                            @csrf

                            <div class="mb-3 form-group">

                                <label for="role" class="form-label">All Roles</label>

                                <select class="form-select" id="role" name="role">

                                    <option>Select One Roles</option>

                                    @foreach ($roles as $role)

                                        <option value="{{ $role->id }}">{{ $role->name }}</option>

                                    @endforeach

                                </select>

                            </div>

                            <br>

                            <div class="form-group form-check mb-3 form-check-primary">
                                <input class="form-check-input" type="checkbox" id="selectall">
                                <label class="form-check-label" for="selectall">Select All</label>
                            </div>

                            @foreach ($permission_groups as $group)

                                <div class="row">

                                    <div class="col-3">

                                        <br>

                                        <div class="form-group form-check mb-3 form-check-primary">
                                            <input class="form-check-input" type="checkbox" value="" id="customckeck1">
                                            <label class="form-check-label" for="customckeck1">{{ $group->group_name }}</label>
                                        </div>

                                    </div>

                                    @php

                                        $permission = App\Models\User::getpermissionByGroupName($group->group_name);

                                    @endphp


                                    <div class="col-9">

                                        <br>

                                        @foreach ($permission as $permissionitem)

                                            <div class="form-group form-check mb-3 form-check-primary">

                                                <input class="form-check-input" name="permission[]" type="checkbox" value="{{ $permissionitem->id }}" id="customckeck{{ $permissionitem->id }}">

                                                <label class="form-check-label" for="customckeck{{ $permissionitem->id }}">{{ $permissionitem->name }}</label>

                                            </div>

                                        @endforeach

                                    </div>

                                </div>

                            @endforeach

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

<script>

    $('#selectall').click(function(){

        if ($(this).is(':checked')) {

            $('input[type = checkbox]').prop('checked',true);

        } else{

            $('input[type = checkbox]').prop('checked',false);

        }

    });

</script>

@endsection
