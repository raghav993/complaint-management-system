@extends('layouts.user')
@section('content')
<div class="container py-4">
    <h3 class="mb-3">Welcome to Staff Dashboard</h3>
    <div class="row">
       
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>View All Complaints</h5> 
                </div>
                <div class="card-body">
                    <p>View all complaints.</p>
                    <a href="{{ url('staff/complaints') }}" class="btn btn-primary">View All Complaints</a>
                </div>
            </div>
        </div>
         <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>View Reports</h5>
                </div>
                <div class="card-body">
                    <a href="{{ url('staff/reports') }}" class="btn btn-primary">Reports</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection