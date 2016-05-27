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
Route::model('travelplans','Travelplan');
Route::model('travelentries','Travelentry');

Route::bind('travelplans', function($value, $route) {
	return app\Travelplan::whereSlug($value)->first();
});
Route::bind('travelentries', function($value, $route) {
	return app\Travelentry::whereSlug($value)->first();
});



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/travelplans', function () {
// 		return view('travelplans.index');
// });

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Route::get('travelplans', ['middleware'=> 'auth', 'uses'=> 'TravelplansController@show']);


Route::resource('travelplans', 'TravelplansController');
Route::resource('travelplans.travelentries','TravelentriesController');

