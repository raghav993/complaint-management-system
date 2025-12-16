@extends('layouts.admin')

@section('content')
    <div class="page-content">
        <div class="page-container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-18 text-uppercase fw-bold m-0">Token Details</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <p><strong>ID:</strong> {{ $token->id }}</p>
                            <p><strong>Token Number:</strong> {{ $token->number }}</p>
                            <p><strong>Purpose:</strong> {{ $token->purpose->name }}</p>
                            <p><strong>Status:</strong> {{ $token->status }}</p>

                            <div class="mt-3">
                                <a href="{{ route('admin.tokens.index') }}" class="btn btn-outline-primary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
