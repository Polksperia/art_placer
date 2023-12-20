@extends('master-clean')

@section('title', 'ArtPlacer - Play')

@section('content')
<div class="container-fluid position-relative text-white">
  <div class="row">
    <div class="col-sm-8 p-0">
      <div class="query-container text-center">
        <h1 class="font-weight-bold mb-4 outlined-text-small" style="font-family: 'Squada One', sans-serif; font-size: 4rem;">You are correct!</h1>
        <div class="image-container">
          <img src="{{ $imageName }}" alt="Painter's Painting" class="responsive-image">
        </div>
      </div>
    </div>
    <div class="col-sm-4 text-center" style="padding-top: 8rem;">
      <div class="small-bg rounded px-4 py-4">
        <p style="font-size: 1.5rem;font-family: 'Days One', sans-serif;">This was painted by {{ $painter->name }}</p>
        <p style="font-family: 'Inter', sans-serif;">who was from {{ $painter->nationality }}, and was alive on {{ $painter->years }}.</p>
        <p style="font-family: 'Inter', sans-serif;">For more information, you can check {{ $painter->wikipedia }}</p>
        <p style="font-size: 1.5rem;font-family: 'Days One', sans-serif;">Your current streak is {{ $streak }}.</p>
        <a href="/game" class="btn btn-primary btn-sm rounded-pill me-2" style="--bs-btn-font-size: 1.5rem; font-family: 'Days One', sans-serif;">Continue</a>
        
      </div>
    </div>
  </div>
</div>
@endsection