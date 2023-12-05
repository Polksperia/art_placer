@extends('master-clean')

@section('title', 'About Us')

@section('head')
  <!-- Include Inter font from Google Fonts CDN -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
@endsection

@section('content')

  <!-- About Us -->
<div class="card mb-3 text-center bg-dark border-0" style="margin: 140px; position: relative; padding: 0;">
  <div style="position: absolute; top: 0; left: 0; right: 0; height: 2px; background-color: #646566;"></div>

  <h5 class="card-title d-flex align-items-center justify-content-center text-light" style="height: 100px; font-family: 'Days One', sans-serif; font-size: 1.5rem;">About ArtPlacer</h5>
  <img src="{{ asset('images/artplacer-icon.png') }}" class="card-img-top mx-auto d-block" alt="..." style="width: 120px; height: 120px;">

  <div class="card-body">
    <p class="card-text text-light" style="font-family: 'Inter', sans-serif; margin-top: 10px;">ArtPlacer is a website that lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada neque in cursus eleifend. In maximus elementum nulla, quis ullamcorper diam rhoncus at. Suspendisse egestas vulputate nulla, at sollicitudin eros. Nam hendrerit risus in consectetur tempor. Vivamus tincidunt nulla eget lacus porta, non luctus ex convallis. Cras gravida nibh at metus tincidunt, ut venenatis dolor euismod. Quisque molestie pellentesque lacinia. Integer feugiat sollicitudin purus at egestas. Maecenas iaculis tincidunt lacus vel ultrices.</p>
  </div>

  <div style="position: absolute; bottom: 0; left: 0; right: 0; height: 2px; background-color: #646566;"></div>

    <!-- Contact Us -->
  <!-- Contact Us Button -->
  <div class="d-grid mx-auto" style="max-width: 200px;">
    <button type="button" class="btn btn-primary" style="background-color: #212529; border-color: #d9d9d9; margin-bottom: 25px; font-size: 1.3rem;" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Contact Us
    </button>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="background-color: #212529; color: white; font-family: 'Inter', sans-serif;">
        <div class="modal-header text-center">
          <h1 class="modal-title fs-5" id="exampleModalLabel" style="font-size: 32rem;">Contact Us</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- Form -->
          <div class="mb-3" style="text-align: left;">
            <label for="exampleFormControlInput1" class="form-label">Email :</label>
              <input type="email" class="form-control bg-form" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="mb-3" style="text-align: left;">
            <label for="exampleFormControlInput1" class="form-label">Subject :</label>
            <input type="email" class="form-control bg-form" id="exampleFormControlInput1">
          </div>
          <div class="mb-3" style="text-align: left;">
            <label for="exampleFormControlTextarea1" class="form-label">Comment :</label>
            <textarea class="form-control bg-form" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Submit</button>
        </div>
      </div>
    </div>
  </div>

</div>


@endsection
