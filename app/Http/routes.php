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

Route::get('/','ViewController@index');
Route::post('/register','RegController@create');
Route::get('login','AdminController@login');
Route::post('login','AdminController@check_login');

Route::get('/rsvpuser','UserRSVPController@index');
Route::post('/submituserrsvp','UserRSVPController@store');

Route::get('/rsvp','ViewController@rsvp');
Route::post('/submitrsvp','ViewController@submitrsvp');

Route::group(['middleware' => 'AdminAuth'], function () {
	Route::get('/admin','AdminController@view');
	Route::get('/admin/colleges','AdminController@show_colleges');
	Route::post('/admin/colleges/sendmail','AdminController@send_college_email');
	Route::post('/admin/colleges/sendall','AdminController@send_all_coll_mails');
});
