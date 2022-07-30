<?php

namespace App\Http\Controllers;

class AboutUsController extends Controller {
  public function __construct() {
    $this->middleware('log.access');
  }

  public function aboutUs() {
    return view('site.about_us');
  }
}
