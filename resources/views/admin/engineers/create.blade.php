@extends('layouts.admin')

@section('content')
    <div class="page-content">
        <div class="page-container mt-1">
            <h1>User Details</h1>
            <div class="mb-3"><strong>Name:</strong> {{ $user->name }}</div>
            <div class="mb-3"><strong>Email:</strong> {{ $user->email }}</div>
            <div class="mb-3"><strong>Roles:</strong> {{ $user->roles->pluck('name')->join(', ') }}</div>
            <a href="{{ route('clients.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection
