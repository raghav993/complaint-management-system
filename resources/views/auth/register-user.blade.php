@extends('layouts.front')

@section('content')

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="card shadow-sm p-4 text-center">
                <img src="{{ asset('assets/images/logo.jpg') }}"  class="mb-3">

                <h4 class="fw-bold mb-2">Register Here</h4>

                <form action="{{ url('/register') }}" method="POST">
                    @csrf

                    {{-- <div class="mb-3 text-start">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                               placeholder="Enter name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}

                    <div class="mb-3 text-start">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                               placeholder="Enter username" value="{{ old('username') }}" required>
                        @error('username')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 text-start">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                               placeholder="Enter password" required>
                        @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3 text-start">
                        <label>Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                               placeholder="Re-enter password" required>
                    </div>

                    <button class="btn btn-primary w-100">Register</button>
                </form>

                <p class="mt-3 small">
                    Already have an account?
                    <a href="{{ url('login/user') }}">Login</a>
                </p>
            </div>
        </div>
    </div>
</div>

@endsection