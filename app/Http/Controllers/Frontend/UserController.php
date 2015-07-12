<?php

namespace App\Http\Controllers\Frontend;

use App\User;
use Auth;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends Controller {

  public function showProfile($id){

    $user = User::find($id);

    if ($user === null) {
      throw new NotFoundHttpException;
    }

    return view('frontend.user.profile')->with('user', $user);

  }

  public function settings(Request $request, $page = null){

    $user = Auth::user();

    if($page == "example"){
      return view('frontend.user.settings.example')->with('user', $user);
    }

    if($request->isMethod('post')){

      // Set rules
      $rules = array(
        'name'=>'required|min:2',
        'username'=>'unique:user,username,'.$user->id,
        'email'=>'required|email|unique:user,email,'.$user->id,
      );

      // Get a validator for an incoming login request.
      $validator = Validator::make($request->all(), $rules);

      if ($validator->fails()){
        // Redirect to login page if fails to login
        return redirect()->back()
            ->withErrors($validator)
            ->withInput();
      }else{
        $user->name = $request->input('name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');

        $user->save();

        return redirect()->back()
          ->with(array('message' => 'Profile updated successfully!', 'message_type' => 'success'));
      }

    }

    return view('frontend.user.settings.profile')->with('user', $user);

  }

}
