@extends('layout.base')

@section('content')
<h1 class="page-header text-center">Edit Employee</h1>
<form action="editEmployee{{ $employees[0]->id }}" enctype="multipart/form-data" method="post" style="width: 40%; margin: auto; background-color:cyan; padding: 20px;">
    @csrf
  <div class="form-floating mb-3 mt-3" style="margin: 20px;">
    <input type="text" class="form-control" id="firstname" value="{{ $employees[0]->firstname }}" placeholder="Enter first name" name="firstname">
    <label for="text" class="form-label">First Name:</label>
  </div>
  <div class="form-floating mb-3" style="margin: 20px;">
    <input type="text" class="form-control" id="lastname" value="{{ $employees[0]->lastname }}" placeholder="Enter last name" name="lastname">
    <label for="text" class="form-label">Last Name:</label>
  </div>
  <div class="form-floating mb-3" style="margin: 20px;">
    <input type="text" class="form-control" id="positon" value="{{ $employees[0]->position }}" placeholder="Enter position" name="position">
    <label for="text" class="form-label">Position:</label>
  </div>
  <div style="margin: 20px;">
    <button type="submit" value="confirm" class="btn btn-primary">Submit</button>
  </div>
</form>
@endsection