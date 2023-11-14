<!-- Connect with the master template view -->
@extends('master')

<!-- Give the title of the page -->
@section('title', 'Homepage')

<!-- Content of the page -->
@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images\Gyula-Benczúr-The-Recapture-of-Buda-Castle-in-1686-1896.jpg?auto=yes" class="d-block w-100" alt="First Slide">
            </div>
            <div class="carousel-item">
                <img src="images\Claude-Monet-Effect-of-Spring-Giverny-1890.jpg?auto=yes" class="d-block w-100" alt="Second Slide">
            </div>
            <div class="carousel-item">
                <img src="images\Katsushika-Hokusai-The-Great-Wave-off-Kanagawa-1831.jpg?auto=yes" class="d-block w-100" alt="Third Slide">
            </div>
        </div>
    </div>
    <!-- This is section for homepage -->
@endsection