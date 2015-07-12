<ul class="nav nav-pills">
  <li class="{{ Request::is('settings') ? 'active' : '' }}"><a href="{{ route('settings') }}">Profile</a></li>
  <li class="{{ Request::is('settings/example') ? 'active' : '' }}"><a href="{{ route('settings', 'example') }}">Example menu</a></li>
  <li class="disabled"><a href="#">Other menu</a></li>
</ul>

<hr style="margin-bottom:20px" />
