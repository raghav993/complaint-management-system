@extends('layouts.user')
@section('content')
<div class="container py-4">
    <h3 class="mb-3">Welcome to User Dashboard</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Raise New Complaint</h5>
                </div>
                <div class="card-body">
                    <p>Click on the button below to raise a new complaint for software or hardware issues.</p>
                    <a href="{{ route('complaint.create') }}" class="btn btn-primary">Raise New Complaint</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>View All Complaints</h5> 
                </div>
                <div class="card-body">
                    <p>Click on the button below to view all complaints.</p>
                    <a href="{{ route('complaints') }}" class="btn btn-primary">View All Complaints</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection