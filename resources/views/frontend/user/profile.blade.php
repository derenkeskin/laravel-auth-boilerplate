@extends('frontend.layouts.default')

@section('content')
  <div class="container">
    <h1>{{ $user->name }}</h2>

    <p>User profile page</p>
  </div>
@endsection
