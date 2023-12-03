<!-- Connect with the master template view -->
@extends('master')

<!-- Give the title of the page -->
@section('title', 'Register')

<!-- Content of the page -->
@section('content')
<div class="position-absolute top-50 start-50 translate-middle text-center">
    <div class="bg-light p-4 rounded">
        <h1 class="font-weight-bold text-uppercase" style="font-family: 'Squada One', sans-serif;">Register</h1>
        <div class="d-grid gap-2">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Create password</label>
                <input type="password" class="form-control" id="exampleFormControlInput2">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Verify password</label>
                <input type="password" class="form-control" id="exampleFormControlInput3"></input>
            </div>
            <a href="#" class="btn btn-primary">Register</a>
            <p class="text">Already have an account? Click <a href="login">here to Login</a></p>
        </div>
    </div>
</div>
@endsection