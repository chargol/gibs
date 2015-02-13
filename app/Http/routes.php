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


Route::get('area/{id}/fields', 'FieldController@index');
Route::get('field/create/{id}/area', 'FieldController@create');
Route::resource('field', 'FieldController');
Route::resource('area', 'AreaController');

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
