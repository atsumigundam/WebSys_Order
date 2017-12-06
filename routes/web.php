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

Route::get('/dbtest', 'DbController@index');

Route::get('/order/{shop_id}', 'DbController@input');

Route::get('order/', function () {
	return view('input', ['shop_name' => "てｓｔ", 'shop_address' => "てｓと", 'shop_phone' => "てｓつお"]);
});
