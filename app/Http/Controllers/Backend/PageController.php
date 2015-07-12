<?php

namespace App\Http\Controllers\Backend;

use App\User;
use App\Role;
use Illuminate\Routing\Controller;

class PageController extends Controller {

  public function showDashboard(){

    return view('backend.dashboard');

  }

  public function showUsers(){

    $users = User::all();

    return view('backend.user.list')->with('users', $users);

  }

  public function showRoles(){

    $roles = Role::all();

    return view('backend.role.list')->with('roles', $roles);

  }


}
