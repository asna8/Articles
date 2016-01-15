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

Route::get('/', 'WelcomeController@index');
Route::get('contacts', 'WelcomeController@contacts');
Route::get('about','PageController@about');
Route::get('article','ArticleController@index');
Route::get('article/create','ArticleController@create');
Route::get('article/{id}','ArticleController@show');
Route::post('article','ArticleController@store');





Route::get('demo','Democontroller@demo');
Route::get('index','Democontroller@index');
Route::get('index/create','DemoController@create');
Route::get('index/{id}','Democontroller@show');
Route::post('index','Democontroller@store');

Route::get('foo',function()
{
	return 'Hello';
});
Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
