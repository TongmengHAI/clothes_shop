<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('site-title')</title>
    <meta name="description" content="" />
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico" />
    <!-- Fonts -->
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}" />
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin />
    <link
        href="{{ url('https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap') }}"
        rel="stylesheet" />
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ url('backend/vendor/fonts/boxicons.css') }}" />
    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('backend/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ url('backend/vendor/css/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ url('backend/css/demo.css') }}" />

    {{-- Select2 --}}
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css') }}">

    {{-- Jquery --}}
    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js') }}"></script>

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ url('backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <script src="{{ url('backend/vendor/js/helpers.js') }}"></script>
    <script src="{{ url('backend/js/config.js') }}"></script>

    {{-- sweetalert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="{{url('assets/logo/'.$header_logo->thumbnail)}}" width="100" alt="">
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item">
                        <a href="/admin" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <!-- Layouts -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-bolt-circle"></i>
                            <div data-i18n="Layouts">Logo</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="/dashboard/view_logo" class="menu-link">
                                    <div data-i18n="Without menu">View Logo</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="/dashboard/add_logo" class="menu-link">
                                    <div data-i18n="Without menu">Add Logo</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Layouts -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-bolt-circle"></i>
                            <div data-i18n="Layouts">Products</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{route('viewProduct')}}" class="menu-link">
                                    <div data-i18n="Without menu">View Product</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('goAddProduct')}}" class="menu-link">
                                    <div data-i18n="Without menu">Add Product</div>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <!-- Layouts -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-bolt-circle"></i>
                            <div data-i18n="Layouts">Category</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{route('viewCategory')}}" class="menu-link">
                                    <div data-i18n="Without menu">View Category</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('goAddCategory')}}" class="menu-link">
                                    <div data-i18n="Without menu">Add Category</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    

                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-bolt-circle"></i>
                            <div data-i18n="Layouts">News Activity</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{route('viewNews')}}" class="menu-link">
                                    <div data-i18n="Without menu">View News</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{route('goAddNews')}}" class="menu-link">
                                    <div data-i18n="Without menu">Add News</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->

                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <h4 class="page-main-title m-0 fw-bold">
                                @yield('page-main-title')
                            </h4>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{url('assets/user/'.Auth()->user()->profile)}}" alt
                                            class="w-px-40 object-fit-cover rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="{{url('assets/user/'.Auth()->user()->profile)}}" alt
                                                            class="w-px-40 object-fit-cover rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">{{Auth()->user()->name}}</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="/logout">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>

                <!-- / Navbar -->

                @yield('content')

            </div>
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    {{-- <script src="{{url('backend/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{url('backend/vendor/libs/popper/popper.js')}}"></script> --}}
    <script src="{{ url('backend/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ url('backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>

    <script src="{{ url('backend/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->


    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ url('backend/js/main.js') }}"></script>
    <script src="{{ url('backend/js/theme.js') }}"></script>

    {{-- select2 --}}
    <script src="{{ url('https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js') }}"></script>

    <!-- Page JS -->
    <script src="{{ url('backend/js/form-basic-inputs.js') }}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="{{ url('https://buttons.github.io/buttons.js') }}"></script>
</body>

</html>
