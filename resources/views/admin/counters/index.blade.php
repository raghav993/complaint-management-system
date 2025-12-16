    @extends('layouts.admin')

    @section('content')
    <div class="page-content">
        <div class="page-container mt-4">

            <h3 class="mb-3">Assign Advocates to Counter</h3>

            <div class="card shadow-sm p-4">

                <h3 class="mb-3">Counters</h3>

                <div class="card p-3">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Counter Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($counters as $counter)
                            <tr>
                                <td>{{ $counter->name }}</td>
                                <td>
                                    <a href="{{ route('admin.counters.assign.form', $counter->id) }}"
                                        class="btn btn-primary btn-sm">
                                        Assign Advocates
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    @endsection