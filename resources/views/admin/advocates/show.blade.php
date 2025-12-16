@extends('layouts.admin')

@section('content')
    <div class="page-content">
        <div class="page-container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-18 text-uppercase fw-bold m-0">Advocate Details</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="">
                            <p class="mt-3"><strong>ID:</strong> {{ $advocate->id }}</p>
                            <p><strong>Name:</strong> {{ $advocate->name }}</p>
                            <p><strong>Email:</strong> {{ $advocate->email }}</p>
                            <p><strong>Enrolment No. :</strong> {{ $advocate->enrollment_no }}</p>
                            <div class="mt-3">
                                <a href="{{ route('admin.advocates.index') }}" class="btn btn-outline-primary">Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
