@extends('layouts.admin')

@section('content')
    <div class="page-content">
        <div class="page-container">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-18 text-uppercase fw-bold m-0">Token Management</h4>
                        </div>
                        <div class="mt-3 mt-sm-0">
                            <a href="{{ route('admin.tokens.create') }}" class="btn btn-outline-primary">
                                <i class="ti ti-plus me-1"></i> Generate New Token
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Token Number</th>
                                        <th>Purpose</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tokens as $token)
                                        <tr>
                                            <td>{{ $token->id }}</td>
                                            <td>{{ $token->number }}</td>
                                            <td>{{ $token->purpose->name }}</td>
                                            <td>{{ $token->status }}</td>
                                            <td>
                                                <a href="{{ route('admin.tokens.show', $token->id) }}" class="btn btn-sm btn-outline-primary"><i class="ti ti-eye"></i></a>
                                                <form action="{{ route('admin.tokens.destroy', $token->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"><i class="ti ti-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
