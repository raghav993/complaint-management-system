@extends('layouts.user')

@section('content')
    <div class="page-content">
        <div class="page-container mt-1">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <div class="card p-4">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Edit Profile</h4>
                            <form method="POST" action="{{ route('user.profile.update', $user->id) }}"
                                enctype="multipart/form-data">
                                @csrf @method('PUT')

                                <div class="mb-3">
                                    <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt=""><br>
                                    <label class="form-label">Update Profile Image</label><input name="profile_image"
                                        type="file" class="form-control">
                                </div>
                                <div class="mb-3"><label class="form-label">Name</label><input name="name"
                                        class="form-control" value="{{ old('name', $user->name) }}" required></div>
                                <div class="mb-3"><label class="form-label">Email</label><input name="email"
                                        type="email" class="form-control" value="{{ old('email', $user->email) }}"
                                        required></div>
                                <div class="mb-3"><label class="form-label">Password (leave blank to keep)</label><input
                                        name="password" type="password" class="form-control"></div>
                                <div class="mb-3"><label class="form-label">Password Confirmation</label><input
                                        name="password_confirmation" type="password" class="form-control"></div>
                                
                                <button class="btn btn-primary">Update</button>
                                <a href="{{ route('user.dashboard') }}" class="btn btn-secondary">Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
