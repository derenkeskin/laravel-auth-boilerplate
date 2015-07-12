@if ($errors->any())
  <div class="alert alert-danger">
    <ul class="error-list">
    @foreach ($errors->all() as $error)
      <li class="error-list__item">{{ $error }}</li>
    @endforeach
    </ul>
  </div>
@elseif (Session::has('message'))
  <div class="alert alert-{{ Session::get('message_type')}}">
    <p>{{ Session::get('message') }}</p>
  </div>
@endif
