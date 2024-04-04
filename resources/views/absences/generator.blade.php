@extends('layouts.template')

@section('content')
<div class="employeeInformation mt-4">
    <h4>A — Employee Information</h4>
    <hr>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="fullName">Full Name</label>
            <input type="text" class="form-control" id="fullName">
        </div>
        <div class="form-group col-md-4">
            <label for="departmentServing">Department Serving</label>
            <select class="form-control" id="departmentServing">
                <option disabled selected>Select Department Serving</option>
                <option value="Field">Field</option>
                <option value="Hospital">Hospital</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="district">District</label>
            <input type="text" class="form-control" id="district">
        </div>
        <div class="form-group col-md-6">
            <label for="position">Position</label>
            <select class="form-control" id="position">
                <option disabled selected>Select Department Serving</option>
                <option disabled selected>Select Rank</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="employeeBadge">Employee #</label>
            <input type="text" class="form-control" id="employeeBadge">
        </div>
    </div>
</div>

<div class="absenceDetails mt-4">
    <h4>B — Absence Details</h4>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="typeOfAbsence">Type of Absence</label>
            <select class="form-control" id="typeOfAbsence">
                <option disabled selected>Select Type of Absence</option>
                <option value="Full Absence">Full Absence</option>
                <option value="Part Absence">Part Absence</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            <label for="reasonOfAbsence">Reason of Absence</label>
            <input type="text" class="form-control" id="reasonOfAbsence">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="dateOfLeave">Date of Leave</label>
            <input type="date" class="form-control" id="dateOfLeave">
        </div>
        <div class="form-group col-md-6">
            <label for="dateOfReturn">Date of Return</label>
            <input type="date" class="form-control" id="dateOfReturn">
        </div>
    </div>

    <hr>

    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="employeeSignature">Employee Signature (Name / URL)</label>
            <input type="text" class="form-control" id="employeeSignature">
        </div>
    </div>
</div>

<div class="OutOfCharacterInformation mt-4">
    <h4>(( C — Out of Character Information ))</h4>
    <div class="form-row">
        <div class="form-group col-md-12">
            <label for="oocReasonOfAbsence">(( Reason of Absence ))</label>
            <input type="text" class="form-control" id="oocReasonOfAbsence">
        </div>
    </div>
</div>

<div class="text-center">
    <button class="btn btn-primary mr-2" onclick="generateBBcode()">Generate</button>
    <a href="{{ url('absence') }}" class="btn btn-secondary mr-2">Back</a>
</div>

<div class="generatedBBcode mt-4 mb-4">
    <h4 class="mt-4">Result</h4>
    <div class="d-flex">
        <textarea id="subject" class="form-control" rows="1" readonly></textarea>
        <button class="btn btn-success ml-2" onclick="copySubjectToClipboard()">Copy</button>
    </div>
    <div class="input-group mt-4" >
        <textarea id="generatedBBcode" class="form-control" rows="4" readonly></textarea>
        <button class="btn btn-success ml-2" onclick="copyToClipboard()">Copy</button>
    </div>
</div>
@endsection

@push('js')
    <script src="{{ asset('js/absence.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @stack('scripts')
@endpush