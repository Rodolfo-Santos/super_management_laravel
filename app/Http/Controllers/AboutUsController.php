<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LogAccessMiddleware;

class AboutUsController extends Controller {
  public function __construct() {
    $this->middleware(LogAccessMiddleware::class);
  }

  public function aboutUs() {
    return view('site.about_us');
  }
}
