<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Routing\Controller;

class PageController extends Controller {

  public function showHome(){

    return view('frontend.home');
    
  }

  public function showAbout(){

    return view('frontend.about');

  }

}
