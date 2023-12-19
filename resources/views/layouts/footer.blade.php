<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-bottom">
  <div class="container collapse navbar-collapse d-flex justify-content-center" id="navbarNav">
    <ul class="navbar-nav me-auto">
      @guest
        @if (Route::has('login'))
        <li class="nav-item">
          <a class="nav-link text-white" style="font-family: 'Inter', sans-serif; font-size: 1.5rem;" href="{{ url('/login') }}">Login</a>
        </li>
        @endif
      @else
        <li class="nav-item">
          <a class="nav-link text-white" style="font-family: 'Inter', sans-serif; font-size: 1.5rem;" href="{{ url('/users/' . Auth::user()->id) }}">{{ Auth::user()->username }}</a>
        </li>
      @endguest
    </ul>

    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link text-white" style="font-family: 'Inter', sans-serif; font-size: 1.5rem;" href="{{ url('/about-us') }}">About ArtPlacer</a>
      </li>
    </ul>

    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link text-white" style="font-family: 'Inter', sans-serif; font-size: 1.5rem;" href="{{ url('/about-us') }}">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>