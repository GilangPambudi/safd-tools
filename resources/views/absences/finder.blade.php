@extends('layouts.template')

@section('content')
    <div class="input mt-4" id="formContainer">
        <select class="form-control mt-4 mb-4" id="category">
            <option disabled selected>Select Category</option>
            <option value="topic">Search by part of name</option>
            <option value="message">Search by district </option>
        </select>
        <div class="d-flex form-group col-md-14">
            <input type="text" class="form-control" id="input1">
            <button class="btn btn-success ml-2 md-4" type="button" onclick="addForm(2)">
                <span class="plus">Add</span>
            </button>
        </div>
    </div>

    <div class="text-center mb-1">
        <button class="btn btn-primary" onclick="submit()"> Find </button>
    </div>

    <div class="text-center">
        <button class="btn btn-danger" onclick="location.reload()">Clear</button>
        <a href="{{ url('absences') }}" class="btn btn-secondary">Back</a>
    </div>
@endsection

@push('js')
    <script src="{{ asset('js/finder.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')
@endpush