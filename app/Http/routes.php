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

Route::get('field/{id}/worked', [
	'as'   => 'field.worked',
	'uses' => 'ProtocolController@create'
]);

Route::resource('protocol', 'ProtocolController', ['except' => ['index', 'create']]);

Route::get('field/return/{owner_id}', [
	'as'   => 'field.return',
	'uses' => 'OwnerController@returnField'
]);
Route::get('field/{id}/issue', [
	'as'   => 'field.issue',
	'uses' => 'OwnerController@create'
]);
Route::resource('owner', 'OwnerController', ['except' => ['index', 'create']]);

Route::resource('publisher', 'PublisherController');

Route::get('area/{id}/fields', [
	'as'   => 'area.fields',
	'uses' => 'FieldController@index'
]);
Route::get('field/create/{shortcut}/area', [
	'as'   => 'field.create',
	'uses' => 'FieldController@create'
]);
Route::resource('field', 'FieldController', ['except' => ['index','create']]);
Route::resource('area', 'AreaController');

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);
