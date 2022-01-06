<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller {
  public function index() {
    return view('app.supplier.index');
  }

  public function list() {
    return view('app.supplier.list');
  }

  public function add(Request $request) {
    $message = '';

    if ($request->input('_token') != '') {
      $rules = [
        'name' => 'required|min:3|max:40',
        'site' => 'required',
        'uf' => 'required|min:2|max:2',
        'email' => 'required'
      ];

      $feedback = [
        'required' =>  'The :attribute field is required!',
        'name.min' => 'The name field must have a min 3 characters',
        'name.max' => 'The name field must have a max 40 characters',
        'uf.min' => 'The uf field must have 2 characters',
        'uf.max' => 'The uf field must have 2 characters',
        'email.email' => 'Email is invalid',
      ];

      $request->validate($rules, $feedback);

      $supplier = new Supplier();
      $supplier->create($request->all());

      $message = 'Registration successfully complete!';
    }

    return view('app.supplier.add', ['message' => $message]);
  }
}
