@extends('layouts.app')

@section('content')
<h1>All Students</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Program</th>
            <th>College</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
        <tr>
            <td>{{ $student->studid }}</td>
            <td>{{ $student->studfirstname }}</td>
            <td>{{ $student->studlastname }}</td>
            <td>{{ $student->program->progfullname ?? 'N/A' }}</td>
            <td>{{ $student->college->collfullname ?? 'N/A' }}</td>
            <td><a href="{{ url('/show/student/' . $student->studid) }}" class="btn btn-info">Show</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection