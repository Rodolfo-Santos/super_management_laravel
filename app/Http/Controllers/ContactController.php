<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContact;

class ContactController extends Controller {
  public function contact() {
    $reason_list = [
      '1' => 'Doubt',
      '2' => 'Praise',
      '3' => 'Complaint'
    ];

    return view('site.contact', ['reason_list' => $reason_list]);
  }

  public function save(Request $request) {
    $request->validate([
      'name'  => 'required|min:3|max:40',
      'phone' => 'required',
      'email' => 'required',
      'reason' => 'required',
      'message' => 'required|max:2000',
    ]);

    SiteContact::create($request->all());
  }
}
