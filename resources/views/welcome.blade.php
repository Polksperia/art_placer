<!-- Connect with the master template view -->
@extends('master')

<!-- Give the title of the page -->
@section('title', 'ArtPlacer')

<!-- Content of the page -->
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


    <!-- This is section for homepage -->
@endsection