@extends('master')

@section('title', 'ArtPlacer')

@section('header')
@endsection

@section('content')
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="images\Gyula-Benczúr-The-Recapture-of-Buda-Castle-in-1686-1896.jpg?auto=yes" class="d-block w-100" alt="First Slide">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="images\Claude-Monet-Effect-of-Spring-Giverny-1890.jpg?auto=yes" class="d-block w-100" alt="Second Slide">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="images\Katsushika-Hokusai-The-Great-Wave-off-Kanagawa-1831.jpg?auto=yes" class="d-block w-100" alt="Third Slide">
                </div>
            </div>
        </div>

        <div class="position-absolute top-50 start-50 translate-middle text-center">
            <div class="bg-light p-4 rounded">
                <h1 class="font-weight-bold text-uppercase" style="font-family: 'Squada One', sans-serif;">ArtPlacer</h1>
                <div class="d-grid gap-2">
                    <a href="#" class="btn btn-primary">Play Now</a>
                    <a href="#" class="btn btn-primary">Leaderboard</a>
                    <a href="#" class="btn btn-primary">Playsets</a>
                </div>
            </div>
        </div>
    </div>

    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <div class="main-bg text-white py-4 px-5">
            <h1 class="font-weight-bold text-uppercase outlined-text" style="font-family: 'Squada One', sans-serif; font-size: 8rem;">ArtPlacer</h1>
            <div class="d-grid gap-4 col-6 mx-auto">
                <a href="/game" class="btn btn-primary btn-sm rounded-pill" style="--bs-btn-font-size: 1.5rem;
                font-family: 'Days One', sans-serif;">Play Now</a>
                <a href="#" class="btn btn-primary btn-sm rounded-pill" style="--bs-btn-font-size: 1.5rem;
                font-family: 'Days One', sans-serif;">Leaderboard</a>
                <a href="#" class="btn btn-primary btn-sm rounded-pill" style="--bs-btn-font-size: 1.5rem;
                font-family: 'Days One', sans-serif;">Playsets</a>
            </div>
        </div>
    </div>
@endsection