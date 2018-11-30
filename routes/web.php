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
Route::get('/landing', function () {
    return view('pages/landing');
});

/*
Route::get('/customer', function () {
    return view('pages/customer');
});
*/

Route::resource("customer", "CustomerController");
Route::resource('retailstores', 'RetailStoreController');
Route::resource('vendor', 'VendorController');
Route::resource('item', 'InventoryItemController');
Route::resource('division', 'DivisionController');
Route::resource('category', 'CategoryController');
Route::resource('order', 'OrderController');
Route::resource('delivery', 'DeliveryController');
Route::resource('return', 'ReturnController');
Route::resource('purchase', 'PurchaseController');