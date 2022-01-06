<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal')->name('site.index')->middleware('log.access');
Route::get('/about_us', 'AboutUsController@aboutUs')->name('site.about_us');
Route::get('/contact', 'ContactController@contact')->name('site.contact');
Route::post('/contact', 'ContactController@save')->name('site.contact');

Route::get('/login/{error?}', 'LoginController@index')->name('site.login');
Route::post('/login', 'LoginController@authenticate')->name('site.login');

Route::middleware('authentication:ldap,visitor')->prefix('/app')->group(function () {
  Route::get('/home', 'HomeController@index')->name('app.home');
  Route::get('/exit', 'LoginController@exit')->name('app.exit');
  Route::get('/customer', 'CustomerController@index')->name('app.customer');

  Route::get('/supplier', 'SuppliersController@index')->name('app.supplier');
  Route::post('/supplier/list', 'SuppliersController@list')->name('app.supplier.list');
  Route::get('/supplier/add', 'SuppliersController@add')->name('app.supplier.add');

  Route::get('/product', 'ProductController@index')->name('app.product');
});

Route::fallback(function () {
  echo 'The route accessed not exist, <a href="' . route('site.index') . '">Click me to go back</a>';
});
