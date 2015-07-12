@extends('frontend.user.settings._page')

@section('settings_content')

  {!! Form::model($user, ['route' => 'settings', 'class' => 'form-horizontal', 'role' => 'form']) !!}
    <div class="form-group">
      <label for="inputName" class="col-lg-2 control-label">Name</label>
      <div class="col-lg-10">
        {!! Form::input('text', 'name', null, ['id' => 'inputName', 'class' => 'form-control']) !!}
      </div>
    </div>
    <div class="form-group">
      <label for="inputUsername" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        {!! Form::input('text', 'username', null, ['id' => 'inputUsername', 'class' => 'form-control']) !!}
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        {!! Form::input('email', 'email', null, ['id' => 'inputEmail', 'class' => 'form-control']) !!}
      </div>
    </div>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  {!! Form::close() !!}

@endsection
