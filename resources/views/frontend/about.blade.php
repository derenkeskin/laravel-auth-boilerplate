@extends('frontend.layouts.default')

@section('content')
  <div class="container">

    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">About</div>
          <div class="panel-body">
            <p class="lead">Laravel 5.1 boilerplate to build a website that implements authentication.</p>

            <h3>Features</h3>
            <ul class="features__list features__list--nopadding">
              <li>
                Authentication
                <ul class="features__list">
                  <li>Registration and Login by Email</li>
                  <li>Social authentication (Facebook, Twitter & Google+) using <a href="https://github.com/laravel/socialite">Socialite</a></li>
                  <li>Account settings</li>
                  <li>Password Reset</li>
                </ul>
              </li>
              <li>User Roles</li>
              <li>
                Administration Panel Ready
                <ul class="features__list">
                  <li><a href="https://almsaeedstudio.com/blog/features-of-adminlte-2.1">AdminLTE 2.1</a> Control Panel Template</li>
                </ul>
              </li>
              <li>Separated Frontend & Backend Controllers</li>
              <li>HTML5 Boilerplate & Bootstrap (<a href="http://bootswatch.com/lumen/">Bootswatch</a>)</li>
            </ul>

            <p class="text-center">
              <a href="https://www.github.com/derenkeskin/laravel-auth-boilerplate" class="btn btn-default">Check it on Github!</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
