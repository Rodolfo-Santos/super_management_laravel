<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContact;

class ContactController extends Controller {
  public function contact(Request $request) {
    $contact = new SiteContact();
    $contact->create($request->all());

    return view('site.contact');
  }
}
