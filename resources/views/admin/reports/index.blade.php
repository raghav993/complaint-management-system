@extends('layouts.admin')
@section('content')
    <div class="page-content">
        <div class="page-container">
            <div class="d-flex justify-content-between align-items-center mb-3 mt-5">
                <h1>All Reports</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $cdata)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $cdata->name ?? '--' }}</td>
                                            <td>{{ $cdata->email ?? '--' }}</td>
                                            <td>{{ $cdata->email ?? '--' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            {{-- {{ $data->links() }} --}}
        </div>
    </div>
@endsection
