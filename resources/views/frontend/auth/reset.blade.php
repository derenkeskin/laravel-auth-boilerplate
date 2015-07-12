@extends('frontend.layouts.default')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
          <div class="panel-heading">Reset Password</div>
          <div class="panel-body">
            @include('modules.message')
            {!! Form::open(['to' => 'password/reset', 'class' => 'form-horizontal', 'role' => 'form']) !!}
              {!! Form::input('hidden', 'token', $token) !!}
              <div class="form-group">
                <label for="inputEmail" class="col-lg-3 control-label">Email</label>
                <div class="col-lg-9">
                  {!! Form::input('email', 'email', old('email'), ['id' => 'inputEmail', 'class' => 'form-control']) !!}
                </div>
              </div>
              <div class="form-group">
                <label for="inputPassword" class="col-lg-3 control-label">New Password</label>
                <div class="col-lg-9">
                  {!! Form::input('password', 'password', null, ['id' => 'inputPassword', 'class' => 'form-control']) !!}
                </div>
              </div>
              <div class="form-group">
                <label for="inputPasswordConfirm" class="col-lg-3 control-label">Confirm New Password</label>
                <div class="col-lg-9">
                  {!! Form::input('password', 'password_confirmation', null, ['id' => 'inputPasswordConfirm', 'class' => 'form-control']) !!}
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-9 col-lg-offset-3">
                  {!! Form::submit('Reset Password', ['class' => 'btn btn-primary']) !!}
                </div>
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
