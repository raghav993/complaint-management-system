@extends('layouts.front')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card shadow-sm p-4 text-center">
                <img src="{{ asset('assets/images/logo.jpg') }}"  class="mb-3" height="100px">

                <h4 class="fw-bold mb-2">User Login</h4>
                <p class="text-muted mb-4">Login to access visitor features.</p>

                <form action="{{ url('/login') }}" method="POST">
                    @csrf

                    <div class="mb-3 text-start">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                               placeholder="Enter username"  required>
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 text-start">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                               placeholder="Enter password" value="user@123" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-primary w-100">Login</button>
                </form>

                <p class="mt-3 small">
                    Don't have an account?
                    <a href="{{ url('register') }}">Register</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection