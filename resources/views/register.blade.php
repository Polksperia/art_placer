<!-- Connect with the master template view -->
@extends('master-clean')

<!-- Give the title of the page -->
@section('title', 'Register')

<!-- Content of the page -->
@section('content')
<div class="position-absolute top-50 start-50 translate-middle text-center" style="margin-top: 50px;">
    <div class="secondary-bg text-white py-3 px-4" style="width: 500px;"> <!-- Adjust the width as needed -->
        <h1 class="font-weight-bold mb-3 outlined-text" style="font-family: 'Squada One', sans-serif; font-size: 4rem;">Register</h1>
        <div class="d-grid gap-2">
            <div class="mb-2 col-lg-12 mx-auto"> <!-- Adjust the width by changing the col-lg-12 class -->
                <label for="exampleFormControlInput3" class="form-label" style="font-family: 'Days One', sans-serif; font-size: 1.5rem;">Username</label>
                <input type="username" class="form-control bg-form" style="font-family: 'Inter', sans-serif; font-size: 1rem;" id="exampleFormControlInput3">
            </div>
            <div class="mb-2 col-lg-12 mx-auto"> <!-- Adjust the width by changing the col-lg-12 class -->
                <label for="exampleFormControlInput1" class="form-label" style="font-family: 'Days One', sans-serif; font-size: 1.5rem;">Email address</label>
                <input type="email" class="form-control bg-form" style="font-family: 'Inter', sans-serif; font-size: 1rem;" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-4 col-lg-12 mx-auto"> <!-- Adjust the width by changing the col-lg-12 class -->
                <label for="exampleFormControlInput2" class="form-label" style="font-family: 'Days One', sans-serif; font-size: 1.5rem;">Password</label>
                <input type="password" class="form-control bg-form" style="font-family: 'Inter', sans-serif; font-size: 1rem;" id="exampleFormControlInput2">
            </div>
            <div class="d-grid gap-3 col-6 mx-auto"> <!-- Adjust the width by changing the col-8 class -->
                <a href="register" class="btn btn-primary btn-sm rounded-pill" style="--bs-btn-font-size: 1rem; font-family: 'Days One', sans-serif;">Register</a>
                <a href="#" class="btn btn-primary btn-sm rounded-pill" style="--bs-btn-font-size: 1rem; font-family: 'Days One', sans-serif;">Login</a>
            </div>
        </div>
    </div>
</div>
@endsection