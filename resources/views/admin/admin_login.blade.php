<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="utf-8" />

        <title>Login Page | Adrian News</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />

        <meta content="Coderthemes" name="author" />

        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->

        <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.ico')}}">

		<!-- Bootstrap css -->

		<link href="{{ asset('backend/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

		<!-- App css -->

		<link href="{{ asset('backend/assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-style"/>

		<!-- icons -->

		<link href="{{ asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />

		<!-- Head js -->

		<script src="{{ asset('backend/assets/js/head.js')}}"></script>

        <!-- Toastr CSS -->

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    </head>

    <body class="authentication-bg authentication-bg-pattern">

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-4">
                        <div class="card bg-pattern">

                            <div class="card-body p-4">

                                <div class="text-center w-75 m-auto">
                                    <div class="auth-logo">
                                        <a href="index.html" class="logo logo-dark text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('backend/assets/images/logo-dark.png')}}" alt="" height="22">
                                            </span>
                                        </a>

                                        <a href="index.html" class="logo logo-light text-center">
                                            <span class="logo-lg">
                                                <img src="{{ asset('backend/assets/images/logo-light.png')}}" alt="" height="22">
                                            </span>
                                        </a>
                                    </div>
                                    <p class="text-muted mb-4 mt-3">Enter your email address and password to access admin panel.</p>
                                </div>

                                <form method="POST" action="{{ route('login') }}">

                                    @csrf

                                    <div class="mb-3">

                                        <label for="email" class="form-label">Email address</label>

                                        <input class="form-control" type="email" id="email" name="email" required="" placeholder="Enter your email">

                                    </div>

                                    <div class="mb-3">

                                        <label for="password" class="form-label">Password</label>

                                        <div class="input-group input-group-merge">

                                            <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password">

                                            <div class="input-group-text" data-password="false">

                                                <span class="password-eye"></span>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="mb-3">

                                        <div class="form-check">

                                            <input id="remember_me" type="checkbox" class="form-check-input" name="remember" checked>

                                            <label class="form-check-label" for="checkbox-signin">Remember me</label>

                                        </div>

                                    </div>

                                    <div class="text-center d-grid">

                                        <button class="btn btn-primary" type="submit"> Log In </button>

                                    </div>

                                </form>

                                <div class="text-center">
                                    <h5 class="mt-3 text-muted">Sign in with</h5>
                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p> <a href="auth-recoverpw.html" class="text-white-50 ms-1">Forgot your password?</a></p>
                                <p class="text-white-50">Don't have an account? <a href="auth-register.html" class="text-white ms-1"><b>Sign Up</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->


        <footer class="footer footer-alt">

            2023 - <script>document.write(new Date().getFullYear())</script> &copy; UBold theme by <a href="" class="text-white-50">Coderthemes</a>

        </footer>

        <!-- Vendor js -->

        <script src="{{ asset('backend/assets/js/vendor.min.js')}}"></script>

        <!-- App js -->

        <script src="{{ asset('backend/assets/js/app.min.js')}}"></script>

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

    </body>

</html>
