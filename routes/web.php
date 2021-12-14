<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/about_us', 'AboutUsController@aboutUs')->name('site.about_us');

Route::get('/contact', 'ContactController@contact')->name('site.contact');
Route::post('/contact', 'ContactController@save')->name('site.contact');

Route::get('/login', fn () => 'Login')->name('site.login');

Route::prefix('/app')->group(function () {
  Route::get('/customers', fn () => 'customers')->name('app.customers');
  Route::get('/products', fn () => 'products')->name('app.products');
  Route::get('/suppliers', 'SuppliersController@index')->name('app.suppliers');
});

Route::fallback(function () {
  echo 'The route accessed not exist, <a href="' . route('site.index') . '">Click me to go back</a>';
});
