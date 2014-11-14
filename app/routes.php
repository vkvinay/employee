<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});
Route::get('/checkadminlogin', 'AdminController@checkadminlogin');
Route::get('/wlcmadmin', 'AdminController@wlcmadmin');
Route::get('/index', 'AdminController@index');
Route::get('/add', 'AdminController@add');
Route::get('/show', 'AdminController@show');
Route::post('/saveemployee', 'AdminController@saveemployee');
Route::get('/showemployee', 'AdminController@showemployee');
Route::get('/dash', 'AdminController@dash');
Route::get('/removeemployee/{id}', 'AdminController@removeemployee');