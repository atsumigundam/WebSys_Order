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

Route::get('/order/{isbn}/{shop_id}', 'DbController@input');

Route::get('/stocks/order/{isbn}/{shop_id}', 'StockDetailController@to_order');

Route::post('/order/{isbn}/{shop_id}/confirm', 'FormController@formResult');

Route::post('/order/{isbn}/{shop_id}/ordered', 'FormController@orderedResult');

Route::get('order/', function () {
	return view('input', ['shop_name' => "てｓｔ", 'shop_address' => "てｓと", 'shop_phone' => "てｓつお"]);
});

Route::get('/stocks/{isbn}','StockDetailController@index');

Route::post('/order/{isbn}/cancel', 'DbController@to_zaiko');

Route::get('/list', 'ListController@index');

Route::get('/gettest', 'GetTestController@index');
Route::get('/got', 'GetTestController@got');

Route::get('/search', 'SearchController@index');

Route::get('/searchresult', 'SearchController@search');