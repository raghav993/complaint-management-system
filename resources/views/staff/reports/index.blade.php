@extends('layouts.staff')
@section('content')
    <div class="page-content">
        <div class="page-container">
            <div class="d-flex justify-content-between align-items-center mb-3 mt-5">
                <h1>All Reports</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card mb-3">
                            <div class="card-body">
                        
                                <form id="filterForm">
                                    @csrf
                                    <select name="engineer_id" >
                                        <option value="">All Engineers</option>
                                        @foreach($engineers as $engineer)
                                            <option value="{{ $engineer->id }}">{{ $engineer->name }}</option>
                                        @endforeach
                                    </select>
                                    <input type="date" name="from_date">
                                    <input type="date" name="to_date">
                                    <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                                </form>
                            </div>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered" id="reportsTable">
                                <thead>
                                    <tr>
                                        <th>S.No</th>
                                        <th>Complaint No</th>
                                        <th>Person Name</th>
                                        <th>Section</th>
                                        <th>Device</th>
                                        <th>Issue</th>
                                        <th>Assign To</th>
                                        <th>Complaint Date</th>
                                        <th>Complaint Resolved Date</th>
                                    </tr>
                                </thead>
                                <tbody id="reportTableBody">
                                    @include('staff.reports.partials.table', ['data' => $data])
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $('#filterForm').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "{{ route('staff.reports.filter') }}",
                method: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    $('#reportTableBody').html(response.html);
                }
            });
        });
    </script>
@endsection
