@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1 class="display-4">Welcome to USJ-R</h1>
    <p class="lead">Explore our Students, Colleges, and Departments</p>
    <hr class="my-4">
    <p>Use the buttons below to navigate through the different sections.</p>
    <a class="btn btn-primary btn-lg mx-2" href="{{ url('/show/students/all') }}" role="button">View Students</a>
    <a class="btn btn-success btn-lg mx-2" href="{{ url('/show/colleges') }}" role="button">View Colleges</a>
    <a class="btn btn-info btn-lg mx-2" href="{{ url('/show/departments') }}" role="button">View Departments</a>
</div>
@endsection