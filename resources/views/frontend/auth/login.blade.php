@extends('frontend.layouts.default')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Login</div>
          <div class="panel-body">
            @include('modules.message')
            {!! Form::open(['route' => 'login', 'class' => 'form-horizontal', 'role' => 'form', 'novalidate' => 'novalidate']) !!}
              <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-10">
                  {!! Form::input('email', 'email', old('email'), ['id' => 'inputEmail', 'class' => 'form-control']) !!}
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                <div class="col-lg-10">
                  {!! Form::input('password', 'password', null, ['id' => 'inputPassword', 'class' => 'form-control']) !!}
                  <div class="checkbox">
                    <label>
                      {!! Form::checkbox('remember') !!} Remember me?
                    </label>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-10 col-lg-offset-2">
                  {!! Form::submit('Login', ['class' => 'btn btn-primary']) !!}
                  <a href="{{ url('password/email') }}" class="btn btn-link">Forgot your password?</a>

                  <p class="text-center text-uppercase"><strong>or</strong></p>
                  <div class="btn-group btn-group-justified">
                    <a href="{{ route('auth', ['provider' => 'facebook']) }}" class="btn btn-facebook"><span class="hidden-xs">Login with </span>Facebook</a>
                    <a href="{{ route('auth', ['provider' => 'twitter']) }}" class="btn btn-twitter"><span class="hidden-xs">Login with </span>Twitter</a>
                    <a href="{{ route('auth', ['provider' => 'google']) }}" class="btn btn-google"><span class="hidden-xs">Login with </span>Google+</a>
                    <a href="{{ route('register') }}" class="btn btn-default">Register<span class="hidden-xs"> with Email</span></a>
                  </div>
                </div>
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
