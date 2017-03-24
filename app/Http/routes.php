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
	
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'StudentCtrl@index');
Route::get('/reg-form','StudentCtrl@showRegistration');

Route::post('/complete','StudentCtrl@processRegistration');

Route::get('/edit/{id}','StudentCtrl@edit');
Route::post('/edited','StudentCtrl@save');
Route::get('/delete/{id}', 'StudentCtrl@toDelete');
