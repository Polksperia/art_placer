@extends('master-clean')

@section('title', 'ArtPlacer - Edit')

@section('content')
<div class="position-absolute top-50 start-50 translate-middle">
    <div class="secondary-bg text-white px-5" style="width: 65vw;">
        <h1 class="font-weight-bold outlined-text-small text-center" style="font-family: 'Squada One', sans-serif; font-size: 8rem;">Edit Account</h1>
        <hr>
        <div class="d-grid gap-2">

            <form action="/users/{{ $user->id }}" method="POST">
                @method('PUT')

                @csrf
                <div class="mb-2 mt-4 col-lg-12 row form-group">
                    <div class="col-lg-4">
                        <label for="username" class="form-label" style="font-family: 'Days One', sans-serif; font-size: 2rem;">Change Username: </label>
                    </div>
                    <div class="col-lg-5">
                        <input type="text" class="form-control bg-form" style="font-family: 'Inter', sans-serif; font-size: 1.5rem;" id="username" name="username" placeholder="username" value="{{ old('username') ??  $user->username }}">
                    </div>
                    @error('username')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-5 mt-4 col-lg-12 row form-group">
                    <div class="col-lg-4">
                        <label for="password" class="form-label" style="font-family: 'Days One', sans-serif; font-size: 2rem;">Change Password: </label>
                    </div>
                    <div class="col-lg-5">
                    <input type="password" class="form-control bg-form" style="font-family: 'Inter', sans-serif; font-size: 1.5rem;" id="password" name="password" value="{{ old('password') }}">
                    </div>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="row justify-content-end">
                    <div class="mb-4 col-lg-6 text-end">
                        <button type="submit" class="btn btn-primary btn-sm rounded-pill me-2" style="--bs-btn-font-size: 1.5rem; font-family: 'Days One', sans-serif;">Confirm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection