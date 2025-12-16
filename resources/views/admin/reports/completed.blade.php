@extends('layouts.admin')

@section('content')
<div class="page-content p-4">

    <h3 class="fw-bold mb-4">Completed Tokens Report</h3>

    <!-- Filter Box -->
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <form method="GET" class="row g-3">

                <div class="col-md-4">
                    <label class="form-label">Advocate</label>
                    <select name="advocate_id" class="form-select">
                        <option value="">All Advocates</option>
                        @foreach($advocates as $a)
                            <option value="{{ $a->id }}"
                                {{ ($filters['advocate_id'] ?? '') == $a->id ? 'selected' : '' }}>
                                {{ $a->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Counter</label>
                    <select name="counter_id" class="form-select">
                        <option value="">All Counters</option>
                        @foreach($counters as $c)
                            <option value="{{ $c->id }}"
                                {{ ($filters['counter_id'] ?? '') == $c->id ? 'selected' : '' }}>
                                {{ $c->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4">
                    <label class="form-label">Purpose</label>
                    <select name="purpose_id" class="form-select">
                        <option value="">All Purposes</option>
                        @foreach($purposes as $p)
                            <option value="{{ $p->id }}"
                                {{ ($filters['purpose_id'] ?? '') == $p->id ? 'selected' : '' }}>
                                {{ $p->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-12 text-end">
                    <button class="btn btn-primary px-4">Filter</button>
                </div>

            </form>
        </div>
    </div>

    <!-- Table -->
    <div class="card shadow-sm">
        <div class="card-body">

            @if($tokens->count() == 0)
                <p class="text-muted text-center">No completed tokens found.</p>
            @else
            <div class="table-responsive">
                <table class="table table-bordered table-striped align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Token No</th>
                            <th>User</th>
                            <th>Advocate</th>
                            <th>Counter</th>
                            <th>Purpose</th>
                            <th>Completed On</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tokens as $t)
                        <tr>
                            <td class="fw-bold">{{ $t->number }}</td>
                            <td>{{ $t->user->name }}</td>
                            <td>{{ $t->advocate->name ?? '-' }}</td>
                            <td>{{ $t->counter->name }}</td>
                            <td>{{ $t->purpose->title }}</td>
                            <td>{{ $t->updated_at->format('d M, Y h:i A') }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @endif

        </div>
    </div>
</div>
@endsection
