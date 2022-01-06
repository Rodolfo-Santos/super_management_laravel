<?php

namespace App\Http\Controllers;

class SuppliersController extends Controller {
  public function index() {
    return view('app.supplier.index');
  }

  public function list() {
    return view('app.supplier.list');
  }

  public function add() {
    return view('app.supplier.add');
  }
}
