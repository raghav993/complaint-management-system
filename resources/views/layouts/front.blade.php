<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CMS For Software/Hardware</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.jpg') }}">
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

                    @if (auth()->check())
                        <!-- If Logged In: Show Dashboard + Logout -->
                        <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm px-3 fw-semibold">
                            <i class="fa-solid fa-gauge"></i> Dashboard
                        </a>

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button class="btn btn-danger btn-sm px-3 fw-semibold">
                                <i class="fa-solid fa-power-off"></i> Logout
                            </button>
                        </form>
                    @else
                        <!-- If NOT logged in: Show Login Buttons -->
                        <a href="{{ route('login.user') }}" class="btn btn-outline-primary btn-sm px-3 fw-semibold">
                            <i class="fa-solid fa-user me-1"></i> Login
                        </a>
                    @endif

                </div>

            </div>

        </div>
    </nav>


    <!-- PAGE CONTENT -->
    <main class="py-4">
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
