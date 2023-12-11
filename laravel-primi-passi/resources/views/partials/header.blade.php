<header class="main-header">

  <div class="container">
    <div class="logo">
      Logo
    </div>

    {{-- <div>
      <p>
{{ Route::currentRouteName() }}
      </p>
      <p>
        {{
          Request::route()->getName()
        }}
      </p>
    </div> --}}

    <ul class="menu">
      <li class="menu-item {{ Route::currentRouteName() === 'home' ? 'active' : ''}}"><a href="{{ route('home') }}">Home</a></li>
      <li class="menu-item {{ Route::currentRouteName() === 'chi-siamo' ? 'active' : ''}}"><a href="{{ route('chi-siamo')}}">Chi siamo</a></li>
    </ul>
  </div>

</header>