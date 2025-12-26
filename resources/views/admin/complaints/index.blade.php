@extends('layouts.admin')

@section('content')
    <div class="page-content">
        <div class="page-container">
            <div class="row">
                 @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show m-3" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show m-3" role="alert">
                                {{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
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
                                                <span
                                                    class="badge bg-{{ $complaint->status == 'open' ? 'primary' : ($complaint->status == 'in_progress' ? 'warning' : 'success') }}">
                                                    {{ ucfirst(str_replace('_', ' ', $complaint->status)) }}
                                                </span>
                                            </td>
                                            <td>
                                                {{-- <a href="#" class="btn btn-sm btn-info">
                                                    <i class="ti ti-eye"></i>
                                                </a>

                                                <a href="#" class="btn btn-sm btn-warning">
                                                    <i class="ti ti-pencil"></i>
                                                </a> --}}
                                                <button class="btn btn-sm btn-success assign-btn"
                                                    data-complaint="{{ $complaint->complaint_no }}" data-bs-toggle="modal"
                                                    data-bs-target="#assignModal">
                                                    <i class="ti ti-user-plus"></i>
                                                </button>
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
    <div class="modal fade" id="assignModal" tabindex="-1">
        <div class="modal-dialog">
            <form method="POST" action="{{ route('complaints.assign') }}">
                @csrf
                <input type="hidden" name="complaint_id" id="complaint_id">

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Assign Engineer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <!-- Type -->
                        <div class="mb-3">
                            <label>Section</label>
                            <select class="form-select" id="section">
                                <option value="">Select Section</option>
                                <option value="hardware">Hardware</option>
                                <option value="software">Software</option>
                            </select>
                        </div>

                        <!-- Engineers -->
                        <div class="mb-3">
                            <label>Engineer</label>
                            <select name="engineer_id" id="engineer" class="form-select" required>
                                <option value="">Select Engineer</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-primary">Assign</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {

            document.querySelectorAll('.assign-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    document.getElementById('complaint_id').value =
                        this.dataset.complaint; // ✅ complaint_no
                });
            });

            let sectionSelect = document.getElementById('section');

            sectionSelect.addEventListener('change', function() {
                let section = this.value;
                if (!section) return;

                fetch(`/engineers-by-section/${section}`)
                    .then(res => res.json())
                    .then(data => {
                        let engineerSelect = document.getElementById('engineer');
                        engineerSelect.innerHTML = '<option value="">Select Engineer</option>';

                        data.forEach(engineer => {
                            engineerSelect.innerHTML +=
                                `<option value="${engineer.id}">${engineer.name}</option>`;
                        });
                    });
            });

        });
    </script>
@endsection
