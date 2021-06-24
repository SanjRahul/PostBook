<div class="container-fluid py-3 top">
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="d-flex bd-highlight">
        <div class="p-2 flex-grow-1 bd-highlight"><h3>{{ config('app.name', 'Laravel') }}</h3></div>
        @guest
          @if (Route::has('login'))
            <div class="p-2 bd-highlight"><button type="button" class="btn btn-outline-primary" onclick="toggleFrom()">{{ __('Login') }}</button></div>
          @endif
          @if (Route::has('register'))
            <div class="p-2 bd-highlight"><button type="button" class="btn btn-outline-primary" onclick="toggleFrom()">{{ __('Register') }}</button></div>
          @endif
          @else
            <div class="p-0 bd-highlight"><img class="authimg float-end" src="{{ Auth::user()->image }}"></div>
            <div class="p-0 bd-highlight"><a class="dropdown-item" href="{{ url('home')}}"><i class="far fa-home"></i></a></div>
            <div class="p-0 bd-highlight"><a class="dropdown-item" href="{{ url('chat')}}"><i class="fab fa-facebook-messenger"></i></a></div>
            <div class="p-0 bd-highlight">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="{{ url('profile') }}"><i class="far fa-user"></i>My Profile</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="far fa-sign-out-alt"></i>{{ __('Logout') }}</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </ul>
            </div>
          @endguest
      </div>
    </div>
  </div>
</div>

