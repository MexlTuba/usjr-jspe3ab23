@extends('layouts.app')

@section('content')
<h1>Student Details</h1>
<ul class="list-group">
    <li class="list-group-item"><strong>ID:</strong> {{ $student->studid }}</li>
    <li class="list-group-item"><strong>First Name:</strong> {{ $student->studfirstname }}</li>
    <li class="list-group-item"><strong>Last Name:</strong> {{ $student->studlastname }}</li>
    <li class="list-group-item"><strong>Middle Name:</strong> {{ $student->studmidname }}</li>
    <li class="list-group-item"><strong>Program:</strong> {{ $student->program->progfullname ?? 'N/A' }}</li>
    <li class="list-group-item"><strong>College:</strong> {{ $student->college->collfullname ?? 'N/A' }}</li>
    <li class="list-group-item"><strong>Year:</strong> {{ $student->studyyear }}</li>
</ul>
<a href="{{ url('/show/students/all') }}" class="btn btn-secondary mt-3">Back to List</a>
@endsection