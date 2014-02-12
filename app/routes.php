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
Route::resource('answer', 'AnswerController');
Route::resource('evaluation', 'EvaluationController');
Route::resource('project', 'ProjectController');
Route::resource('user', 'UserController');

Route::get('/', array('uses' => 'AuthController@getLogin'));
Route::get('/login', array('uses' => 'AuthController@getLogin', 'as' => 'login'));
Route::post('/login', array('uses' => 'AuthController@postLogin', 'as' => 'login'));
Route::get('/logout', array('uses' => 'AuthController@getLogout', 'as' => 'logout'));

//Route::post('create', 'AdminToolsController@createQuestionnaire');
//Route::post('submit', 'UserController@submitAnswers');
//Route::get('getQuestions', 'UserController@getQuestions');

Route::get('/reset', array('uses' => 'PasswordController@remind', 'as' => 'remind'));
Route::post('/reset', array('uses' => 'PasswordController@request', 'as' => 'request'));
Route::get('/reset/{token}', array('uses' => 'PasswordController@reset','as' => 'reset'));
Route::post('/reset/{token}', array('uses' => 'PasswordController@update','as' => 'update'));


Route::group(array('prefix' => '', 'before' => 'auth'), function()
{
        Route::get('/home', array('uses' => 'HomeController@showWelcome', 'as' => 'home'));
        Route::get('/allgrades', array('uses' => 'allGradesController@showWelcome', 'as' => 'allgrades'));
        Route::get('/help', array('uses' => 'HelpController@showWelcome', 'as' => 'help'));
		Route::get('/questionnaire', array('uses' => 'QuestionnaireController@showWelcome', 'as' => 'questionnaire'));
		Route::get('/mygrades', array('uses' => 'GradesController@showWelcome', 'as' => 'mygrades'));
});

//For user with admin access permissions only
Route::group(array('prefix' => '', 'before' => 'authAdmin'), function()
{
		Route::get('/admin_users', array('uses' => 'AdminToolsController@makeManageUsers', 'as' => 'admin_users'));
		Route::get('/admin_evals', array('uses' => 'AdminToolsController@makeManageEvals', 'as' => 'admin_evals'));
});

/*Route::get('/test', function()
{
    $users = User::all();

    return View::make('/test')->with('users', $users);

});*/

Route::get('/test', array('uses' => 'ExportCSVController@export'));

//Route::post('/user/new', 'UserController@create');
Route::post('/group/new', array('as' => 'newGroup', 'uses' => 'AdminToolsController@addGroup'));
Route::post('/evaluation/new', array('as' => 'newEval', 'uses' => 'AdminToolsController@addEvaluation'));
//Route::post('/answers', array('as' => 'submitAnswers' 'uses' => 'UserController@submitAnswers'));
