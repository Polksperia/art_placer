@extends('master-clean')

@section('title', 'Login')

@section('content')

<form action="{{ route('authenticate') }}" method="POST">
    @csrf
    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <div class="secondary-bg text-white py-3 px-4" style="width: 500px;"> <!-- Adjust the width as needed -->
            <h1 class="font-weight-bold mb-3 outlined-text" style="font-family: 'Squada One', sans-serif; font-size: 4rem;">Login</h1>
            <div class="d-grid gap-2">
                <div class="mb-2 col-lg-12 mx-auto"> <!-- Adjust the width by changing the col-lg-12 class -->
                    <label for="exampleFormControlInput1" class="form-label" style="font-family: 'Days One', sans-serif; font-size: 1.5rem;">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                </div>
                <div class="mb-4 col-lg-12 mx-auto"> <!-- Adjust the width by changing the col-lg-12 class -->
                    <label for="exampleFormControlInput2" class="form-label" style="font-family: 'Days One', sans-serif; font-size: 1.5rem;">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                </div>
                <div class="d-grid gap-3 col-6 mx-auto"> <!-- Adjust the width by changing the col-8 class -->
                <input type="submit" class="btn btn-primary btn-sm rounded-pill" style="--bs-btn-font-size: 1rem; font-family: 'Days One', sans-serif;" value="Login">
                    <a href="register" class="btn btn-primary btn-sm rounded-pill" style="--bs-btn-font-size: 1rem; font-family: 'Days One', sans-serif;">Register</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection