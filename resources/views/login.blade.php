@extends('master-clean')

@section('title', 'Login')

@section('content')

<div class="position-absolute top-50 start-50 translate-middle text-center">
    <div class="secondary-bg text-white py-3 px-4" style="width: 500px;"> <!-- Adjust the width as needed -->
        <h1 class="font-weight-bold mb-3 outlined-text" style="font-family: 'Squada One', sans-serif; font-size: 4rem;">Login</h1>
        <div class="d-grid gap-2">
            <div class="mb-2 col-lg-12 mx-auto"> <!-- Adjust the width by changing the col-lg-12 class -->
                <label for="exampleFormControlInput1" class="form-label" style="font-family: 'Days One', sans-serif; font-size: 1.5rem;">Email address</label>
                <input type="email" class="form-control bg-form" style="font-family: 'Inter', sans-serif; font-size: 1rem;" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-4 col-lg-12 mx-auto"> <!-- Adjust the width by changing the col-lg-12 class -->
                <label for="exampleFormControlInput2" class="form-label" style="font-family: 'Days One', sans-serif; font-size: 1.5rem;">Password</label>
                <input type="password" class="form-control bg-form" style="font-family: 'Inter', sans-serif; font-size: 1rem;" id="exampleFormControlInput2">
            </div>
            <div class="d-grid gap-3 col-6 mx-auto"> <!-- Adjust the width by changing the col-8 class -->
                <a href="#" class="btn btn-primary btn-sm rounded-pill" style="--bs-btn-font-size: 1rem; font-family: 'Days One', sans-serif;">Login</a>
                <a href="register" class="btn btn-primary btn-sm rounded-pill" style="--bs-btn-font-size: 1rem; font-family: 'Days One', sans-serif;">Register</a>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- 
<div class="position-absolute top-50 start-50 translate-middle text-center">
        <div class="main-bg text-white py-4 px-5">
            <h1 class="font-weight-bold text-uppercase" style="font-family: 'Squada One', sans-serif; font-size: 8rem;">ArtPlacer</h1>
            <div class="d-grid gap-4 col-6 mx-auto">
                <a href="/game" class="btn btn-primary btn-sm rounded-pill" style="--bs-btn-font-size: 2rem;
                font-family: 'Days One', sans-serif;">Play Now</a>
                <a href="#" class="btn btn-primary btn-sm rounded-pill" style="--bs-btn-font-size: 2rem;
                font-family: 'Days One', sans-serif;">Leaderboard</a>
                <a href="#" class="btn btn-primary btn-sm rounded-pill" style="--bs-btn-font-size: 2rem;
                font-family: 'Days One', sans-serif;">Playsets</a>
            </div>
        </div>
    </div>
-->
