@extends('layouts.auth')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <div class="card p-4 text-center">
        <h2 class="display-6">Token #{{ $token->displayNumber() }}</h2>
        <p class="mb-1"><strong>Counter:</strong> {{ $token->counter->name }}</p>
        <p class="mb-1"><strong>Purpose:</strong> {{ $token->purpose->name }}</p>
        <p class="mb-1"><strong>Created:</strong> {{ $token->created_at->format('d M Y, H:i') }}</p>
        <p class="mb-2"><strong>Status:</strong> {{ ucfirst($token->status) }}</p>

        <div class="d-flex justify-content-center gap-2">
          <button class="btn btn-outline-secondary" onclick="window.print()">Print</button>
          <a href="{{ route('user.dashboard') }}" class="btn btn-primary">Back to Dashboard</a>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
