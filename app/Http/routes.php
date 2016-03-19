<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::get('/', function(){
	return redirect('home');
});

Route::controller('home', 'HomeController');
Route::controller('patient', 'PatientController');
Route::controller('referout', 'ReferoutController');

Route::controller('auth', 'Auth\AuthController');

Route::group(['prefix'=>'administrator'], function(){

	Route::get('/', 'Administrators\AdministratorController@index');

	Route::controller('user', 'Administrators\UserController');

});
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
