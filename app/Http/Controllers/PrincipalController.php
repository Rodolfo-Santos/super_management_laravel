<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller {
  public function principal() {
    $reason_list = [
      '1' => 'Doubt',
      '2' => 'Praise',
      '3' => 'Complaint'
    ];

    return view('site.principal', ['reason_list' => $reason_list]);
  }
}
