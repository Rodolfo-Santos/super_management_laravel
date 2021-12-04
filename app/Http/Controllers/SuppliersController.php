<?php

namespace App\Http\Controllers;

class SuppliersController extends Controller {
  public function index() {
    $suppliers = [
      0 => [
        'name'   => 'Supplier1',
        'status' => 'inactive'
      ]
    ];

    return view('app.suppliers.index', compact('suppliers'));
  }
}
