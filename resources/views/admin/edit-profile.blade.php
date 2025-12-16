@extends('layouts.admin')

@section('content')
<div class="page-content">
    <div class="page-container mt-1">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card p-4">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit Profile</h4>
                        <form method="POST" action="{{ route('advocate.profile.update') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt=""><br>
                                <label class="form-label">Update Profile</label><input name="avatar"
                                    type="file" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Your Enrollment Number</label><input name="enrollment_no"
                                    type="taxt" class="form-control" value="{{ old('enrollment_no', $user->enrollment_no) }}">
                            </div>
                            <div class="mb-3"><label class="form-label">Name</label><input name="name"
                                    class="form-control" value="{{ old('name', $user->name) }}" required></div>
                            <div class="mb-3"><label class="form-label">Email</label><input name="email"
                                    type="email" class="form-control" value="{{ old('email', $user->email) }}"
                                    required></div>
                            <div class="mb-3"><label class="form-label">Password (leave blank to keep)</label><input
                                    name="password" type="password" class="form-control"></div>
                           
                            <button class="btn btn-primary">Update</button>
                            <a href="{{ route('advocate.dashboard') }}" class="btn btn-secondary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection