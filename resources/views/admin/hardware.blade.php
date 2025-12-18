@extends('layouts.admin')
@section('content')
    <div class="page-content">
        <div class="page-container">
            <div class="d-flex justify-content-between align-items-center mb-3 mt-5">
                <h1>All Hardware Engineers</h1>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                        <th>Mobile</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($engineers as $engineer)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $engineer->name }}</td>
                            <td>{{ $engineer->mobile }}</td>
                            <td>{{ $engineer->active }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $engineers->links() }}
        </div>
    </div>
@endsection
