@extends('layouts.staff')

@section('content')
    <div class="page-content">
        <div class="page-container mt-1">
            <h1>User Details</h1>
            <div class="mb-3"><strong>Name : </strong> {{ $user->name }}</div>
            <div class="mb-3"><strong>User Id : </strong> {{ $user->Username??'-' }}</div>
            <a href="{{ url('staff/dashboard') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
@endsection
                                            