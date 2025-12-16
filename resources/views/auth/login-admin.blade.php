@extends('layouts.front')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="card shadow-sm p-4 text-center">
                <img src="{{ asset('assets/images/logo.jpg') }}"  class="mb-3" height="100px">

                <h4 class="fw-bold mb-2">Admin Login</h4>
                <p class="text-muted mb-4">Login to access the admin panel.</p>

                <form action="{{ url('/login/admin') }}" method="POST">
                    @csrf

                    <div class="mb-3 text-start">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                               placeholder="Enter email" value="admin@tmc.in" required>
                        @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 text-start">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                               placeholder="Enter password" value="Admin@12345" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <button class="btn btn-danger w-100">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection