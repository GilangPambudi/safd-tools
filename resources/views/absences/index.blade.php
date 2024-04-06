@extends('layouts.template')

@section('content')
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card" style="width: 100%;">
                <div class="card-body text-center">
                    <h2>Absence Generator</h2>
                    <p>Generate BBCode for absence 
                    <br>(This is only BBCode generator, you have to post it to Absence Reports section)
                    </p>
                    <a href="{{ url('absences/generator') }}" class="btn btn-primary btn-lg">
                        Generate
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card" style="width: 100%;">
                <div class="card-body text-center">
                    <h2>Absence Finder</h2>
                    <p>Find the absence of a member by 
                    <br>their part of name and their district up to 5 input</p>
                    <a href="{{ url('absences/finder') }}" class="btn btn-primary btn-lg">
                        Find
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    
@endpush