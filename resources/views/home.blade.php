@extends('layouts.auth')

@section('content')
    <div class="page-content">
        <div class="page-container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-18 text-uppercase fw-bold m-0">Dashboard</h4>
                        </div>
                        <div class="mt-3 mt-sm-0">
                            <form action="javascript:void(0);">
                                <div class="row g-2 mb-0 align-items-center">
                                    <div class="col-auto">
                                        <a href="javascript: void(0);" class="btn btn-outline-primary">
                                            <i class="ti ti-sort-ascending me-1"></i> Sort By
                                        </a>
                                    </div>
                                    <!--end col-->
                                    <div class="col-sm-auto">
                                        <div class="input-group">
                                            <input type="text" class="form-control" data-provider="flatpickr"
                                                data-deafult-date="01 May to 31 May" data-date-format="d M"
                                                data-range-date="true">
                                            <span class="input-group-text bg-primary border-primary text-white">
                                                <i class="ti ti-calendar fs-15"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end row-->
                            </form>
                        </div>
                    </div><!-- end card header -->
                </div>
                <!--end col-->
            </div> <!-- end row-->

            <div class="row">
                <div class="col">
                    <div class="row row-cols-xxl-4 row-cols-md-2 row-cols-1 text-center">
                        <!-- Total Users Card -->
                        <div class="col">
                            <a href="{{ url('/users') }}">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted fs-13 text-uppercase" title="Number of Users">Total Users</h5>
                                        <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                            <div class="user-img fs-42 flex-shrink-0">
                                                <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                                    <i class="ti ti-users"></i>
                                                </span>
                                            </div>
                                            <h3 class="mb-0 fw-bold">68</h3>
                                        </div>
                                        <p class="mb-0 text-muted">
                                            <span class="text-danger me-2"><i class="ti ti-caret-down-filled"></i>
                                                9.19%</span>
                                            <span class="text-nowrap">Since last month</span>
                                        </p>
                                    </div>
                            </a>

                        </div>
                    </div><!-- end col -->

                    <!-- Total Blocks Card -->
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted fs-13 text-uppercase" title="Number of Blocks">Total Blocks</h5>
                                <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                    <div class="user-img fs-42 flex-shrink-0">
                                        <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                            <i class="ti ti-building"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0 fw-bold">9.62k</h3>
                                </div>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><i class="ti ti-caret-up-filled"></i> 26.87%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <!-- Tokens Card -->
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted fs-13 text-uppercase" title="Number of Tokens">Tokens</h5>
                                <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                    <div class="user-img fs-42 flex-shrink-0">
                                        <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                            <i class="ti ti-key"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0 fw-bold">$98.24 <small class="text-muted">USD</small></h3>
                                </div>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><i class="ti ti-caret-up-filled"></i> 3.51%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end col -->

                    <!-- Display Board Card -->
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="text-muted fs-13 text-uppercase" title="Display Board Views">Display Board
                                </h5>
                                <div class="d-flex align-items-center justify-content-center gap-2 my-2 py-1">
                                    <div class="user-img fs-42 flex-shrink-0">
                                        <span class="avatar-title text-bg-primary rounded-circle fs-22">
                                            <i class="ti ti-eye"></i>
                                        </span>
                                    </div>
                                    <h3 class="mb-0 fw-bold">87.94M</h3>
                                </div>
                                <p class="mb-0 text-muted">
                                    <span class="text-danger me-2"><i class="ti ti-caret-down-filled"></i> 1.05%</span>
                                    <span class="text-nowrap">Since last month</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->
        </div> <!-- end row-->

    </div> 
    <!-- container -->
@endsection
