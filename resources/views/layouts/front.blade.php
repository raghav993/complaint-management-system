<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CMS For Software/Hardware | MPHC Indore Bench</title>

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
</head>

<body class="bg-light">

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container-fluid">

            <!-- Logo -->
            <a href="{{ url('/') }}" class="navbar-brand">
                <img src="{{ asset('assets/images/logo.jpg') }}" alt="logo" height="70px">
            </a>

            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Content -->
            <div class="collapse navbar-collapse" id="navbarContent">

                <!-- Left Menu -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    </li>
                </ul>

                <!-- RIGHT SIDE -->
                <div class="d-flex align-items-center gap-2">
                    <a href="{{ url('create/complaint') }}" class="btn btn-outline-primary btn-sm px-3 fw-semibold">
                        <i class="fa-solid fa-tool me-1"></i> Raise New Complaint
                    </a>
                    @if (auth()->check())
                        <!-- If Logged In: Show Dashboard + Logout -->
                        @php
                            $usertype = session('usertype');
                        @endphp

                        @if ($usertype === 'admin')
                            <a href="{{ url('/admin/dashboard') }}" class="btn btn-primary btn-sm px-3 fw-semibold">
                                <i class="fa-solid fa-gauge"></i> Dashboard
                            </a>
                        @elseif($usertype === 'staff')
                            <a href="{{ url('/staff/dashboard') }}" class="btn btn-primary btn-sm px-3 fw-semibold">
                                <i class="fa-solid fa-gauge"></i> Dashboard
                            </a>
                        @elseif($usertype === 'user')
                            <a href="{{ url('/user/dashboard') }}" class="btn btn-primary btn-sm px-3 fw-semibold">
                                <i class="fa-solid fa-gauge"></i> Dashboard
                            </a>
                        @endif


                        <form action="{{ url('logout/web') }}" method="POST">
                            @csrf
                            <button class="btn btn-danger btn-sm px-3 fw-semibold">
                                <i class="fa-solid fa-power-off"></i> Logout
                            </button>
                        </form>
                    @else
                        <!-- If NOT logged in: Show Login Buttons -->
                        <a href="{{ route('login') }}" class="btn btn-outline-primary btn-sm px-3 fw-semibold">
                            <i class="fa-solid fa-user me-1"></i> Login
                        </a>
                    @endif
                    {{-- {{$usertype ?? ''}} --}}
                </div>

            </div>

        </div>
    </nav>


    <!-- PAGE CONTENT -->
    <main class="">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @yield('content')
    </main>


    <!-- FOOTER -->
    <footer class="bg-white border-top py-3 mt-5">
        <div class="col-12 text-center text-muted">
            <script>
                document.write(new Date().getFullYear())
            </script>
            © MP High Court - Complaint Management System
        </div>
    </footer>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
