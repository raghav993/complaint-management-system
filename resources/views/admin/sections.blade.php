@extends('layouts.admin')
@section('content')
    <div class="page-content">
        <div class="page-container">
            <div class="d-flex justify-content-between align-items-center mb-3 mt-5">
                <h1>All Sections</h1>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sections as $section)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $section->name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $sections->links() }}
        </div>
    </div>
@endsection
