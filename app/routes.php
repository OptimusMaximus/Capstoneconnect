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
Route::get('/', array('uses' => 'AuthController@getLogin'));
Route::get('/login', array('uses' => 'AuthController@getLogin'));
Route::post('/login', array('uses' => 'AuthController@postLogin'));
Route::get('/logout', array('uses' => 'AuthController@getLogout'));

Route::post('create', 'AdminToolsController@createQuestionnaire');
Route::post('submit', 'UserController@submitQuestionnaire');
//Route::get('getQuestions', 'UserController@getQuestions');

Route::get('/reset', array('uses' => 'PasswordController@remind', 'as' => 'remind'));
Route::post('/reset', array('uses' => 'PasswordController@request', 'as' => 'request'));
Route::get('/reset/{token}', array('uses' => 'PasswordController@reset','as' => 'reset'));
Route::post('/reset/{token}', array('uses' => 'PasswordController@update','as' => 'update'));


Route::group(array('prefix' => '', 'before' => 'auth'), function()
{
        Route::get('/home', 'HomeController@showWelcome');
		Route::get('/help', 'HelpController@showWelcome');
		Route::get('/admin', 'AdminToolsController@makePage');
		Route::get('/questionnaire', 'QuestionnaireController@showWelcome');
		Route::get('/mygrades', 'GradesController@showWelcome');
});
Route::get('/test', function()
{
    $users = User::all();

    return View::make('/test')->with('users', $users);
});


/*groups model routing example

Group::  refers to the php file Group.php in
the models folder. It extends Eloquent. Which
has methods that allow you to do CRUD operations
on the groups table. Create Retrieve Update Delete

I've made other models called Question and Answer. These
Are the models for the questions and answers table. The
below route closure shows an example of using the Group
model to access all records in groups. Check out the
groups view to see how you would use this info on a view.
*/
Route::get('groups', function()
{
    $groups = Group::all();

    return View::make('groups')->with('groups', $groups);
});

Route::post('/addNewStudent', array('uses' => 'AdminToolsController@addStudent'));
Route::post('/addNewGroup', array('uses' => 'AdminToolsController@addGroup'));
Route::post('/addNewEvaluation', array('uses' => 'AdminToolsController@addEvaluation'));


