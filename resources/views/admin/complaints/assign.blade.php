    @extends('layouts.admin')

    @section('content')
        <div class="page-content">
            <div class="page-container mt-4">

                <h3 class="mb-3 mt-3">Assign Advocates to Counter</h3>

                <div class="card shadow-sm p-4">

                    <h3 class="mb-3">Counters</h3>
                    
                    <div class="card p-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Counter Name</th>
                                    <th>Assign Advocates To Counter</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>{{ $counter->name }}</td>
                                    <td>
                                        <form action="{{ route('admin.counters.assign.save', $counter->id) }}"
                                            method="POST">
                                            @csrf
                                            <select name="advocates[]" class="form-select" multiple required>
                                                @foreach ($advocates as $advocate)
                                                    <option value="{{ $advocate->id }}"
                                                        {{ in_array($advocate->id, $assigned) ? 'selected' : '' }}>
                                                        {{ $advocate->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <button class="btn btn-success btn-sm mt-2">Save Assignments</button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ route('admin.counters.index') }}" class="btn btn-secondary btn-sm w-25">
                        Back to Counters
                    </a>
                </div>

            </div>
        </div>
    @endsection
