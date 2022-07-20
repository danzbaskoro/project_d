<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
    <base href="../../">
    <title>SIMRS PDE | Halaman Login</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{ env('APP_URL') }}/assets/media/logos/favicon.ico" />
    <link href="{{ env('APP_URL') }}/assets/font/font.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> -->

    {{-- <link href="{{ env('APP_URL') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" /> --}}
    <link href="{{ env('APP_URL') }}/assets/css/login2/style-login2.css" rel="stylesheet" type="text/css" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

</head>
<!--end::Head-->

<!--begin::Body-->

<body class="header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed">
    <!--begin::Main-->
    <!--begin::Root-->
    {{-- <div class="d-flex flex-column flex-root"> --}}
    <!--begin::Page-->
    {{-- <div class="page d-flex flex-row flex-column-fluid"> --}}


    <!--begin::Wrapper-->


    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row">
                            <img src="assets/media/logos/logo-RSJD.png" class="logo">
                        </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <img src="assets/media/img/pict1.jpg" class="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="card2 card border-0 px-4 py-5 mt-5">

                        <div class="row mb-4 px-3">
                            {{-- <h6 class="mb-0 mr-4 mt-2">Sign in with</h6>
                                            <div class="facebook text-center mr-3">
                                                <div class="fa fa-facebook"></div>
                                            </div>
                                            <div class="twitter text-center mr-3">
                                                <div class="fa fa-twitter"></div>
                                            </div>
                                            <div class="linkedin text-center mr-3">
                                                <div class="fa fa-linkedin"></div>
                                            </div> --}}
                        </div>
                        <div class="row px-3 mb-4">
                            {{-- <div class="line"></div>
                                            <small class="or text-center">Or</small>
                                            <div class="line"></div> --}}
                        </div>
                        <form method="POST" action="/login2">
                            @csrf
                            <div class="row px-3 ">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Email Address</h6>
                                </label>
                                <input class="mb-4" type="text" name="email"
                                    placeholder="Enter a valid email address" value={{ old('email') }}>
                            </div>
                            <div class="row px-3 ">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Password</h6>
                                </label>
                                <input type="password" name="password" placeholder="Enter password">
                            </div>
                            <div class="row px-3 mb-4">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    {{-- <input id="chk1" type="checkbox" name="chk" class="custom-control-input">
                                <label for="chk1" class="custom-control-label text-sm">Remember
                                    me</label> --}}
                                </div>
                                <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                            </div>
                            <div class="row mb-3 px-3">
                                <button type="submit" class="btn bg-primary text-center text-light"><i
                                        class="bi bi-box-arrow-in-right"></i> &nbsp Login</button>

                            </div>
                            {{-- <div class="row mb-4 px-3">
                                            <small class="font-weight-bold">Don't have an account? <a class="text-danger ">Register</a></small>
                                        </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row">
                <small class="copyright">2022 &copy; IPDE</small>
                {{-- <div class="social-contact ml-4 ml-sm-auto">
                                    <span class="fa fa-facebook mr-4 text-sm"></span>
                                    <span class="fa fa-google-plus mr-4 text-sm"></span>
                                    <span class="fa fa-linkedin mr-4 text-sm"></span>
                                    <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span>
                                </div> --}}
            </div>
        </div>
    </div>



    <!--begin::Footer-->
    {{-- <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <div
                        class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="text-dark order-2 order-md-1">
                        </div>
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-bold me-1">2022©</span>
                            <a href="" target="_blank" class="text-gray-800 text-hover-primary">IPDE</a>
                        </div>
                    </div>
                </div> --}}
    <!--end::Footer-->

    <!--end::Wrapper-->
    {{-- </div> --}}
    <!--end::Page-->
    {{-- </div> --}}
    <!--end::Root-->

    <!--begin::Javascript-->
    {{-- <script>
        var hostUrl = "assets/";
    </script> --}}
    {{-- <script src="{{ env('APP_URL') }}/assets/plugins/global/plugins.bundle.js"></script> --}}
    {{-- <script src="{{ env('APP_URL') }}/assets/js/scripts.bundle.js"></script> --}}
    {{-- <script src="{{ env('APP_URL') }}/assets/plugins/custom/datatables/datatables.bundle.js"></script> --}}

    <script src="{{ env('APP_URL') }}/assets/js/login2/bootstrap.bundle.min.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/login2/jquery.min.js"></script>

    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
