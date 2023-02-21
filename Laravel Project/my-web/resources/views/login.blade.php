@extends('layout.base')

@section('title', 'Login')

@section('content')

@if($message = Session::get('success'))
<div class="alert alert-info">
    {{ $message }}
</div>
@endif

<form action="{{ route('login.loginUser') }}" method="post">
    @csrf 
    <div class="mb-3 mt-3">
        <label for="username" class="form-label">Username:</label>
        <input type="username" class="form-control" id="name" placeholder="Enter email" name="name">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>
    <div class="form-check mb-3">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox" name="remember"> Remember me
        </label>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection