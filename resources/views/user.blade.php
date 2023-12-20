@extends('master-clean')

@section('title', 'ArtPlacer - Account')

@section('content')
<div class="position-absolute top-50 start-50 translate-middle">
    <div class="secondary-bg text-white px-5" style="width: 65vw;">
        <h1 class="font-weight-bold outlined-text-small text-center" style="font-family: 'Squada One', sans-serif; font-size: 8rem;">Account</h1>
        <hr>
        <div class="d-grid gap-2">
            <div class="mb-2 mt-4 col-lg-12">
                <p class="text" style="font-family: 'Days One', sans-serif; font-size: 2rem; white-space: nowrap;">Username: {{ $user->username }}</p>
            </div>
            <div class="mb-2 col-lg-12">
                <p class="text" style="font-family: 'Days One', sans-serif; font-size: 2rem; white-space: nowrap;">Email: {{ $user->email }}</p>
            </div>
            <div class="mb-5 col-lg-12">
                <p class="text" style="font-family: 'Days One', sans-serif; font-size: 2rem; white-space: nowrap;">Highest Streak: {{ $user->highest_streak }}</p>
            </div>
            <div class="row justify-content-end">
                <div class="mb-4 col-lg-6 text-end">
                    <div style="display: inline-block;">
                        <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-primary btn-sm rounded-pill me-2" style="--bs-btn-font-size: 1.5rem; font-family: 'Days One', sans-serif;">Edit Account</a>
                    </div>
                    <div style="display: inline-block;">
                        <a href="{{ route('users.logout', ['user' => $user->id]) }}" class="btn btn-primary btn-sm rounded-pill me-2" style="--bs-btn-font-size: 1.5rem; font-family: 'Days One', sans-serif;">Logout</a>
                    </div>
                    <div style="display: inline-block;">
                        <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm rounded-pill" style="--bs-btn-font-size: 1.5rem; font-family: 'Days One', sans-serif;">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection