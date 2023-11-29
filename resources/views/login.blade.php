<!-- Connect with the master template view -->
@extends('master-clean')

<!-- Give the title of the page -->
@section('title', 'Login')

<!-- Content of the page -->
@section('content')
<div class="position-absolute top-50 start-50 translate-middle text-center">
    <div class="bg-dark text-white p-4 rounded">
        <h1 class="font-weight-bold text-uppercase" style="font-family: 'Squada One', sans-serif;">Login</h1>
        <div class="d-grid gap-2">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleFormControlInput2"></input>
            </div>
            <a href="#" class="btn btn-primary">Login</a>
            <a href="register" class="btn btn-primary">Register</a>
        </div>
    </div>
</div>
@endsection