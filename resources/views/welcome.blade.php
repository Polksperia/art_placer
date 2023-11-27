@extends('master')

@section('title', 'ArtPlacer')

@section('content')
    <!-- Main Screen -->
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images\Gyula-Benczúr-The-Recapture-of-Buda-Castle-in-1686-1896.jpg?auto=yes" class="d-block responsive-image" alt="First Slide">
            </div>
            <div class="carousel-item">
                <img src="images\Claude-Monet-Effect-of-Spring-Giverny-1890.jpg?auto=yes" class="d-block responsive-image" alt="Second Slide">
            </div>
            <div class="carousel-item">
                <img src="images\Katsushika-Hokusai-The-Great-Wave-off-Kanagawa-1831.jpg?auto=yes" class="d-block responsive-image" alt="Third Slide">
            </div>
        </div>
    </div>

    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <div class="bg-dark text-white p-4 rounded">
            <h1 class="font-weight-bold text-uppercase" style="font-family: 'Squada One', sans-serif;">ArtPlacer</h1>
            <div class="d-grid gap-2">
                <a href="/game" class="btn btn-primary">Play Now</a>
                <a href="#" class="btn btn-primary">Leaderboard</a>
                <a href="#" class="btn btn-primary">Playsets</a>
            </div>
        </div>
    </div>
@endsection