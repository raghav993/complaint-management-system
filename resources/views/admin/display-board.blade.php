@extends('layouts.admin')

@section('content')

<style>
    .board-card {
        border-left: 6px solid #0077ff;
        border-radius: 10px;
        background: #ffffff;
        transition: .2s;
    }

    .board-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
    }

    .counter-title {
        font-size: 20px;
        font-weight: 700;
        color: #0056b3;
    }

    .advocate-badge {
        background: #e9f3ff;
        border: 1px solid #cfe3ff;
        color: #004a99;
        font-size: 13px;
    }

    .token-table tr td {
        padding: 6px 4px !important;
        font-size: 14px;
    }

    .status-badge {
        text-transform: capitalize;
        font-size: 12px;
        padding: 4px 6px;
    }

    .no-token {
        font-style: italic;
        color: #777;
        padding: 6px;
    }
</style>


<div class="page-content">
    <div class="page-container mt-4">
        <h3 class="mb-4 fw-bold text-primary">📢 Display Board</h3>

        <div class="row g-4">
            @foreach($counters as $counter)
            <div class="col-md-6 col-lg-4">

                <div class="card board-card p-3 shadow-sm">

                    <!-- Counter Name -->
                    <div class="counter-title mb-2">
                        {{ $counter->name }}
                    </div>

                    <!-- Advocate List -->
                    <div class="mb-2">
                        <strong class="text-dark">Advocates:</strong><br>
                        @forelse($counter->advocates as $adv)
                        <span class="badge advocate-badge me-1">{{ $adv->name }}</span>
                        @empty
                        <span class="text-muted">No advocates assigned</span>
                        @endforelse
                    </div>

                    <!-- Token List -->
                    <div class="mt-3">

                        @if($counter->tokens->count() == 0)
                        <div class="no-token">Idle</div>
                        @else
                        <div class="no-token">Occupied</div>
                        {{-- <table class="table table-bordered mt-2 token-table">
                            @foreach($counter->tokens->take(5) as $t)
                            <tr>
                                <td width="30%">
                                    <strong>#{{ $t->displayNumber() }}</strong>
                                </td>

                                <td width="45%">
                                    {{ $t->purpose->name }}
                                </td>

                                <td width="25%">
                                    <span class="badge status-badge
                                    @if($t->status=='completed') bg-success 
                                    @elseif($t->status=='assigned') bg-warning text-dark
                                    @else bg-secondary 
                                    @endif">
                                        {{ $t->status }}
                                    </span>
                                </td>
                            </tr>
                            @endforeach
                        </table> --}}
                        @endif
                    </div>

                </div>

            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection