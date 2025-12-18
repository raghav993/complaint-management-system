@extends('layouts.user')

@section('content')

<style>
    .print-card {
        max-width: 450px;
        margin: 40px auto;
        border: 2px solid;
        /* Clean, visible border */
        border-color: #e5e7eb;
        /* Light mode: gray-200 */
        background-color: #ffffff;
        /* Light mode: white */
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        text-align: center;
        color: #1f2937;
        /* Light mode: gray-800 */
    }

    .token-number {
        font-size: 70px;
        font-weight: 800;
        margin: 10px 0;
        line-height: 1;
        color: #091b90ff;

    }

    .details p {
        font-size: 16px;
        margin: 4px 0;
    }

    @media print {
        .no-print {
            display: none !important;
        }

        body {
            background: white;
        }
    }
</style>

<div class="print-card">

    <h3 class="mb-3" style="letter-spacing: 1px;">TOKEN</h3>

    <div class="token-number">
        {{ $token->number }}
    </div>

    <div class="details text-start mt-4">

        <p><strong>Counter:</strong> {{ $token->counter->name }}</p>

        <p><strong>Purpose:</strong> {{ $token->purpose->name }}</p>

        @if($token->notes)
        <p><strong>Notes:</strong> {{ $token->notes }}</p>
        @endif

        <p><strong>Date:</strong> {{ $token->created_at->format('d/m/Y h:i A') }}</p>
    </div>

    <button onclick="window.print()" class="btn btn-primary mt-4 no-print">
        Print Token
    </button>

</div>

@endsection