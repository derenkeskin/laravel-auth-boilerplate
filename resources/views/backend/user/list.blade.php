@extends('backend.layouts.default')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Users List
    <small>Manage users</small>
  </h1>
  <!-- You can dynamically generate breadcrumbs here -->
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <!-- Your Page Content Here -->
  <div class='row'>
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Users</h3>
          <div class="box-tools">
            <div class="input-group" style="width: 150px;">
              <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search" />
              <div class="input-group-btn">
                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div><!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Username</th>
              <th>Email</th>
              <th>Joined</th>
              <th>Actions</th>
            </tr>
            @foreach($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->username }}</td>
              <td>{{ $user->email }}</td>
              <td>{{ date('F d, Y', strtotime($user->created_at)) }}</td>
              <td><a href="#" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></a></td>
            </tr>
            @endforeach
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div>
  </div><!-- /.row -->
</section><!-- /.content -->
@endsection
