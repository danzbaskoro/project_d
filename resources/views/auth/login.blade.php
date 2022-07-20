<!DOCTYPE html>
<html lang="en">

<head>

    <title>Ini Bukan Project Login</title>
    <meta name="description" content="Ini Bukan Project Login">

    <link href="/assets/font/font.css" rel="stylesheet" type="text/css">
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="/assets/media/logos/logo.ico">

</head>

<body id="kt_body" class="bg-body">
    <div class="d-flex flex-column flex-root">
        <div
            class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed">
            <div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
                <a href="#" class="mb-12">
                    <img alt="Logo" src="assets/media/logos/logo-lara.png" class="h-100px">
                </a>
                <div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
                    <div class="text-center mb-10">
                        <h2 class="text-dark mb-3">Tes Login</h2>
                        <div class="text-dark fw-bold fs-5 mb-2">Ini Bukan Project Tahun 2022</div>
                        <div class="fw-bold text-dark fs-6">Formasi : Belajar Coding Laravel</div>
                    </div>

                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                    @endif

                    @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div> 
                    @endif

                    <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate"
                        id="login_form" action="/login" method="POST">
                        @csrf
                        {{-- <div class="fv-row mb-10 fv-plugins-icon-container">
                            <label class="form-label fs-6 fw-bolder text-dark">NIK</label>
                            <input class="form-control form-control-lg form-control-solid" type="number" id="nik"
                                name="nik" autocomplete="off">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div> --}}
                        <div class="fv-row mb-10 fv-plugins-icon-container">
                            <div class="d-flex flex-stack mb-2">
                                <label class="form-label fw-bolder text-dark fs-6 mb-0" for="username">Username</label>
                            </div>
                            <input class="form-control form-control-lg form-control-solid" type="text"
                                name="username" id="username" autocomplete="off" autofocus required value="{{ old('username') }}">
                            {{-- <div class="fv-plugins-message-container invalid-feedback"></div> --}}
                        </div>
                        <div class="fv-row mb-10 fv-plugins-icon-container">
                            <div class="d-flex flex-stack mb-2">
                                <label class="form-label fw-bolder text-dark fs-6 mb-0" for="password">Password</label>
                            </div>
                            <input class="form-control form-control-lg form-control-solid" type="password"
                                name="password" id="password" autocomplete="off" required>
                            {{-- <div class="fv-plugins-message-container invalid-feedback"></div> --}}
                        </div>
                        <div class="text-center">
                            <button type="submit" id="" class="btn btn-lg btn-custom1 w-100 mb-5">
                                <span class="indicator-label">Login</span>
                                {{-- <span class="indicator-progress">
                                    Mohon menunggu...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span> --}}
                            </button>
                        </div>
                        <div></div>
                    </form>
                </div>
            </div>
            {{-- <div class="d-flex flex-center flex-column-auto p-10">
                <div class="d-flex align-items-center fw-bold fs-6">
                </div>
            </div> --}}
        </div>
    </div>
    {{-- <script>
        var hostUrl = "assets/";
    </script> --}}
    <script src="/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/assets/js/scripts.bundle.js"></script>
    
    {{-- <script type="text/javascript" src="/assets/js/tools/Cookies.js?v=0422132146"></script> --}}

    {{-- <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1002"></defs>
        <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
        <path id="SvgjsPath1004" d="M0 0 "></path>
    </svg> --}}
</body>

</html>
