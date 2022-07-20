<!DOCTYPE html>

<html lang="en">

<!--begin::Head-->

<head>
    <base href="../../">
    <title>Ini Bukan Project | @yield('title')</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{ env('APP_URL') }}/assets/media/logos/favicon.ico" />    
    <link href="{{ env('APP_URL') }}/assets/font/font.css" rel="stylesheet" type="text/css" />
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" /> -->

    <link href="{{ env('APP_URL') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ env('APP_URL') }}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    
    @yield('css-tabel')
    
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Aside-->
            <div id="kt_aside" class="aside aside-light aside-hoverable" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
                <div class="aside-logo flex-column-auto" id="kt_aside_logo">
                    <!--begin::Logo-->
                    <!--<a href="">
                        <img alt="Logo" src="assets/media/logos/logo-1.svg" class="h-25px logo" />
                    </a>-->
                    <!--end::Logo-->
                </div>
                <div class="aside-menu flex-column-fluid">
                    <div class="hover-scroll-overlay-y my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, kt_aside_menu" data-kt-scroll-offset="{lg: '75px'}">
                        <!--start::Menu-->
                        @include('layout/menu')
                        <!--end::Menu-->
                    </div>
                </div>
            </div>
            <!--end::Aside-->
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!--begin::Header-->
                <div id="kt_header" class="header align-items-stretch">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex align-items-stretch justify-content-between">
                        <!--begin::Aside mobile toggle-->
                        <div class="d-flex align-items-center ms-n2 me-2">
                            <div id="kt_aside_toggle" class="aside-toggle btn btn-icon w-auto px-0 btn-active-color-primary" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
                                        <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
                            <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
                                        <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                        </div>
                        <div class="d-flex align-items-center ms-1 ms-lg-3">
                            <div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M128 32H32C14.31 32 0 46.31 0 64v96c0 17.69 14.31 32 32 32s32-14.31 32-32V96h64c17.69 0 32-14.31 32-32S145.7 32 128 32zM416 32h-96c-17.69 0-32 14.31-32 32s14.31 32 32 32h64v64c0 17.69 14.31 32 32 32s32-14.31 32-32V64C448 46.31 433.7 32 416 32zM128 416H64v-64c0-17.69-14.31-32-32-32s-32 14.31-32 32v96c0 17.69 14.31 32 32 32h96c17.69 0 32-14.31 32-32S145.7 416 128 416zM416 320c-17.69 0-32 14.31-32 32v64h-64c-17.69 0-32 14.31-32 32s14.31 32 32 32h96c17.69 0 32-14.31 32-32v-96C448 334.3 433.7 320 416 320z" fill="currentColor" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-stretch ms-1 ms-lg-3">
                            <div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
                                <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
                                    <div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px">
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                                <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
                                    <div data-kt-search-element="wrapper">
                                        <form data-kt-search-element="form" class="w-100 position-relative" autocomplete="off">
                                            <span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <input type="text" class="search-input form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
                                                <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                            </span>
                                            <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
                                                <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                                        <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                                    </svg>
                                                </span>
                                            </span>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--end::Aside mobile toggle-->
                        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                        </div>
                        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                            <div class="d-flex">
                            </div>
                            <!--begin::Navbar-->
                            <div class="d-flex align-items-stretch" id="kt_header_nav">
                                <div class="header-menu align-items-center text-center ms-1 ms-lg-3 mt-2" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                                    <h3>Instalasi Pengelola Data Elektronik Dan Pusat Data</h3>
                                </div>
                            </div>
                            <!--end::Navbar-->
                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-stretch flex-shrink-0">
                                <!--begin::Notifications-->
                                <div class="d-flex align-items-center ms-1 ms-lg-3">
                                    <div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                        <span class="svg-icon svg-icon-2qx svg-icon-gray-500 position-absolute top-50 translate-middle-y ms-0">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="currentColor" />
                                                <path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
                                        <div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/patterns/pattern-1.jpg')">
                                            <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
                                                <span class="fs-8 opacity-75 ps-3">24</span>
                                            </h3>
                                        </div>
                                        <div>
                                            <div class="scroll-y mh-325px my-5 px-8">
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-success me-4">200 OK</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-bold">New order</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">Just now</span>
                                                </div>
                                                <div class="d-flex flex-stack py-4">
                                                    <div class="d-flex align-items-center me-2">
                                                        <span class="w-70px badge badge-light-danger me-4">500 ERR</span>
                                                        <a href="#" class="text-gray-800 text-hover-primary fw-bold">New customer</a>
                                                    </div>
                                                    <span class="badge badge-light fs-8">2 hrs</span>
                                                </div>
                                            </div>
                                            <div class="py-3 text-center border-top">
                                                <a href="../../demo1/dist/pages/user-profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
                                                    <span class="svg-icon svg-icon-5">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
                                                            <path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Notifications-->
                                <!--begin::Account-->
                                <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                                    <div class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                        <span class="svg-icon svg-icon-2qx">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="currentColor" />
                                                <rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="currentColor" />
                                            </svg>
                                        </span>
                                    </div>
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <div class="menu-content d-flex align-items-center px-3">
                                                <div class="symbol symbol-50px me-5">
                                                    <img alt="Logo" src="#" />
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                                                        <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
                                                    </div>
                                                    <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="separator my-2"></div>
                                        <div class="menu-item px-5">
                                            <a href="../../demo1/dist/account/overview.html" class="menu-link px-5">My Profile</a>
                                        </div>
                                        <div class="menu-item px-5">
                                            <a href="../../demo1/dist/apps/projects/list.html" class="menu-link px-5">
                                                <span class="menu-text">My Projects</span>
                                                <span class="menu-badge">
                                                    <span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="menu-item px-5 my-1">
                                            <a href="../../demo1/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
                                        </div>
                                        <div class="menu-item px-5">
                                            <a href="../../demo1/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--begin::Content-->
                <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                    @yield('content')
                </div>
                <!--end::Content-->

                <!--begin::Footer-->
                <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <div class="text-dark order-2 order-md-1">
                        </div>
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-bold me-1">2022©</span>
                            <a href="" target="_blank" class="text-gray-800 text-hover-primary">IPDE</a>
                        </div>
                    </div>
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->

    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
            </svg>
        </span>
    </div>
    <!--end::Scrolltop-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <script src="{{ env('APP_URL') }}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{ env('APP_URL') }}/assets/js/scripts.bundle.js"></script>
    <script src="{{ env('APP_URL') }}/assets/plugins/custom/datatables/datatables.bundle.js"></script>
    
	@yield('script-js')
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>