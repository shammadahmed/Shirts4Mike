<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ShirtsController@recent');

Route::get('/shirts', 'ShirtsController@index');

Route::get('/shirts/{id}', 'ShirtsController@show');

Route::post('/contact', 'ContactController@store');

Route::get('/contact', 'ContactController@index');

Route::get('/search', 'SearchController@search');

Route::get('/receipt', function () {
	return view('receipt');
});