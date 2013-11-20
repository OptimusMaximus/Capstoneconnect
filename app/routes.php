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
//Route::get('/', array('uses' => 'AuthController@getLogin'));
Route::get('/login', array('uses' => 'AuthController@getLogin'));
Route::post('/login', array('uses' => 'AuthController@postLogin'));
Route::get('/logout', array('uses' => 'AuthController@getLogout'));

Route::post('create', 'AdminToolsController@createQuestionnaire');
Route::post('submit', 'UserController@submitQuestionnaire');
Route::get('test', 'UserController@getQuestions');

Route::group(array('prefix' => '', 'before' => 'auth'), function()
{
        Route::get('/home', 'HomeController@showWelcome');
		Route::get('/help', 'HelpController@showWelcome');
		Route::get('/admin', 'AdminToolsController@makePage');
		Route::get('/questionnaire', 'QuestionnaireController@showWelcome');
		Route::get('/mygrades', 'GradesController@showWelcome');
});



//For testing
Route::get('/test', function()
{
    $users = User::all();

    return View::make('/test')->with('users', $users);
});
