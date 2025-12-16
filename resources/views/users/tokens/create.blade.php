<!-- resources/views/tokens/create.blade.php -->
@extends('layouts.user')

@section('content')
<div class="page-content">
    <div class="page-container">
        <!-- Token Generation Form -->
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column">
                    <div class="flex-grow-1">
                        <h4 class="fs-18 text-uppercase fw-bold m-0">Generate New Token</h4>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted fs-13 text-uppercase mb-4">Token Details</h5>
                        <form action="{{ route('user.token.generate') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Select Counter</label>
                                <select name="counter_id" class="form-select" required>
                                    <option value="">Choose...</option>
                                    @foreach($counters as $c)
                                    <option value="{{ $c->id }}">{{ $c->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Purpose</label>
                                <select name="purpose_id" class="form-select" required>
                                    <option value="">Select Purpose</option>
                                    @foreach($purposes as $p)
                                    <option value="{{ $p->id }}">{{ $p->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button class="btn btn-primary w-100">Generate Token</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Generated Token Display -->
        @if (session('token'))
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted fs-13 text-uppercase mb-4">Generated Token</h5>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-uppercase">Token</th>
                                    <th class="text-uppercase">Block</th>
                                    <th class="text-uppercase">Generated At</th>
                                    <th class="text-uppercase">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="fw-bold">{{ session('token')->value }}</td>
                                    <td>{{ session('token')->block->name }}</td>
                                    <td>{{ session('token')->created_at }}</td>
                                    <td>
                                        <button onclick="printToken()" class="btn btn-outline-primary">
                                            <i class="ti ti-printer me-1"></i> Print
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

<!-- JavaScript for Print Functionality -->
<script>
    function printToken() {
        const tokenSection = document.querySelector('.card:last-of-type');
        const printWindow = window.open('', '', 'height=600,width=800');
        printWindow.document.write('<html><head><title>Print Token</title>');
        printWindow.document.write('<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">');
        printWindow.document.write('</head><body>');
        printWindow.document.write(tokenSection.outerHTML);
        printWindow.document.write('</body></html>');
        printWindow.document.close();
        printWindow.print();
    }
</script>
@endsection