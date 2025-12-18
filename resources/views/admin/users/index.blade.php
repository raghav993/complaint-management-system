@extends('layouts.admin')
@section('content')
    <div class="page-content">
        <div class="page-container">
            <div class="d-flex justify-content-between align-items-center mb-3 mt-5">
                <h1>User List</h1>
                <a href="{{ route('admin.users.create') }}" class="btn btn-primary">Add New User</a>
            </div>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Name</th>
                        <th>Employee Id</th>
                        <th>Service</th>
                        <th>Display</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $loop->iteration + ($users->currentPage() - 1) * $users->perPage() }}</td>
                            <td>{{ $user->UserID }}</td>
                            <td>{{ $user->Username }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->Emp_id }}</td>
                            <td>{{ $user->service }}</td>
                            <td>{{ $user->display }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
@endsection
