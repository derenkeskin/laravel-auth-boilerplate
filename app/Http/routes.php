<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Controllers Within The "App\Http\Controllers\Frontend" Namespace
Route::group(['namespace' => 'Frontend'], function(){

  Route::get('/', array(
    'uses' => 'PageController@showHome',
    'as'   => 'home'
  ));

  Route::get('about', array(
    'uses' => 'PageController@showAbout',
    'as'   => 'about'
  ));

  Route::get('user/{id}', array(
    'uses' => 'UserController@showProfile',
    'as'   => 'profile'
  ));

  // Route accessible to guest user only
  Route::group(['middleware' => 'guest'], function(){

    Route::match(array('get', 'post'), 'login', array(
      'uses' => 'Auth\AuthController@login',
      'as'   => 'login'
    ));

    Route::match(array('get', 'post'), 'register', array(
      'uses' => 'Auth\AuthController@register',
      'as'   => 'register'
    ));

    Route::get('login/{provider}', array(
      'uses' => 'Auth\AuthController@auth',
      'as'   => 'auth'
    ));

    Route::get('login/{provider}/callback', 'Auth\AuthController@authCallback');

    Route::controller('password', 'Auth\PasswordController');

  });

  // Route accessible to auth user only
  Route::group(['middleware' => 'auth'], function(){

    Route::match(array('get', 'post'), 'settings/{page?}', array(
      'uses' => 'UserController@settings',
      'as'   => 'settings'
    ));

    Route::get('logout', array(
      'uses' => 'Auth\AuthController@logout',
      'as'   => 'logout'
    ));

  });

});

// Controllers Within The "App\Http\Controllers\Backend" Namespace
Route::group(['namespace' => 'Backend', 'middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function(){

  Route::get('/', array(
    'uses' => 'PageController@showDashboard',
    'as'   => 'dashboard'
  ));

  Route::get('users', array(
    'uses' => 'PageController@showUsers',
    'as'   => 'admin.users'
  ));

  Route::get('roles', array(
    'uses' => 'PageController@showRoles',
    'as'   => 'admin.roles'
  ));

});
