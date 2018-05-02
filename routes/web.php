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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::middleware('auth')->group(function() {
	Route::get('/', 'HomeController@index')->name('home');

	Route::prefix('v1')->group(function () {
		Route::get('user-data', 'HomeController@getUser');
		Route::get('front-page', 'HomeController@frontPage');
	});
});
