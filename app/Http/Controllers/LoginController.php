<?php

namespace App\Http\Controllers;

use App\User;
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

    $email = $request->get('user');
    $password = $request->get('password');

    $userTable = new User();

    $user = $userTable
      ->where('email', $email)
      ->where('password', $password)
      ->get()
      ->first();

    if (isset($user->name)) echo 'User Exists!';
    else echo 'User does not exists!';

    print_r("<pre>$user</pre>");
  }
}
