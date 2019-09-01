<!-- Navbar -->
<div class="navbar-fixed">
  <nav class="teal">
    <div class="container" style="width: 85%;">
      <div class="nav-wrapper">

        <a href="{{ url('/') }}" class="brand-logo">Edutrip</a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger">
          <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">

          <li>
            <a href="{{ url('/') }}">Home</a>
          </li>
          <li>
            <a href="#">About</a>
          </li>
          <li>
            <a class="dropdown-trigger" href="#" data-target="dropdown-menu">Categories<i class="material-icons right">arrow_drop_down</i></a>
          </li>
          @if(empty(Auth::check()))
              <li><a href="{{ url('/login-register') }}">Login</a></li>
            @else
              <li><a href="{{ url('/my-reservations') }}">Reservations</a></li>
              <li><a class="dropdown-trigger" href="" data-target="dropdown-menu1">{{ auth()->user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
            @endif
        </ul>
        <ul id="dropdown-menu" class="dropdown-content">
          @foreach($categoriesAll as $category)
          <li><a href="{{ asset('/events/'.$category->url) }}">{{ $category->name }}</a></li>
          @endforeach
        </ul>
        <ul id="dropdown-menu1" class="dropdown-content">
          <li>
            <a href="{{ url('/account') }}">Account</a>
            <a href="{{ url('/messages') }}">Messages</a>
            <a href="{{ url('/user-logout') }}">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<ul class="sidenav" id="mobile-nav">
  <li>
    <a href="#home">Home</a>
  </li>
  <li>
    <a href="#search">Search</a>
  </li>
  <li>
    <a href="#popular">Popular Places</a>
  </li>
  <li>
    <a href="#gallery">Gallery</a>
  </li>
  <li>
    <a href="#contact">Contact</a>
  </li>
</ul>