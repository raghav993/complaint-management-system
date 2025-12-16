@extends('layouts.admin')

@section('content')
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-6">

      <div class="card shadow-sm p-4">
        <h4 class="mb-3">Generate Token</h4>
        <form action="{{ route('admin.tokens.store') }}" method="POST">
          @csrf

          <div class="mb-3">
            <label class="form-label">Choose Counter</label>
            <select name="counter_id" class="form-select" required>
              <option value="">Select counter</option>
              @foreach($counters as $c)
                <option value="{{ $c->id }}">{{ $c->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Purpose</label>
            <select name="purpose_id" class="form-select" required>
              <option value="">Select purpose</option>
              @foreach($purposes as $p)
                <option value="{{ $p->id }}">{{ $p->name }}</option>
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Notes (optional)</label>
            <textarea name="notes" class="form-control" rows="2"></textarea>
          </div>

          <button class="btn btn-primary w-100">Generate Token</button>
        </form>
      </div>

    </div>
  </div>
</div>
@endsection
