<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller {
  public function index() {
    return view('site.login', ['title' => 'Login']);
  }

  public function authenticate(Request $request) {
    $rules = [
      'user' => 'email',
      'password' => 'required'
    ];

    $feedback = [
      'user.email' => 'The user field (e-mail} is required',
      'password.required' => 'The password field is required '
    ];

    $request->validate($rules, $feedback);

    print_r($request->all());
  }
}
