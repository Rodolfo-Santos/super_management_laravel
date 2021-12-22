<?php

namespace App\Http\Controllers;

use App\ContactReason;
use Illuminate\Http\Request;
use App\SiteContact;

class ContactController extends Controller {
  public function contact() {
    $reason_list = ContactReason::all();

    return view('site.contact', ['reason_list' => $reason_list]);
  }

  public function save(Request $request) {
    $rules = [
      'name'  => 'required|min:3|max:40',
      'phone' => 'required',
      'email' => 'email|required|unique:site_contacts',
      'contact_reason_id' => 'required',
      'message' => 'required|max:2000',
    ];

    $feedback = [
      'name.required' => 'Insert your name, please.',
      'unique' => 'The :attribute already exists.'
    ];

    $request->validate($rules, $feedback);

    SiteContact::create($request->all());
  }
}
