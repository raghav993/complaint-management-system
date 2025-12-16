<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard | Complaint Management System</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.jpg') }}">

    <!-- Theme Config Js -->
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <!-- Vendor css -->
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css">
</head>

<body>
    <div id="app">
        <div class="wrapper">
            <!-- Sidenav Menu Start -->
            <div class="sidenav-menu">
                <!-- Brand Logo -->
                <a href="{{ url('/admin/dashboard') }}" class="logo">
                    <span class="logo-light">
                        <span class="logo-lg w-50"><img src="{{ asset('assets/images/logo.jpg') }}" alt="logo"
                                ></span>
                        <span class="logo-sm text-center  w-50"><img src="{{ asset('assets/images/logo.jpg') }}"
                                alt="small logo" ></span>
                    </span>

                    <span class="logo-dark">
                        <span class="logo-lg  w-50"><img src="{{ asset('assets/images/logo.jpg') }}" alt="dark logo"
                                ></span>
                        <span class="logo-sm text-center  w-50"><img src="{{ asset('assets/images/logo.jpg') }}"
                                alt="small logo" ></span>
                    </span>
                </a>

                <!-- Sidebar Hover Menu Toggle Button -->
                <button class="button-sm-hover">
                    <i class="ti ti-circle align-middle"></i>
                </button>

                <!-- Full Sidebar Menu Close Button -->
                <button class="button-close-fullsidebar">
                    <i class="ti ti-x align-middle"></i>
                </button>

                <div data-simplebar>
                    <!-- Sidenav Menu -->
                    <ul class="side-nav">
                        <!-- Dashboard -->
                        <li class="side-nav-item">
                            <a href="{{ url('/admin/dashboard') }}"
                                class="side-nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                                <span class="menu-icon"><i class="ti ti-dashboard"></i></span>
                                <span class="menu-text">Dashboard</span>
                                <span class="badge bg-success rounded-pill">5</span>
                            </a>
                        </li>

                        <hr>

                        <!-- User Management -->
                        <li class="side-nav-item">
                            <a href="{{ url('/admin/users') }}"
                                class="side-nav-link {{ request()->is('admin/users*') ? 'active' : '' }}">
                                <span class="menu-icon"><i class="ti ti-users"></i></span>
                                <span class="menu-text">User Management</span>
                            </a>
                        </li>

                         <!-- Advocate Management -->
                        <li class="side-nav-item">
                            <a href="{{ url('/admin/advocates') }}"
                                class="side-nav-link {{ request()->is('admin/advocates*') ? 'active' : '' }}">
                                <span class="menu-icon"><i class="ti ti-users"></i></span>
                                <span class="menu-text">Advocate Management</span>
                            </a>
                        </li>

                        <!-- Token Management -->
                        <li class="side-nav-item">
                            <a href="{{ url('/admin/tokens') }}"
                                class="side-nav-link {{ request()->is('admin/tokens*') ? 'active' : '' }}">
                                <span class="menu-icon"><i class="ti ti-key"></i></span>
                                <span class="menu-text">Token Management</span>
                            </a>
                        </li>

                        <!-- Blocks Management -->
                        <li class="side-nav-item">
                            <a href="{{ url('/admin/counters/',) }}"
                                class="side-nav-link {{ request()->is('admin/counters*') ? 'active' : '' }}">
                                <span class="menu-icon"><i class="ti ti-building"></i></span>
                                <span class="menu-text">Counter Management</span>
                            </a>
                        </li>

                        <!-- Display Board Settings -->
                        <li class="side-nav-item">
                            <a href="{{ url('admin/display-board') }}"
                                class="side-nav-link {{ request()->is('admin/display-board*') ? 'active' : '' }}">
                                <span class="menu-icon"><i class="ti ti-settings"></i></span>
                                <span class="menu-text">Display Board</span>
                            </a>
                        </li>

                        <!-- Token Assignment -->
                        <li class="side-nav-item">
                            <a href="{{ route('admin.token.assign.page') }}"
                                class="side-nav-link {{ request()->is('admin.token.assign.page*') ? 'active' : '' }}">
                                <span class="menu-icon"><i class="ti ti-asset"></i></span>
                                <span class="menu-text">Token Assignment</span>
                            </a>
                        </li>
                        <li class="side-nav-item">
                            <a href="{{ route('admin.reports.completed') }}" class="side-nav-link">
                                <span class="menu-icon"><i class="ti ti-asset"></i></span>
                                <span class="menu-text">Reports</span>
                            </a>
                        </li>
                    </ul>

                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Sidenav Menu End -->
            <!-- Topbar Start -->
            <header class="app-topbar">
                <div class="page-container topbar-menu">
                    <div class="d-flex align-items-center gap-2">

                        <!-- Brand Logo -->
                        <a href="{{route('dashboard')}}" class="logo">
                            <span class="logo-light">
                                <span class="logo-lg"><img src="assets/images/logo.jpg" alt="logo"></span>
                                <span class="logo-sm"><img src="assets/images/logo.jpg" alt="small logo"></span>
                            </span>

                            <span class="logo-dark">
                                <span class="logo-lg"><img src="assets/images/logo.jpg" alt="dark logo"></span>
                                <span class="logo-sm"><img src="assets/images/logo.jpg" alt="small logo"></span>
                            </span>
                        </a>

                        <!-- Sidebar Menu Toggle Button -->
                        <button class="sidenav-toggle-button btn btn-secondary btn-icon">
                            <i class="ti ti-menu-deep fs-24"></i>
                        </button>

                        <!-- Horizontal Menu Toggle Button -->
                        <button class="topnav-toggle-button" data-bs-toggle="collapse"
                            data-bs-target="#topnav-menu-content">
                            <i class="ti ti-menu-deep fs-22"></i>
                        </button>

                        <!-- Button Trigger Search Modal -->
                        <div class="topbar-search text-muted d-none d-xl-flex gap-2 align-items-center"
                            data-bs-toggle="modal" data-bs-target="#searchModal" type="button">
                            <i class="ti ti-search fs-18"></i>
                            <span class="me-2">Search something..</span>
                            {{-- <button type="submit" class="ms-auto btn btn-sm btn-primary shadow-none">⌘</span> --}}
                        </div>

                    </div>

                    <div class="d-flex align-items-center gap-2">
                        <!-- Search for small devices -->
                        <div class="topbar-item d-flex d-xl-none">
                            <button class="topbar-link btn btn-outline-primary btn-icon" data-bs-toggle="modal"
                                data-bs-target="#searchModal" type="button">
                                <i class="ti ti-search fs-22"></i>
                            </button>
                        </div>

                        <!-- Notification Dropdown -->
                        <div class="topbar-item">
                            <div class="dropdown">
                                <button
                                    class="topbar-link btn btn-outline-primary btn-icon dropdown-toggle drop-arrow-none"
                                    data-bs-toggle="dropdown" data-bs-offset="0,24" type="button"
                                    data-bs-auto-close="outside" aria-haspopup="false" aria-expanded="false">
                                    <i class="ti ti-bell animate-ring fs-22"></i>
                                    <span class="noti-icon-badge"></span>
                                </button>

                                <div class="dropdown-menu p-0 dropdown-menu-end dropdown-menu-lg"
                                    style="min-height: 300px;">
                                    <div class="p-3 border-bottom border-dashed">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fs-16 fw-semibold"> Notifications</h6>
                                            </div>
                                            <div class="col-auto">
                                                <div class="dropdown">
                                                    <a href="#"
                                                        class="dropdown-toggle drop-arrow-none link-dark"
                                                        data-bs-toggle="dropdown" data-bs-offset="0,15"
                                                        aria-expanded="false">
                                                        <i class="ti ti-settings fs-22 align-middle"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Mark as
                                                            Read</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Delete
                                                            All</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Do not
                                                            Disturb</a>
                                                        <!-- item-->
                                                        <a href="javascript:void(0);" class="dropdown-item">Other
                                                            Settings</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="position-relative z-2 rounded-0" style="max-height: 300px;"
                                        data-simplebar>
                                        <!-- item-->
                                        <div class="dropdown-item notification-item py-2 text-wrap active"
                                            id="notification-1">
                                            <span class="d-flex align-items-center">
                                                <span class="me-3 position-relative flex-shrink-0">
                                                    <img src="assets/images/users/avatar-2.jpg"
                                                        class="avatar-md rounded-circle" alt="" />
                                                    <span
                                                        class="position-absolute rounded-pill bg-danger notification-badge">
                                                        <i class="ti ti-message-circle"></i>
                                                        <span class="visually-hidden">unread messages</span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Glady Haid</span> commented on
                                                    <span class="fw-medium text-body">paces admin status</span>
                                                    <br />
                                                    <span class="fs-12">25m ago</span>
                                                </span>
                                                <span class="notification-item-close">
                                                    <button type="button"
                                                        class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                        data-dismissible="#notification-1">
                                                        <i class="ti ti-x fs-16"></i>
                                                    </button>
                                                </span>
                                            </span>
                                        </div>

                                        <!-- item-->
                                        <div class="dropdown-item notification-item py-2 text-wrap"
                                            id="notification-2">
                                            <span class="d-flex align-items-center">
                                                <span class="me-3 position-relative flex-shrink-0">
                                                    <img src="assets/images/users/avatar-4.jpg"
                                                        class="avatar-md rounded-circle" alt="" />
                                                    <span
                                                        class="position-absolute rounded-pill bg-info notification-badge">
                                                        <i class="ti ti-currency-dollar"></i>
                                                        <span class="visually-hidden">unread messages</span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Tommy Berry</span> donated <span
                                                        class="text-success">$100.00</span> for <span
                                                        class="fw-medium text-body">Carbon removal program</span>
                                                    <br />
                                                    <span class="fs-12">58m ago</span>
                                                </span>
                                                <span class="notification-item-close">
                                                    <button type="button"
                                                        class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                        data-dismissible="#notification-2">
                                                        <i class="ti ti-x fs-16"></i>
                                                    </button>
                                                </span>
                                            </span>
                                        </div>

                                        <!-- item-->
                                        <div class="dropdown-item notification-item py-2 text-wrap"
                                            id="notification-3">
                                            <span class="d-flex align-items-center">
                                                <div class="avatar-md flex-shrink-0 me-3">
                                                    <span
                                                        class="avatar-title bg-success-subtle text-success rounded-circle fs-22">
                                                        <iconify-icon
                                                            icon="solar:wallet-money-bold-duotone"></iconify-icon>
                                                    </span>
                                                </div>
                                                <span class="flex-grow-1 text-muted">
                                                    You withdraw a <span class="fw-medium text-body">$500</span> by
                                                    <span class="fw-medium text-body">New York ATM</span>
                                                    <br />
                                                    <span class="fs-12">2h ago</span>
                                                </span>
                                                <span class="notification-item-close">
                                                    <button type="button"
                                                        class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                        data-dismissible="#notification-3">
                                                        <i class="ti ti-x fs-16"></i>
                                                    </button>
                                                </span>
                                            </span>
                                        </div>

                                        <!-- item-->
                                        <div class="dropdown-item notification-item py-2 text-wrap"
                                            id="notification-4">
                                            <span class="d-flex align-items-center">
                                                <span class="me-3 position-relative flex-shrink-0">
                                                    <img src="assets/images/users/avatar-7.jpg"
                                                        class="avatar-md rounded-circle" alt="" />
                                                    <span
                                                        class="position-absolute rounded-pill bg-secondary notification-badge">
                                                        <i class="ti ti-plus"></i>
                                                        <span class="visually-hidden">unread messages</span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Richard Allen</span> followed you
                                                    in <span class="fw-medium text-body">Facebook</span>
                                                    <br />
                                                    <span class="fs-12">3h ago</span>
                                                </span>
                                                <span class="notification-item-close">
                                                    <button type="button"
                                                        class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                        data-dismissible="#notification-4">
                                                        <i class="ti ti-x fs-16"></i>
                                                    </button>
                                                </span>
                                            </span>
                                        </div>

                                        <!-- item-->
                                        <div class="dropdown-item notification-item py-2 text-wrap"
                                            id="notification-5">
                                            <span class="d-flex align-items-center">
                                                <span class="me-3 position-relative flex-shrink-0">
                                                    <img src="assets/images/users/avatar-10.jpg"
                                                        class="avatar-md rounded-circle" alt="" />
                                                    <span
                                                        class="position-absolute rounded-pill bg-danger notification-badge">
                                                        <i class="ti ti-heart-filled"></i>
                                                        <span class="visually-hidden">unread messages</span>
                                                    </span>
                                                </span>
                                                <span class="flex-grow-1 text-muted">
                                                    <span class="fw-medium text-body">Victor Collier</span> liked you
                                                    recent photo in <span class="fw-medium text-body">Instagram</span>
                                                    <br />
                                                    <span class="fs-12">10h ago</span>
                                                </span>
                                                <span class="notification-item-close">
                                                    <button type="button"
                                                        class="btn btn-ghost-danger rounded-circle btn-sm btn-icon"
                                                        data-dismissible="#notification-5">
                                                        <i class="ti ti-x fs-16"></i>
                                                    </button>
                                                </span>
                                            </span>
                                        </div>
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);"
                                        class="dropdown-item notification-item text-center text-reset text-decoration-underline link-offset-2 fw-bold notify-item border-top border-light py-2">
                                        View All
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Button Trigger Customizer Offcanvas -->
                        <div class="topbar-item d-none d-sm-flex">
                            <button class="topbar-link btn btn-outline-primary btn-icon" data-bs-toggle="offcanvas"
                                data-bs-target="#theme-settings-offcanvas" type="button">
                                <i class="ti ti-settings fs-22"></i>
                            </button>
                        </div>

                        <!-- Light/Dark Mode Button -->
                        <div class="topbar-item d-none d-sm-flex">
                            <button class="topbar-link btn btn-outline-primary btn-icon" id="light-dark-mode"
                                type="button">
                                <i class="ti ti-moon fs-22"></i>
                            </button>
                        </div>

                        <!-- User Dropdown -->
                        <div class="topbar-item">
                            <div class="dropdown">
                                <a class="topbar-link btn btn-outline-primary dropdown-toggle drop-arrow-none"
                                    data-bs-toggle="dropdown" data-bs-offset="0,22" type="button"
                                    aria-haspopup="false" aria-expanded="false">
                                    <img src="{{ asset('assets/images/users/avatar-1.jpg')}}" width="24"
                                        class="rounded-circle me-lg-2 d-flex" alt="user-image">
                                    <span class="d-lg-flex flex-column gap-1 d-none">
                                        {{ ucfirst(auth()->user()?->name ?? 'User') }} </span>
                                    <i class="ti ti-chevron-down d-none d-lg-block align-middle ms-2"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <a href="{{ route('admin.profile') }}" class="dropdown-item">
                                        <i class="ti ti-user-hexagon me-1 fs-17 align-middle"></i>
                                        <span class="align-middle">My Account</span>
                                    </a>


                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="ti ti-settings me-1 fs-17 align-middle"></i>
                                        <span class="align-middle">Settings</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="ti ti-lifebuoy me-1 fs-17 align-middle"></i>
                                        <span class="align-middle">Support</span>
                                    </a>

                                    <div class="dropdown-divider"></div>

                                    <!-- item-->

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="ti ti-logout me-1 fs-17 align-middle"></i>
                                        <span class="align-middle">Sign Out</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </header>

            <!-- Topbar End -->

            <!-- Search Modal -->
            <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content bg-transparent">
                        <div class="card mb-0 shadow-none">
                            <div class="px-3 py-2 d-flex flex-row align-items-center" id="top-search">
                                <i class="ti ti-search fs-22"></i>
                                <input type="search" class="form-control border-0" id="search-modal-input"
                                    placeholder="Search for actions, people,">
                                <button type="button" class="btn p-0" data-bs-dismiss="modal"
                                    aria-label="Close">[esc]</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <main class="">
                <div class="row">
                    <div class="col-md-9 mx-auto">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        @endif

                        @if (session('error'))
                        <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                            {{ session('error') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                        @endif
                    </div>
                </div>
                @yield('content')
            </main>
        </div>

        <!-- Footer Start -->
        <footer class="footer">
            <div class="page-container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © Complaint Management
                    </div>
                    <div class="col-md-6">
                        <div class="text-md-end footer-links d-none d-md-block">
                            <a href="javascript: void(0);">About</a>
                            <a href="javascript: void(0);">Support</a>
                            <a href="javascript: void(0);">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->
    </div>
    <!-- Dashboard Settings -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="theme-settings-offcanvas">
        <div class="d-flex align-items-center gap-2 px-3 py-3 offcanvas-header border-bottom border-dashed">
            <h5 class="flex-grow-1 mb-0">Dashboard Settings</h5>

            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body p-0 h-100" data-simplebar>
            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fs-16 fw-bold">Color Scheme</h5>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-bs-theme"
                                id="layout-color-light" value="light">
                            <label class="form-check-label p-3 w-100 d-flex justify-content-center align-items-center"
                                for="layout-color-light">
                                <iconify-icon icon="solar:sun-bold-duotone" class="fs-32 text-muted"></iconify-icon>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-bs-theme"
                                id="layout-color-dark" value="dark">
                            <label class="form-check-label p-3 w-100 d-flex justify-content-center align-items-center"
                                for="layout-color-dark">
                                <iconify-icon icon="solar:cloud-sun-2-bold-duotone"
                                    class="fs-32 text-muted"></iconify-icon>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fs-16 fw-bold">Topbar Color</h5>

                <div class="row">
                    <div class="col-3">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar-color"
                                id="topbar-color-light" value="light">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="topbar-color-light">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-white"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-3">
                        <div class="form-check card-radio">
                            <input class="form-check-input" type="radio" name="data-topbar-color"
                                id="topbar-color-dark" value="dark">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="topbar-color-dark">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-dark"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed">
                <h5 class="mb-3 fs-16 fw-bold">Menu Color</h5>

                <div class="row">
                    <div class="col-3">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-menu-color"
                                id="sidenav-color-light" value="light">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="sidenav-color-light">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-white"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Light</h5>
                    </div>

                    <div class="col-3" style="--ct-dark-rgb: 64,73,84;">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-menu-color"
                                id="sidenav-color-dark" value="dark">
                            <label class="form-check-label p-0 avatar-lg w-100 bg-light" for="sidenav-color-dark">
                                <span class="d-flex align-items-center justify-content-center h-100">
                                    <span class="p-2 d-inline-flex shadow rounded-circle bg-dark"></span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Dark</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 .border-bottom .border-dashed">
                <h5 class="mb-3 fs-16 fw-bold">Sidebar Size</h5>

                <div class="row">
                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size"
                                id="sidenav-size-default" value="default">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-default">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end  flex-column p-1 px-2">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Default</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size"
                                id="sidenav-size-compact" value="compact">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-compact">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end  flex-column p-1">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Compact</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size"
                                id="sidenav-size-small" value="condensed">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-small">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end flex-column"
                                            style="padding: 2px;">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Condensed</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size"
                                id="sidenav-size-small-hover" value="sm-hover">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-small-hover">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="bg-light d-flex h-100 border-end flex-column"
                                            style="padding: 2px;">
                                            <span class="d-block p-1 bg-dark-subtle rounded mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                            <span
                                                class="d-block border border-3 border-secondary border-opacity-25 rounded w-100 mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Hover View</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size"
                                id="sidenav-size-full" value="full">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-full">
                                <span class="d-flex h-100">
                                    <span class="flex-shrink-0">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="d-block p-1 bg-dark-subtle mb-1"></span>
                                        </span>
                                    </span>
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Full Layout</h5>
                    </div>

                    <div class="col-4">
                        <div class="form-check sidebar-setting card-radio">
                            <input class="form-check-input" type="radio" name="data-sidenav-size"
                                id="sidenav-size-fullscreen" value="fullscreen">
                            <label class="form-check-label p-0 avatar-xl w-100" for="sidenav-size-fullscreen">
                                <span class="d-flex h-100">
                                    <span class="flex-grow-1">
                                        <span class="d-flex h-100 flex-column">
                                            <span class="bg-light d-block p-1"></span>
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </div>
                        <h5 class="fs-14 text-center text-muted mt-2">Hidden</h5>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed d-none">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="fs-16 fw-bold mb-0">Container Width</h5>

                    <div class="btn-group radio" role="group">
                        <input type="radio" class="btn-check" name="data-container-position"
                            id="container-width-fixed" value="fixed">
                        <label class="btn btn-sm btn-soft-primary w-sm" for="container-width-fixed">Full</label>

                        <input type="radio" class="btn-check" name="data-container-position"
                            id="container-width-scrollable" value="scrollable">
                        <label class="btn btn-sm btn-soft-primary w-sm ms-0"
                            for="container-width-scrollable">Boxed</label>
                    </div>
                </div>
            </div>

            <div class="p-3 border-bottom border-dashed d-none">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="fs-16 fw-bold mb-0">Layout Position</h5>

                    <div class="btn-group radio" role="group">
                        <input type="radio" class="btn-check" name="data-layout-position"
                            id="layout-position-fixed" value="fixed">
                        <label class="btn btn-sm btn-soft-primary w-sm" for="layout-position-fixed">Fixed</label>

                        <input type="radio" class="btn-check" name="data-layout-position"
                            id="layout-position-scrollable" value="scrollable">
                        <label class="btn btn-sm btn-soft-primary w-sm ms-0"
                            for="layout-position-scrollable">Scrollable</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>
<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>
<!-- Apex Chart js -->
<script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
<!-- Projects Analytics Dashboard App js -->
<script src="{{ asset('assets/js/pages/dashboard-sales.js') }}"></script>

</html>