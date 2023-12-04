@extends('master-clean')

@section('title', 'ArtPlacer - Play')

@section('content')
<div class="container-fluid position-relative">
  <div class="row text-white">
    <div class="col-sm-8 p-0">
      <div class="query-container text-center">
        <h1 class="font-weight-bold mb-4 outlined-text" style="font-family: 'Squada One', sans-serif; font-size: 4rem;">Guess!</h1>
        <p>This rectangle fills the left half of the screen.</p>
      </div>
    </div>
    <div class="col-sm-4 justify-content-end">
      <div class="small-bg rounded px-4">
        <p style="font-size: 1.5rem;font-family: 'Days One', sans-serif;">Streak:</p>
      </div>
    </div>
  </div>
</div>
<div id="map-container">
  <div id="map" style="height: 100vh;"></div>
</div>
@endsection