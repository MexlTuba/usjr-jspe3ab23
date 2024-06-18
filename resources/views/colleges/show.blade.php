@extends('layouts.app')

@section('content')
<h1>College Details</h1>
<ul class="list-group">
    <li class="list-group-item"><strong>ID:</strong> {{ $college->collid }}</li>
    <li class="list-group-item"><strong>College Name:</strong> {{ $college->collfullname }}</li>
    <li class="list-group-item"><strong>Short Name:</strong> {{ $college->collshortname }}</li>
    <li class="list-group-item"><strong>Departments:</strong>
        <ul>
            @foreach($college->departments as $department)
            <li>{{ $department->deptfullname }}</li>
            @endforeach
        </ul>
    </li>
    <li class="list-group-item"><strong>Programs:</strong>
        <ul>
            @foreach($college->programs as $program)
            <li>{{ $program->progfullname }}</li>
            @endforeach
        </ul>
    </li>
</ul>
<a href="{{ url('/show/colleges') }}" class="btn btn-secondary mt-3">Back to List</a>
@endsection