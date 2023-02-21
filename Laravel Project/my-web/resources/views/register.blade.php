@extends('layout.base')

@section('title', 'Register')

@section('content')
<form method="post" enctype="multipart/form-data" action="{{ route('login.registerUser') }}">
    @csrf 
    <div class="form-floating mb-3 mt-3">
        <input type="text" class="form-control" id="name" required placeholder="Enter username" name="name">
        <label for="username">User name</label>
    </div>
    <div class="form-floating mt-3 mb-3">
        <input type="text" class="form-control" id="email" required placeholder="Enter email" name="email">
        <label for="email">Email</label>
    </div>
    <div class="form-floating mt-3 mb-3">
        <input type="password" class="form-control" id="password" required placeholder="Enter password" name="password">
        <label for="password">Password</label>
    </div>
    <div class="form-floating mt-3 mb-3">
        <input type="password" class="form-control" id="confirm" required placeholder="Confirm password" name="confirm">
        <label for="confirm">Confirm password</label>
    </div>
    <div>
        <input type="submit" value="Register" class="btn btn-success" />
    </div>
</form>
@endsection