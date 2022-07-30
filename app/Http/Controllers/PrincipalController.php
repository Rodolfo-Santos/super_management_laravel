<?php

namespace App\Http\Controllers;

use App\ContactReason;

class PrincipalController extends Controller {
  public function principal() {
    $reason_list = ContactReason::all();

    return view('site.principal', ['reason_list' => $reason_list]);
  }
}
