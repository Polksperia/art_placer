@extends('master-clean')

@section('title', 'ArtPlacer - Login')

@section('content')
<div class="position-absolute top-50 start-50 translate-middle text-center">
    <div class="secondary-bg text-white py-4 px-5" style="width: 35vw;">
        <h1 class="font-weight-bold mb-4 outlined-text-small" style="font-family: 'Squada One', sans-serif; font-size: 8rem;">Login</h1>
        <div class="d-grid gap-2">
            <form action="{{ url('/login') }}" method="POST">
                @csrf
                <div class="mb-2 col-lg-12 mx-auto">
                    <label for="email" class="form-label @error('email') is-invalid @enderror" style="font-family: 'Days One', sans-serif; font-size: 2rem;">Email Address</label>
                    <input type="email" class="form-control bg-form" style="font-family: 'Inter', sans-serif; font-size: 1.5rem;" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-5 col-lg-12 mx-auto form-group">
                    <label for="password" class="form-label" style="font-family: 'Days One', sans-serif; font-size: 2rem;">Password</label>
                    <input type="password" class="form-control bg-form @error('password') is-invalid @enderror" style="font-family: 'Inter', sans-serif; font-size: 1.5rem;" id="password" name="password" value="{{ old('password') }}"  required autocomplete="email" autofocus>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-grid gap-4 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary btn-sm rounded-pill" style="--bs-btn-font-size: 1.5rem;
                    font-family: 'Days One', sans-serif;">Login</button>
                    <p class="text" style="font-family: 'Inter', sans-serif; font-size: 1.25rem;">Don't have an account? Click <a href="{{ url('/register') }}">here to Register</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
