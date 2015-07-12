@extends('frontend.layouts.default')

@section('content')
  <div class="container">
    <h1>Settings</h2>

    @include('frontend.user.settings._nav')

    @include('modules.message')

    @yield('settings_content')
  </div>
@endsection
