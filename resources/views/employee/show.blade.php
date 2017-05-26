@extends('layouts.app')

@section('content')

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    <strong> Success: </strong>{{ Session::get('success') }}
</div>
@endif
@if(count($errors) > 0)

<div class="alert alert-danger" role="alert">
    <strong>Oh snap! </strong>
    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif
<div class='row'>
    <div class='col-md-10'>
        <h1 class="text-center">All Employees</h1>
    </div>
    <div class='col-md-2'>
        <a href="{{ route('employee.create') }}" class="btn btn-lg btn-block btn-primary move">Add  new</a>
    </div>
</div>
<div class='row'>
    <div class='col-md-12'>
        <table class="table">
            <thead>
                <th>#</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Departament</th>
                <th>Email</th>
            </thead>
            <tbody>
                @foreach($employees as $emp)
                <tr>
                    <th>{{ $emp->id }}</th>
                    <td>{{ $emp->first_name}}</td>
                    <td>{{ $emp->last_name}}</td>
                    <td>{{ $emp->departament}}</td>
                    <td>{{ $emp->email}}</td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</div>

<br/>
<br/>
@endsection




