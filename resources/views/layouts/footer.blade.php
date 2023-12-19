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
        <a class="nav-link text-white" style="font-family: 'Inter', sans-serif; font-size: 1.5rem;" href="{{ url('/') }}">About ArtPlacer</a>
      </li>
    </ul>

    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link text-white" style="font-family: 'Inter', sans-serif; font-size: 1.5rem;" href="{{ url('/') }}">Contact Us</a>
      </li>
    </ul>
  </div>
</nav>

                <!-- @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest -->