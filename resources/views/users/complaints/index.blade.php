@extends('layouts.user')

@section('content')
    <div class="page-content">
        <div class="page-container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-18 text-uppercase fw-bold m-0">All Complaints</h4>
                        </div>
                        <div class="mt-3 mt-sm-0">
                            <a href="{{ route('complaint.create') }}" class="btn btn-outline-primary">
                                <i class="ti ti-plus me-1"></i> Generate New Complaint
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Complaint No</th>
                                        <th>Person Name</th>
                                        <th>Section</th>
                                        <th>Device</th>
                                        <th>Issue</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        <th>Assign To</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($complaints as $complaint)
                                        <tr>
                                            <td>{{ $complaint->complaint_no }}</td>
                                            <td>{{ $complaint->person_name }}</td>
                                            <td>{{ $complaint->section->name }}</td>
                                            <td>{{ $complaint->item->name }}</td>
                                            <td>{{ $complaint->problem }}</td>
                                            <td>
                                                <span class="badge bg-{{ $complaint->status == 'open' ? 'primary' : ($complaint->status == 'in_progress' ? 'warning' : 'success') }}">
                                                    {{ ucfirst(str_replace('_', ' ', $complaint->status)) }}
                                                </span>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-sm btn-info">
                                                    <i class="ti ti-eye"></i>
                                                </a>
                                                <a href="#" class="btn btn-sm btn-warning">
                                                    <i class="ti ti-pencil"></i>
                                                </a>
                                            </td>
                                             <td>{{ $complaint->engineer->name ?? '--' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
