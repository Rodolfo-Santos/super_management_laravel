<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller {
  public function index() {
    return view('app.supplier.index');
  }

  public function list(Request $request) {
    $suppliers = Supplier
      ::where('name', 'like', '%' . $request->input('name') . '%')
      ->where('site', 'like', '%' . $request->input('site') . '%')
      ->where('uf', 'like', '%' . $request->input('uf') . '%')
      ->where('email', 'like', '%' . $request->input('email') . '%')
      ->paginate(2);

    return view('app.supplier.list', ['suppliers' => $suppliers, 'request' => $request->all()]);
  }

  public function add(Request $request) {
    $message = '';

    if ($request->input('_token') != '' && $request->input('id') == '') {
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

    if ($request->input('_token') != '' && $request->input('id') != '') {
      $supplier = Supplier::find($request->input('id'));
      $update = $supplier->update($request->all());

      $message = $update ? 'Data updated successfully!' : 'Update data is failed!';

      return redirect()->route('app.supplier.edit', ['id' => $request->input('id'), 'message' => $message]);
    }

    return view('app.supplier.add', ['message' => $message]);
  }

  public function edit($id, $message = '') {
    $supplier = Supplier::find($id);

    return view('app.supplier.add', ['supplier' => $supplier, 'message' => $message]);
  }
}
