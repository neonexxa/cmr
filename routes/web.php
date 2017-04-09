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

Auth::routes();

/**
|--------------------------------------------------------------------------
| Routes For Admin
|--------------------------------------------------------------------------
|
| No description
|
*/


Route::get('/admin_booking', 		'BookingController@all_booking')	->name('admin_booking.all')		->middleware('auth', 'admin');
Route::put('/admin_booking/{id}', 	'BookingController@admin_update')	->name('admin_booking.update')	->middleware('auth', 'admin');
Route::get('/admin_venue/config', 	'VenueController@all_config')		->name('admin_venue.all_config')->middleware('auth', 'admin');
Route::resource('admin_venue', 		'VenueController');
Route::resource('admin_status', 	'StatusController');
Route::resource('admin_session', 	'SessionController');

/**
|--------------------------------------------------------------------------
| Routes For User
|--------------------------------------------------------------------------
|
| No description
|
*/
Route::get('/home', 				'HomeController@index')->name('user.home');
Route::resource('user_booking', 	'BookingController');
