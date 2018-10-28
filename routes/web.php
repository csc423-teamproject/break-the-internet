<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Added to enable testing of sidebar */
Route::get('/vendor', function () {
    return view('pages/vendor');
});

/*
Route::get('/customer', function () {
    return view('pages/customer');
});
*/

Route::resource("customer", "addCustomerController");
Route::resource('RetailStore', 'RetailStoreController');

