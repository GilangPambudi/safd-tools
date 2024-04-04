@extends('layouts.template')

@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card" style="width: 100%;">
                <div class="card-body text-center">
                    <h2>Absence Generator</h2>
                    <a href="{{ url('absences/generator') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-pencil-alt"></i> <!-- Font Awesome icon for 'Edit' -->
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 100%;">
                <div class="card-body text-center">
                    <h2>Absence Finder</h2>
                    <a href="{{ url('absences/finder') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-search"></i> <!-- Font Awesome icon for 'Find' -->
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    
@endpush