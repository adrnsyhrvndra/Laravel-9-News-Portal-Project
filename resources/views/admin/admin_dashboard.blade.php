<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8" />

        <title>Dashboard | Adrian News</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />

        <meta content="Coderthemes" name="author" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->

        @php

            $sitesetting =  App\Models\Sitesetting::find(1);

        @endphp

        <link rel="shortcut icon" href="{{ $sitesetting->favicon }}">

        <!-- Plugins css -->

        <link href="{{ asset('backend/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('backend/assets/libs/selectize/css/selectize.bootstrap3.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('backend/assets/libs/mohithg-switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('backend/assets/libs/multiselect/css/multi-select.css') }}" rel="stylesheet" type="text/css" />

        <link href="{{ asset('backend/assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />


        <!-- Bootstrap css -->

        <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- icons -->

        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Head js -->

        <script src="{{ asset('backend/assets/js/head.js') }}"></script>

        <!-- Jquery -->

        <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>

        <!-- Toastr CSS -->

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

        <!-- Datatable CSS -->

        <link href="{{ asset('backend/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('backend/assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />

        <!-- Fontawesome CSS -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" type="text/css">

        <!-- TINY TEXT EDITOR JS -->

        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

        <!-- App css -->

        <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style"/>

        <script>

        tinymce.init({
            selector: '#mytextarea',
            plugins: [
            'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
            'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
            'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange blocks | bold italic backcolor | ' +
            'alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
        });

        </script>

    </head>

    <!-- body start -->
    <body data-layout-mode="default" data-theme="dark" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="dark" data-leftbar-size='default' data-sidebar-user='false'>

        <!-- Begin page -->
        <div id="wrapper">


            <!-- Topbar Start -->

            @include('admin.body.header')

            <!-- ========== Left Sidebar Start ========== -->

            @include('admin.body.sidebar')

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                @yield('admin')

                @include('admin.body.footer')

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>

        <!-- Vendor js -->

        <script src="{{ asset('backend/assets/js/vendor.min.js') }}"></script>

        <!-- Plugins js-->

        <script src="{{ asset('backend/assets/libs/flatpickr/flatpickr.min.js') }}"></script>

        <script src="{{ asset('backend/assets/libs/apexcharts/apexcharts.min.js') }}"></script>

        <script src="{{ asset('backend/assets/libs/selectize/js/standalone/selectize.min.js') }}"></script>

        <!-- Dashboard 1 init js-->

        <script src="{{ asset('backend/assets/js/pages/dashboard-1.init.js') }}"></script>



        <!-- Validate js-->

        <script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>

        <!-- Toastr js-->

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>

            @if(Session::has('message'))

            var type = "{{ Session::get('alert-type','info') }}"

            switch(type){
                case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;

                case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;

                case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;

                case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break;
            }

            @endif

        </script>

        <!-- third party js -->
        <script src="{{ asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>

        <!-- Datatables init -->
        <script src="{{ asset('backend/assets/js/pages/datatables.init.js')}}"></script>

        <!-- Sweet Alert JS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

        <script src="{{ asset('backend/assets/js/code.js') }}"></script>

        <script src="{{ asset('backend/assets/libs/mohithg-switchery/switchery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/multiselect/js/jquery.multi-select.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/select2/js/select2.min.js') }}"></script>

        <script src="{{ asset('backend/assets/libs/devbridge-autocomplete/jquery.autocomplete.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>

        <!-- Init js-->
        <script src="{{ asset('backend/assets/js/pages/form-advanced.init.js') }}"></script>

        <!-- App js-->

        <script src="{{ asset('backend/assets/js/app.min.js') }}"></script>

    </body>

</html>
