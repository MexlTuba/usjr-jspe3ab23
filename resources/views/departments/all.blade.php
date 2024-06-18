@extends('layouts.app')

@section('content')
<h1>All Departments</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Department Name</th>
            <th>College</th>
        </tr>
    </thead>
    <tbody>
        @foreach($departments as $department)
        <tr>
            <td>{{ $department->deptid }}</td>
            <td>{{ $department->deptfullname }}</td>
            <td>{{ $department->college->collfullname }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection