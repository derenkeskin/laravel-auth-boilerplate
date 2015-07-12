@extends('frontend.layouts.default')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Register</div>
          <div class="panel-body">
            @include('modules.message')
            {!! Form::open(['route' => 'register', 'class' => 'form-horizontal', 'role' => 'form']) !!}
              <div class="form-group">
                <label for="inputName" class="col-lg-3 control-label">Name</label>
                <div class="col-lg-9">
                  {!! Form::input('text', 'name', old('name'), ['id' => 'inputName', 'class' => 'form-control']) !!}
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">Email</label>
                <div class="col-lg-9">
                  {!! Form::input('email', 'email', old('email'), ['id' => 'inputEmail', 'class' => 'form-control']) !!}
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-3 control-label">Password</label>
                <div class="col-lg-9">
                  {!! Form::input('password', 'password', null, ['id' => 'inputPassword', 'class' => 'form-control']) !!}
                </div>
              </div>
              <div class="form-group">
                <label for="inputPasswordConfirm" class="col-lg-3 control-label">Confirm Password</label>
                <div class="col-lg-9">
                  {!! Form::input('password', 'password_confirmation', null, ['id' => 'inputPasswordConfirm', 'class' => 'form-control']) !!}
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-9 col-lg-offset-3">
                  {!! Form::submit('Register', ['class' => 'btn btn-primary']) !!}
                  <a href="{{ route('login') }}" class="btn btn-link">I already have an account</a>
                </div>
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
