@extends('layouts.front')

@section('content')

<!-- HERO SECTION -->
<section class="bg-white border-bottom shadow-sm py-5">
    <div class="container text-center">

        <h1 class="display-5 fw-bold text-primary mb-3">
            High Court Visitor Token System
        </h1>

        <p class="lead text-secondary mb-4">
            Generate your visitor token easily without waiting in long queues. 
            Fast, simple, and secure.
        </p>

        <div class="mt-4">
            <a href="{{ url('token/create') }}" class="btn btn-primary btn-lg px-4 shadow">
                <i class="fa-solid fa-ticket"></i> Generate Your Token
            </a>
        </div>

    </div>
</section>


<!-- HOW IT WORKS -->
<section class="py-5 bg-light">
    <div class="container">

        <h2 class="text-center fw-bold mb-5">How It Works</h2>

        <div class="row g-4 text-center">

            <!-- Step 1 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 hover-step h-100">
                    <div class="icon-circle bg-primary text-white mb-3">
                        <i class="fa-solid fa-list fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">1. Select Purpose</h5>
                    <p class="text-muted small">
                        Choose the purpose of your court visit (Certified Copy, Filing, Case Inquiry, etc.)
                    </p>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 hover-step h-100">
                    <div class="icon-circle bg-success text-white mb-3">
                        <i class="fa-solid fa-ticket-simple fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">2. Generate Token</h5>
                    <p class="text-muted small">
                        A unique token number is generated based on your selection and queue position.
                    </p>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm p-4 hover-step h-100">
                    <div class="icon-circle bg-warning text-white mb-3">
                        <i class="fa-solid fa-door-open fa-2x"></i>
                    </div>
                    <h5 class="fw-bold">3. Visit Your Counter</h5>
                    <p class="text-muted small">
                        Proceed to the assigned counter and wait for your token to be called.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- ADVOCATE SECTION -->
<section class="py-5">
    <div class="container text-center">

        <h3 class="fw-bold mb-3">For Advocates</h3>
        <p class="text-muted small mb-4">
            Authorized advocates on court counters can log in to process visitor tokens.
        </p>

        <a href="{{ route('login.advocate') }}" class="btn btn-outline-success btn-lg px-4 shadow-sm">
            <i class="fa-solid fa-scale-balanced"></i> Advocate Login
        </a>

    </div>
</section>


<!-- WHY THIS SYSTEM -->
<section class="py-5 bg-light">
    <div class="container">

        <h2 class="text-center fw-bold mb-5">Why This System?</h2>

        <div class="row g-4">

            <div class="col-md-3">
                <div class="card shadow-sm border-0 text-center p-4 hover-card h-100">
                    <i class="fa-solid fa-clock fa-2x text-primary mb-3"></i>
                    <h6 class="fw-bold">Reduced Waiting</h6>
                    <p class="small text-muted">No long queues. Token ensures fair turn-by-turn service.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm border-0 text-center p-4 hover-card h-100">
                    <i class="fa-solid fa-shield-halved fa-2x text-success mb-3"></i>
                    <h6 class="fw-bold">Secure Process</h6>
                    <p class="small text-muted">All data is securely handled and stored.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm border-0 text-center p-4 hover-card h-100">
                    <i class="fa-solid fa-bolt fa-2x text-warning mb-3"></i>
                    <h6 class="fw-bold">Fast Service</h6>
                    <p class="small text-muted">Tokens ensure quick and organized visitor handling.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card shadow-sm border-0 text-center p-4 hover-card h-100">
                    <i class="fa-solid fa-building-columns fa-2x text-danger mb-3"></i>
                    <h6 class="fw-bold">Court-Friendly Design</h6>
                    <p class="small text-muted">Clean, calm, and professional interface suitable for courts.</p>
                </div>
            </div>

        </div>

    </div>
</section>

<!-- STYLES -->
<style>

.icon-circle {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
}

.hover-step,
.hover-card {
    transition: .3s;
}

.hover-step:hover {
    transform: translateY(-6px);
    box-shadow: 0 15px 25px rgba(0,0,0,0.12);
}

.hover-card:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 20px rgba(0,0,0,0.12);
}

</style>

@endsection
