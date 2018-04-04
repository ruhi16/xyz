<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/abcd', function(){
	
	return view('settings.abcd');
});

Route::get('/test', function () {
    return view('settings.test');
});

Route::post('/register-submit', 'AdminController@registerSubmit');
Route::post('/login-submit', 'AdminController@loginSubmit');
 
Route::group(['middleware' => 'admin'], function(){
		Route::get('/dashboard', 'AdminController@dashboard');

		Route::get('/records', 'recordsController@records');
		Route::post('/records-submit', 'recordsController@recordsSubmit');

		Route::get('/records-edit/{record_id}','recordsController@recordsEdit');
		Route::post('/recordsedit-submit', 'recordsController@recordsEditSubmit');


		Route::get('/logout',function(){
			session()->flush();
		    return redirect()->to('/home');
		});


});

