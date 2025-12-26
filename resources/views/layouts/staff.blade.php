<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Staff Dashboard | MPHC Indore Bench</title>
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.jpg') }}">

    <!-- Theme Config -->
    <script src="{{ asset('assets/js/config.js') }}"></script>

    <!-- Vendor css -->
    <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet">

    <!-- App css -->
    <link href="{{ asset('assets/css/user-app.min.css') }}" rel="stylesheet" id="app-style">

    <!-- Icons -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css">
    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables CSS -->
<link rel="stylesheet"
      href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

</head>

<body>

<div class="wrapper">
    <header class="app-topbar bg-white shadow-sm pt-2">
        <div class="page-container topbar-menu px-3 d-flex justify-content-between align-items-center">

            <!-- Logo -->
            <a href="{{ route('staff.dashboard') }}" class="d-flex align-items-center">
                <img src="{{ asset('assets/images/logo.jpg') }}" height="45" alt="Logo">
            </a>

            <div class="d-flex align-items-center gap-2">

                <!-- Dark Mode -->
                <button class="topbar-link btn btn-outline-primary btn-icon d-none d-sm-flex" id="light-dark-mode">
                    <i class="ti ti-moon fs-22"></i>
                </button>

                <!-- User Dropdown -->
                <div class="dropdown">
                    <a class="topbar-link btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown">
                        <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" width="28"
                             class="rounded-circle me-2">

                        <span class="fw-semibold d-none d-md-inline">
                            {{-- {{ ucfirst(auth()->user()->name) }} --}}
                        </span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end shadow">

                        <a href="{{ url('staff/profile')}}" class="dropdown-item">
                            <i class="ti ti-user me-2"></i> Profile
                        </a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item text-danger" href="#"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="ti ti-logout me-2"></i> Logout
                        </a>

                        <form id="logout-form" action="{{ url('logout/engineer') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                </div>

            </div>

        </div>
    </header>
    <!-- ============================
        MAIN PAGE CONTENT
    ============================= -->
    <main class="page-content px-3 py-4">

        <!-- Success / Error Messages -->
        <div class="row">
            <div class="col-md-10 mx-auto">

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    </div>
                @endif

            </div>
        </div>

        <!-- Page Content -->
        @yield('content')

    </main>

    <footer class="footer">
        <div class="page-container">
            <div class="row">
                <div class="col-12 text-center text-muted">
                    <script>document.write(new Date().getFullYear())</script>
                    © MP High Court - Complaint Management System
                </div>
            </div>
        </div>
    </footer>

</div>

<!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/app.js') }}"></script>

</body>
</html>
