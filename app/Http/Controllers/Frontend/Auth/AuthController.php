<?php

namespace App\Http\Controllers\Frontend\Auth;

use App\User;
use App\UserAuth;
use Auth;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Contracts\Factory as Socialite;

class AuthController extends Controller {
  /*
  |--------------------------------------------------------------------------
  | Registration & Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users, as well as the
  | authentication of existing users. By default, this controller uses
  | a simple trait to add these behaviors. Why don't you explore it?
  |
  */

  /**
   * Handle login attempt.
   */
  public function login(Request $request){

    if($request->isMethod('post')){

      $rules = array(
        'email'    => 'required|email',
        'password' => 'required'
      );

      $validator = Validator::make($request->all(), $rules);

      if ($validator->fails()){
        return redirect()->route('login')
            ->withErrors($validator)
            ->withInput();
      }else{
        $user = array(
          'email' => $request->input('email'),
          'password' => $request->input('password')
        );

        $remember = ($request->has('remember')) ? true : false;

        if (Auth::attempt($user, $remember)){
          return redirect()->intended('/')
            ->with(array('message' => 'Your are now logged in!', 'message_type' => 'success'));
        }else{
          return redirect()->route('login')
            ->with(array('message' => 'Your username/password combination was incorrect', 'message_type' => 'warning'))
            ->withInput();
        }

      }
    }

    return view('frontend.auth.login');
  }

  /**
   * Handle user registration.
   */
  public function register(Request $request){

    if($request->isMethod('post')){
       $rules = array(
         'name'=>'required|min:2',
         'email'=>'required|email|unique:user',
         'password'=>'required|min:5|confirmed',
         'password_confirmation'=>'required'
       );

       $validator = Validator::make($request->all(), $rules);

       if ($validator->fails()) {
         return redirect()->route('register')
           ->withErrors($validator)
           ->withInput();
       }else {
         $user = User::create([
           'name' => $request->input('name'),
           'email' => $request->input('email'),
           'password' => bcrypt($request->input('password')),
         ]);

         Auth::loginUsingId($user->id);

         return redirect()->intended('/')
          ->with(array('message' => 'Your are now logged in!', 'message_type' => 'success'));
       }
    }

    return view('frontend.auth.register');

  }

  /**
   * Handle social authentication.
   */
  public function auth(Socialite $socialite, $provider){

    return $socialite->with($provider)->redirect();

  }

  /**
   * Handle sociel authentication callback.
   */
  public function authCallback(Socialite $socialite, $provider){


    $auth = $socialite->with($provider)->user();

    $userAuth = UserAuth::where('uid', '=', $auth->getId())->first();

    if($userAuth){
        $user = $userAuth->user;
    }else{
      if($auth->getEmail()){
        $user = User::where('email', '=', $auth->getEmail())->first();

        if (is_null($user)) {
          $user = User::create([
            'name' => $auth->getName(),
            'username' => $auth->getNickname(),
            'email' => $auth->getEmail()
          ]);
        }
      }else{
        $user = User::create([
          'name' => $auth->getName(),
          'username' => $auth->getNickname()
        ]);
      }

      $userAuth = UserAuth::create([
        'provider' => $provider,
        'uid' => $auth->getId(),
      ]);

      $userAuth->user()->associate($user);
      $userAuth->save();
    }

    Auth::loginUsingId($user->id);

    return redirect()->intended('/')
      ->with(array('message' => 'Your are now logged in!', 'message_type' => 'success'));

  }

  /**
   * Handle user logout.
   */
  public function logout(){

    Auth::logout();

    return redirect()->route('home')
      ->with(array('message' => 'Your are now logged out!', 'message_type' => 'info'));

  }

}
