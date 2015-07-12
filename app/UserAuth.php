<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserAuth extends Model {

  /**
   * The database table used by the model.
   *
   * @var string
   */
  protected $table = 'user_auth';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = ['provider', 'uid'];

  /**
   * Indicates if the model should be timestamped.
   *
   * @var bool
   */
  public $timestamps = false;


  /**
   * Get the user of a certain auth
   */
  public function user(){
    return $this->belongsTo('App\User');
  }

}
