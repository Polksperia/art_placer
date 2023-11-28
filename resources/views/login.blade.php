@extends('master-clean')

@section('title', 'Login')

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
                <label for="exampleFormControlInput2" class="form-label">password</label>
                <input class="form-control" id="exampleFormControlInput2"></input>
            </div>
            <a href="#" class="btn btn-primary">Login</a>
            <a href="#" class="btn btn-primary">Register</a>
        </div>
    </div>
</div>
@endsection