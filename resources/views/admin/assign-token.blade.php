@extends('layouts.admin')

@section('content')
<div class="page-content">
    <div class="page-container mt-5">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="card p-4">
                    <div class="card shadow-lg border-0">
                        <div class="card-header bg-primary text-white">
                            <h4 class="mb-0">Manual Token Assignment</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.token.assign') }}" method="POST">
                                @csrf

                                <div class="row g-4">

                                    <!-- Pending Tokens -->
                                    <div class="col-md-4">
                                        <label class="form-label fw-bold">Select Pending Token</label>
                                        <select name="token_id" class="form-control" required>
                                            <option value="">-- Select Token --</option>
                                            @foreach($pendingTokens as $token)
                                            <option value="{{ $token->id }}">
                                                #{{ $token->displayNumber() }} — {{ $token->purpose->name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Advocate List -->
                                    <div class="col-md-4">
                                        <label class="form-label fw-bold">Assign to Advocate</label>
                                        <select name="advocate_id" class="form-control" required>
                                            <option value="">-- Select Advocate --</option>
                                            @foreach($advocates as $adv)
                                            <option value="{{ $adv->id }}">{{ $adv->name }} ({{ $adv->email }})</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Submit -->
                                    <div class="col-md-4 d-flex align-items-end">
                                        <button class="btn btn-success w-100 py-2">
                                            <i class="ti ti-check mx-2"></i> Assign Token
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection