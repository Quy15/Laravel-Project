@extends('layout.base')

@section('content')
<h1 class="page-header text-center">Employees List</h1>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h2>Employees Table
            <button type="button" id="add" class="btn btn-primary pull-right"><i class="fa fa-plus"></i>Employee</button>
        </h2>
    </div>
</div>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <table class="table table-bordered table-responsive table-stripped">
            <thead>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Position</th>
            </thead>
            <tbody id="employeeBody">
                @foreach($employee as $employees)
                <tr>
                    <td>{{ $employees->firstname }}</td>
                    <td>{{ $employees->lastname }}</td>
                    <td>{{ $employees->position }}</td>
                    <td>
                        <a href="{{ url('/edit'.$employees->id) }}" class='btn btn-success' data-id=''>Edit</a>
                        <a href="" class='btn btn-danger' data-id=''>Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex">
            {!! $employee->links() !!}
        </div>
    </div>
</div>
@endsection

