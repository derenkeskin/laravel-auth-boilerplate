<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PasswordController extends Controller {

  /*
  |--------------------------------------------------------------------------
  | Password Reset Controller
  |--------------------------------------------------------------------------
  |
  | This controller is responsible for handling password reset requests
  | and uses a simple trait to include this behavior. You're free to
  | explore this trait and override any methods you wish to tweak.
  |
  */

  use ResetsPasswords;

  protected $redirectTo = '/';

  /**
   * Create a new password controller instance.
   *
   * @return void
   */
  public function __construct(){

    $this->middleware('guest');

  }

  public function getEmail(){

    return view('frontend.auth.password');

	}

  public function getReset($token = null){

    if (is_null($token)) {
      throw new NotFoundHttpException;
    }

    return view('frontend.auth.reset')->with('token', $token);
    
  }
}
