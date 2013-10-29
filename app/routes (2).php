<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

/*
//localhost/Capstoneconnect/public/gray
Route::get('/{squirrel}', function($squirrel)
{
	$data['squirrel'] = $squirrel;
	return View::make('simple', $data);
});*/

Route::get('first', function()
{
	return Redirect::to('second');
});

Route::get('second', function()
{
	return 'Second route.';
});

Route::get('index', 'ArticleController@showIndex');

Route::get('example', function()
{
	return View::make('example');
});