<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

  use Authenticatable, CanResetPassword;

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'user';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['name', 'username', 'email', 'password'];

  /**
   * The attributes excluded from the model's JSON form.
   *
   * @var array
   */
  protected $hidden = ['password', 'remember_token'];

  /**
   * Checks if user is admin
   */
  public function isAdmin(){
    return $this->hasRole('admin');
  }

  /**
   * Find out if user has a specific role
   */
  public function hasRole($role){
    return in_array($role, array_fetch($this->roles->toArray(), 'name'));
  }

  /**
   * Get the roles a user has
   */
  public function roles(){
    return $this->belongsToMany('App\Role', 'user_role');
  }

  /**
   * Get the auths a user has
   */
  public function auths() {
    return $this->hasMany('App\UserAuth');
  }

}
