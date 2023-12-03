@extends('master-clean')

@section('title', 'Login')

@section('content')
<div class="position-absolute top-50 start-50 translate-middle text-center">
    <div class="secondary-bg text-white py-4 px-5">
        <h1 class="font-weight-bold mb-4 outlined-text" style="font-family: 'Squada One', sans-serif; font-size: 8rem;">Login</h1>
        <div class="d-grid gap-2">
            <div class="mb-2 col-lg-12 mx-auto">
                <label for="exampleFormControlInput1" class="form-label" style="font-family: 'Days One', sans-serif; font-size: 2rem;">Email address</label>
                <input type="email" class="form-control bg-form" style="font-family: 'Inter', sans-serif; font-size: 1.5rem;" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-5 col-lg-12 mx-auto">
                <label for="exampleFormControlInput2" class="form-label" style="font-family: 'Days One', sans-serif; font-size: 2rem;">Password</label>
                <input type="password" class="form-control bg-form" style="font-family: 'Inter', sans-serif; font-size: 1.5rem;" id="exampleFormControlInput2"></input>
            </div>
            <div class="d-grid gap-4 col-6 mx-auto">
                <a href="#" class="btn btn-primary btn-sm rounded-pill" style="--bs-btn-font-size: 1.5rem;
                font-family: 'Days One', sans-serif;">Login</a>
                <a href="register" class="btn btn-primary btn-sm rounded-pill" style="--bs-btn-font-size: 1.5rem;
                font-family: 'Days One', sans-serif;">Register</a>
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
