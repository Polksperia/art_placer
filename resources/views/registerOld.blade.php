Connect with the master template view
@extends('master-clean')

<!-- Give the title of the page -->
@section('title', 'Register')

<!-- Content of the page -->
@section('content')
<form action="{{ route('store') }}" method="POST">
    @csrf
    <div class="position-absolute top-50 start-50 translate-middle text-center" style="margin-top: 50px;">
        <div class="secondary-bg text-white py-3 px-4" style="width: 500px;"> <!-- Adjust the width as needed -->
            <h1 class="font-weight-bold mb-3 outlined-text" style="font-family: 'Squada One', sans-serif; font-size: 4rem;">Register</h1>
            <div class="d-grid gap-2">
                <div class="mb-2 col-lg-12 mx-auto"> <!-- Adjust the width by changing the col-lg-12 class -->
                    <label for="exampleFormControlInput3" class="form-label" style="font-family: 'Days One', sans-serif; font-size: 1.5rem;">Username</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                </div>
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
                <div class="mb-4 col-lg-12 mx-auto"> <!-- Adjust the width by changing the col-lg-12 class -->
                <label for="password_confirmation" class="col-md-4 col-form-label text-md-end text-start">Confirm Password</label>
                        <div class="col-md-6">
                          <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>
                </div>
                <div class="d-grid gap-3 col-6 mx-auto"> <!-- Adjust the width by changing the col-8 class -->
                    <input type="submit" class="btn btn-primary btn-sm rounded-pill" style="--bs-btn-font-size: 1rem; font-family: 'Days One', sans-serif;" value="Register">
                </div>
            </div>
        </div>
    </div>
</form>
@endsection