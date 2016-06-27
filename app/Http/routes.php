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

// Login dan Register Route

Route::get('login',['uses'=>'CustomAuthController@getLogin','as'=>'getLogin']);
Route::post('login',['uses'=>'CustomAuthController@postLogin','as'=>'postLogin']);

Route::get('register',['uses'=>'CustomAuthController@getRegister','as'=>'getRegister']);
Route::post('register',['uses'=>'CustomAuthController@postRegister','as'=>'postRegister']);

Route::get('logout',['uses'=>'CustomAuthController@getLogout','as'=>'getLogout']);

Route::get('admin','AdminController@getIndex');
Route::get('kepalasekolah','KepalaSekolahController@getIndex');
Route::get('guru','GuruController@getIndex');
Route::get('siswa','SiswaController@getIndex');

Route::get('hakakses',function(){
	return view('hakakses');
});
