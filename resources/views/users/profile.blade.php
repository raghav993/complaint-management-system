@extends('layouts.user')

@section('content')
    <div class="page-content">
        <div class="page-container mt-1">
            <h1>User Details</h1>
            <div class="mb-3"><strong>Name:</strong> {{ $user->username }}</div>
            <div class="mb-3"><strong>Email:</strong> {{ $user->email??'-' }}</div>
            <a href="{{ route('user.dashboard') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection
                                            