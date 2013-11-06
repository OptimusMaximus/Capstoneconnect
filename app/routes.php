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

Route::get('/', 'HomeController@showWelcome');
Route::get('/help', 'HelpController@showWelcome');
Route::get('/questionnaire', 'QuestionnaireController@showWelcome');
Route::get('/mygrades', 'GradesController@showWelcome');

