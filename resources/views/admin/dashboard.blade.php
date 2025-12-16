@extends('layouts.admin')

@section('content')
<div class="page-content">
    <div class="page-container mt-4">

        {{-- PAGE TITLE --}}
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3 class="fw-bold text-uppercase">Admin Dashboard</h3>
            <span class="text-muted">Welcome, {{ auth()->user()->name }}</span>
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

            {{-- Total Advocates --}}
            <div class="col-xl-3 col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <span class="avatar-title bg-success text-white rounded-circle fs-2 mb-3 mx-auto">
                            <i class="ti ti-scale p-3"></i>
                        </span>
                        <h5 class="text-muted">Total Advocates</h5>
                        <h2 class="fw-bold">{{ $totalAdvocates ?? 0 }}</h2>
                    </div>
                </div>
            </div>

            {{-- Total Counters --}}
            <div class="col-xl-3 col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <span class="avatar-title bg-warning text-white rounded-circle fs-2 mb-3 mx-auto">
                            <i class="ti ti-building p-3"></i>
                        </span>
                        <h5 class="text-muted">Total Counters</h5>
                        <h2 class="fw-bold">{{ $totalCounters ?? 0 }}</h2>
                    </div>
                </div>
            </div>

            {{-- Total Purposes --}}
            <div class="col-xl-3 col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body text-center">
                        <span class="avatar-title bg-info text-white rounded-circle fs-2 mb-3 mx-auto">
                            <i class="ti ti-list-details p-3"></i>
                        </span>
                        <h5 class="text-muted">Total Purposes</h5>
                        <h2 class="fw-bold">{{ $totalPurposes ?? 0 }}</h2>
                    </div>
                </div>
            </div>

        </div>


        {{-- TOKEN STATS --}}
        <div class="row g-4 mb-4">

            {{-- Total Tokens --}}
            <div class="col-xl-3 col-md-6">
                <div class="card shadow-sm border-0 bg-primary text-white">
                    <div class="card-body text-center">
                        <span class="avatar-title bg-white text-primary rounded-circle fs-2 mb-3 mx-auto">
                            <i class="ti ti-ticket p-3"></i>
                        </span>
                        <h5>Total Tokens</h5>
                        <h2 class="fw-bold">{{ $totalTokens ?? 0 }}</h2>
                    </div>
                </div>
            </div>

            {{-- Pending Tokens --}}
            <div class="col-xl-3 col-md-6">
                <div class="card shadow-sm border-0 bg-warning text-white">
                    <div class="card-body text-center">
                        <span class="avatar-title bg-white text-warning rounded-circle fs-2 mb-3 mx-auto">
                            <i class="ti ti-hourglass p-3"></i>
                        </span>
                        <h5>Pending Tokens</h5>
                        <h2 class="fw-bold">{{ $pendingTokens ?? 0 }}</h2>
                    </div>
                </div>
            </div>

            {{-- Assigned Tokens --}}
            <div class="col-xl-3 col-md-6">
                <div class="card shadow-sm border-0 bg-info text-white">
                    <div class="card-body text-center">
                        <span class="avatar-title bg-white text-info rounded-circle fs-2 mb-3 mx-auto">
                            <i class="ti ti-user-check p-3"></i>
                        </span>
                        <h5>Assigned Tokens</h5>
                        <h2 class="fw-bold">{{ $assignedTokens ?? 0 }}</h2>
                    </div>
                </div>
            </div>

            {{-- Completed Tokens --}}
            <div class="col-xl-3 col-md-6">
                <div class="card shadow-sm border-0 bg-success text-white">
                    <div class="card-body text-center">
                        <span class="avatar-title bg-white text-success rounded-circle fs-2 mb-3 mx-auto">
                            <i class="ti ti-circle-check p-3"></i>
                        </span>
                        <h5>Completed Tokens</h5>
                        <h2 class="fw-bold">{{ $completedTokens ?? 0 }}</h2>
                    </div>
                </div>
            </div>

        </div>


        {{-- QUICK ACTIONS --}}
        <div class="row g-4 mb-4">
            <div class="col-xl-4 col-md-6">
                <a href="{{ route('admin.users.index') }}" class="text-decoration-none">
                    <div class="card shadow-sm border-0">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Manage Users</h5>
                            <i class="ti ti-users fs-2 text-primary p-3"></i>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-md-6">
                <a href="{{ route('admin.advocates.index') }}" class="text-decoration-none">
                    <div class="card shadow-sm border-0">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Manage Advocates</h5>
                            <i class="ti ti-scale fs-2 text-success p-3"></i>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-xl-4 col-md-6">
                <a href="{{ route('admin.token.assign') }}" class="text-decoration-none">
                    <div class="card shadow-sm border-0">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Manual Token Assignment</h5>
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
                        <h5 class="mb-0">Today’s Token Activity</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">

                            <li class="list-group-item d-flex justify-content-between">
                                <span>Tokens Created</span>
                                <span class="fw-bold">{{ $todayCreated ?? 0 }}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between">
                                <span>Tokens Assigned</span>
                                <span class="fw-bold">{{ $todayAssigned ?? 0 }}</span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between">
                                <span>Tokens Completed</span>
                                <span class="fw-bold">{{ $todayCompleted ?? 0 }}</span>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-xl-6">
                <div class="card shadow-sm border-0 h-100">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Live Advocates Status</h5>
                    </div>

                    <div class="card-body">
                        <table class="table table-striped table-bordered align-middle">
                            <thead class="table-dark">
                                <tr>
                                    <th>Advocate</th>
                                    <th>Counter</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($advocateStatus ?? [] as $a)
                                <tr>
                                    <td>{{ $a->name }}</td>
                                    <td>{{ $a->counters->pluck('name')->join(', ') }}</td>
                                    <td>
                                        <span class="badge bg-{{ $a->is_idle ? 'success' : 'danger' }}">
                                            {{ $a->is_idle ? 'Idle' : 'Working' }}
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

</div> <!-- end row-->

</div>
<!-- container -->
@endsection