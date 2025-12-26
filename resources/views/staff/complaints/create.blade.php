<!-- resources/views/tokens/create.blade.php -->
@extends('layouts.staff')

@section('content')
    <div class="page-content">
        <div class="page-container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="page-title-head d-flex align-items-sm-center flex-sm-row flex-column">
                        <div class="flex-grow-1">
                            <h4 class="fs-18 text-uppercase fw-bold m-0">Raise a Complaint</h4>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="text-muted fs-13 text-uppercase mb-4">Please Fill the Details</h5>
                            <form method="POST" action="{{ route('complaint.store') }}">
                                @csrf
                                <table class="table table-bordered">

                                    {{-- Device Name / Item --}}
                                    <tr>
                                        <th>Device Name</th>
                                        <td>
                                            <select name="item_id" id="item_id" class="form-control" required>
                                                <option value="">Select Device</option>
                                                @foreach ($items as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('item_id')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>

                                    {{-- Serial Number --}}
                                    <tr>
                                        <th>Serial Number</th>
                                        <td>
                                            <input type="text" name="sr_no" id="sr_no" class="form-control"
                                                required />
                                            <small>(s/n: Serial number is written on the back of the device.)</small>
                                            @error('sr_no')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>

                                    {{-- Company Name --}}
                                    <tr>
                                        <th>Company Name</th>
                                        <td>
                                            <input type="text" name="company" id="company" class="form-control"
                                                required />
                                            @error('company')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>

                                    {{-- Product / Model Number --}}
                                    <tr>
                                        <th>Product Number</th>
                                        <td>
                                            <input type="text" name="model_no" id="model_no" class="form-control"
                                                required />
                                            <small>(p/n: Number is written below the serial number on the back of the
                                                device.)</small>
                                            @error('model_no')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>

                                    {{-- Section / Department --}}
                                    <tr>
                                        <th>Department / Section</th>
                                        <td>
                                            <select name="section_id" id="section_id" class="form-control" required>
                                                <option value="">Select Section</option>
                                                @foreach ($sections as $section)
                                                    <option value="{{ $section->id }}">{{ $section->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('section_id')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>

                                    {{-- Your Name --}}
                                    <tr>
                                        <th>Your Name</th>
                                        <td>
                                            <input type="text" name="person_name" id="person_name" class="form-control"
                                                required />
                                            @error('person_name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>

                                    {{-- Problem Description --}}
                                    <tr>
                                        <th>Problem Description</th>
                                        <td>
                                            <textarea name="problem" id="problem" cols="30" rows="3" class="form-control" required></textarea>
                                            @error('problem')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </td>
                                    </tr>

                                    {{-- Submit Button --}}
                                    <tr>
                                        <td colspan="2" class="text-center">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </td>
                                    </tr>

                                </table>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
