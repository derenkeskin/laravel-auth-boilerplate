<div class="container">
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ route('home') }}">Laravel Auth Boilerplate</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('home') }}">Welcome</a></li>
          <li class="{{ Request::is('about') ? 'active' : '' }}"><a href="{{ route('about') }}">About</a></li>
          <li><a href="http://www.github.com/derenkeskin/laravel-auth-boilerplate">Github</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          @if(Auth::guest())
            <li class="{{ Request::is('login') ? 'active' : '' }}"><a href="{{ route('login') }}">Login</a></li>
            <li class="{{ Request::is('register') ? 'active' : '' }}"><a href="{{ route('register') }}">Register</a></li>
          @else
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li class="{{ Request::is('profile') ? 'active' : '' }}"><a href="{{ route('profile', [Auth::user()->id]) }}">View Profile</a></li>
                <li class="divider"></li>
                <li class="{{ Request::is('settings') ? 'active' : '' }}"><a href="{{ route('settings') }}">Settings</a></li>
                <li><a href="{{ route('logout') }}">Log out</a></li>
                @if(Auth::user()->isAdmin())
                <li class="divider"></li>
                <li><a href="{{ route('dashboard') }}">Admin</a></li>
                @endif
              </ul>
            </li>
          @endif
        </ul>
      </div>
    </div>
  </nav>
</div>
