@extends('layouts.admin')

@section('content')
    <div class="page-content">
        <div class="page-container mt-4">

            {{-- PAGE TITLE --}}
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="fw-bold text-uppercase">Complaint Management Dashboard</h3>
                {{-- <span class="text-muted">Welcome, {{ auth()->user()->name }}</span> --}}
            </div>

            {{-- TOP STATS ROW --}}
            <div class="row g-4 mb-4">
                {{-- Total Users --}}
                <div class="col-xl-3 col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body text-center">
                            <span class="avatar-title bg-primary text-white rounded-circle fs-2 mb-3 mx-auto">
                                <i class="ti ti-users p-3"></i>
                            </span>
                            <h5 class="text-muted">Total Users</h5>
                            <h2 class="fw-bold">{{ $totalUsers ?? 0 }}</h2>
                        </div>
                    </div>
                </div>

                {{-- Total Departments --}}
                <div class="col-xl-3 col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body text-center">
                            <span class="avatar-title bg-success text-white rounded-circle fs-2 mb-3 mx-auto">
                                <i class="ti ti-building p-3"></i>
                            </span>
                            <h5 class="text-muted">Total Departments</h5>
                            <h2 class="fw-bold">{{ $totalSections ?? 0 }}</h2>
                        </div>
                    </div>
                </div>

                {{-- Total Complaints --}}
                <div class="col-xl-3 col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body text-center">
                            <span class="avatar-title bg-warning text-white rounded-circle fs-2 mb-3 mx-auto">
                                <i class="ti ti-alert-circle p-3"></i>
                            </span>
                            <h5 class="text-muted">Total Complaints</h5>
                            <h2 class="fw-bold">{{ $totalComplaints ?? 0 }}</h2>
                        </div>
                    </div>
                </div>

                {{-- Total Resolved Complaints --}}
                <div class="col-xl-3 col-md-6">
                    <div class="card shadow-sm border-0">
                        <div class="card-body text-center">
                            <span class="avatar-title bg-info text-white rounded-circle fs-2 mb-3 mx-auto">
                                <i class="ti ti-check p-3"></i>
                            </span>
                            <h5 class="text-muted">Resolved Complaints</h5>
                            <h2 class="fw-bold">{{ $resolvedComplaints ?? 0 }}</h2>
                        </div>
                    </div>
                </div>
            </div>

            {{-- COMPLAINT STATUS STATS --}}
            <div class="row g-4 mb-4">
                {{-- Pending Complaints --}}
                <div class="col-xl-3 col-md-6">
                    <div class="card shadow-sm border-0 bg-warning text-white">
                        <div class="card-body text-center">
                            <span class="avatar-title bg-white text-warning rounded-circle fs-2 mb-3 mx-auto">
                                <i class="ti ti-hourglass p-3"></i>
                            </span>
                            <h5>Pending Complaints</h5>
                            <h2 class="fw-bold">{{ $pendingComplaints ?? 0 }}</h2>
                        </div>
                    </div>
                </div>

                {{-- In Progress Complaints --}}
                <div class="col-xl-3 col-md-6">
                    <div class="card shadow-sm border-0 bg-info text-white">
                        <div class="card-body text-center">
                            <span class="avatar-title bg-white text-info rounded-circle fs-2 mb-3 mx-auto">
                                <i class="ti ti-rotate p-3"></i>
                            </span>
                            <h5>In Progress</h5>
                            <h2 class="fw-bold">{{ $inProgressComplaints ?? 0 }}</h2>
                        </div>
                    </div>
                </div>

                {{-- Escalated Complaints --}}
                <div class="col-xl-3 col-md-6">
                    <div class="card shadow-sm border-0 bg-danger text-white">
                        <div class="card-body text-center">
                            <span class="avatar-title bg-white text-danger rounded-circle fs-2 mb-3 mx-auto">
                                <i class="ti ti-alert-triangle p-3"></i>
                            </span>
                            <h5>Escalated</h5>
                            <h2 class="fw-bold">{{ $escalatedComplaints ?? 0 }}</h2>
                        </div>
                    </div>
                </div>

                {{-- Closed Complaints --}}
                <div class="col-xl-3 col-md-6">
                    <div class="card shadow-sm border-0 bg-success text-white">
                        <div class="card-body text-center">
                            <span class="avatar-title bg-white text-success rounded-circle fs-2 mb-3 mx-auto">
                                <i class="ti ti-circle-check p-3"></i>
                            </span>
                            <h5>Closed Complaints</h5>
                            <h2 class="fw-bold">{{ $closedComplaints ?? 0 }}</h2>
                        </div>
                    </div>
                </div>
            </div>

            {{-- QUICK ACTIONS --}}
            <div class="row g-4 mb-4">
                <div class="col-xl-4 col-md-6">
                    <a href="{{ url('/admin/users') }}" class="text-decoration-none">
                        <div class="card shadow-sm border-0">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Manage Users</h5>
                                <i class="ti ti-users fs-2 text-primary p-3"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4 col-md-6">
                    <a href="{{ url('/admin/sections') }}" class="text-decoration-none">
                        <div class="card shadow-sm border-0">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Manage Departments</h5>
                                <i class="ti ti-building fs-2 text-success p-3"></i>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-xl-4 col-md-6">
                    <a href="{{ url('/admin/complaints') }}" class="text-decoration-none">
                        <div class="card shadow-sm border-0">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <h5 class="mb-0">Assign Complaints</h5>
                                <i class="ti ti-arrows-shuffle fs-2 text-warning p-3"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            {{-- TODAY'S ACTIVITY --}}
            <div class="row g-4">

                <div class="col-xl-6">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-header bg-primary text-white">
                            <h5 class="mb-0">Today’s Complaint Activity</h5>
                        </div>
                        <div class="card-body">
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Complaints Registered</span>
                                    <span class="fw-bold">{{ $todayRegistered ?? 0 }}</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Complaints Assigned</span>
                                    <span class="fw-bold">{{ $todayAssigned ?? 0 }}</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between">
                                    <span>Complaints Resolved</span>
                                    <span class="fw-bold">{{ $todayResolved ?? 0 }}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6">
                    <div class="card shadow-sm border-0 h-100">
                        <div class="card-header bg-dark text-white">
                            <h5 class="mb-0">Live Department Status</h5>
                        </div>

                        <div class="card-body">
                            <table class="table table-striped table-bordered align-middle">
                                <thead class="table-dark">
                                    <tr>
                                        <th>Department</th>
                                        <th>Complaints Assigned</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($departmentStatus ?? [] as $d)
                                        <tr>
                                            <td>{{ $d->name }}</td>
                                            <td>{{ $d->complaints->count() }}</td>
                                            <td>
                                                <span class="badge bg-{{ $d->is_idle ? 'success' : 'danger' }}">
                                                    {{ $d->is_idle ? 'Idle' : 'Handling' }}
                                                </span>
                                            </td>
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
