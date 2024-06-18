@extends('layouts.app')

@section('content')
<h1>All Colleges</h1>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>College Name</th>
            <th>Programs</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($colleges as $college)
        <tr>
            <td>{{ $college->collid }}</td>
            <td>{{ $college->collfullname }}</td>
            <td>
                <ul>
                    @foreach($college->programs as $program)
                    <li>{{ $program->progfullname }}</li>
                    @endforeach
                </ul>
            </td>
            <td><a href="{{ url('/show/college/' . $college->collid) }}" class="btn btn-info">Show</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection