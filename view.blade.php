@extends('student.layouts.app')
 
@section('content')
    <div class="row">
        <div class="col-lg-11">
                <h2>Laravel 8 CRUD Example</h2>
        </div>
        <div class="col-lg-1">
            <a class="btn btn-primary" href="{{ url('student') }}"> Back</a>
        </div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>First Name:</th>
            <td>{{ $student->first_name }}</td>
        </tr>
        <tr>
            <th>Last Name:</th>
            <td>{{ $student->first_name }}</td>
        </tr>
        <tr>
            <th>Address:</th>
            <td>{{ $student->address }}</td>
        </tr>
 
    </table>
@endsection
