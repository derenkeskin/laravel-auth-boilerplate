@extends('frontend.layouts.default')

@section('content')
  <div class="container">
    @include('modules.message') 
    <div class="jumbotron">
      <h1>Laravel Auth Boilerplate</h1>
      <p>Laravel 5.1 boilerplate to build a website that implements authentication.</p>
      <p><a class="btn btn-primary" href="{{ route('about') }}">Learn more</a> <a class="btn btn-default" href="http://www.github.com/derenkeskin/laravel-auth-boilerplate">Check it on Github!</a></p>
    </div>
  </div>
@endsection
