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

Route::get('/', array('uses' => 'WelcomeController@showWelcome' ));
Route::get('/login', array('uses' => 'AuthController@getLogin'));  //, 'as' => 'login')); error here?????
Route::post('/login', array('uses' => 'AuthController@postLogin', 'as' => 'login'));
Route::get('/logout', array('uses' => 'AuthController@getLogout', 'as' => 'logout'));

Route::get('/reset', array('uses' => 'PasswordController@remind', 'as' => 'remind'));
Route::post('/reset', array('uses' => 'PasswordController@request', 'as' => 'request'));
Route::get('/reset/{token}', array('uses' => 'PasswordController@reset','as' => 'reset'));
Route::post('/reset/{token}', array('uses' => 'PasswordController@update','as' => 'update'));

Route::get('/register', array('uses' => 'AuthController@showRegister'));
Route::post('/register', array('uses' => 'AuthController@activateUser', 'as' => 'activate'));


Route::get('/splash', array('uses'=> 'SplashController@showWelcome', 'as' => 'splash'));

Route::get('/welcome', array('uses'=> 'WelcomeController@showWelcome', 'as' => 'welcome'));


//For user with admin access permissions only
Route::group(array('prefix' => '', 'before' => 'authAdmin'), function()
{
		Route::resource('answer', 'AnswerController', array('except' => array('store','create')));
		Route::resource('evaluation', 'EvaluationController');
		Route::resource('project', 'ProjectController');
		Route::resource('user', 'UserController');

		Route::get('/admin_evals_about/{token}', array('uses'=> 'AdminToolsController@makeEvalsAbout', 'as' => 'admin_evals_about'));
		Route::get('/admin_evals_by/{token}', array('uses'=> 'AdminToolsController@makeEvalsBy', 'as' => 'admin_evals_by'));
		Route::get('/project/{token}/user/new', array('uses' => 'UserController@projectCreate', 'as' => 'project.user.create'));
		Route::get('/admin_users', array('uses' => 'AdminToolsController@makeManageUsers', 'as' => 'admin_users'));
		Route::get('/admin_evals/{token}', array('uses' => 'AdminToolsController@getUserEvals', 'as' => 'admin_user_evals'));
		Route::get('/admin_evals', array('uses' => 'AdminToolsController@makeManageEvals', 'as' => 'admin_evals'));
		Route::get('/create_announcement', array('uses' => 'AnnouncementController@makeAnnouncement', 'as' => 'create_announcement'));
		Route::post('/create_announcement', array('uses' => 'AnnouncementController@store', 'as' => 'announcement.store'));
		Route::get('/download_csv', array('uses' => 'ExportCSVController@export', 'as' => 'download_csv'));
		Route::post('/download_csv', array('uses' => 'ExportCSVController@doneExportCSV'));
		Route::get('/contact_create_email', array('uses' => 'ContactController@create', 'as' => 'contact_create_email'));
		Route::post('/contact_create_email', array('uses' => 'ContactController@update', 'as' => 'update'));

});

Route::group(array('prefix' => '', 'before' => 'auth'), function()
{
        Route::get('/home', array('uses' => 'HomeController@showWelcome', 'as' => 'home'));
        Route::get('/allgrades', array('uses' => 'allGradesController@showWelcome', 'as' => 'allgrades'));
        Route::get('/help', array('uses' => 'HelpController@showWelcome', 'as' => 'help'));
		Route::get('/questionnaire', array('uses' => 'QuestionnaireController@showWelcome', 'as' => 'questionnaire'));
		Route::get('/mygrades', array('uses' => 'GradesController@showWelcome', 'as' => 'mygrades'));

		//user allowed crud operations. To add to this look at the table in the following link
		//to make a route for the apporiate action.
		//http://laravel.com/docs/controllers#resource-controllers
		Route::resource('answer', 'AnswerController', array('only' => array('store','create')));

		Route::resource('evaluation', 'EvaluationController', array('only' => array('index','show')));
		
		//Contact Page
		Route::get('/contact', array('uses' => 'ContactController@getContact', 'as' => 'contact'));
		//Form request:: POST action will trigger to controller
		Route::post('contact_request','ContactController@getContactUsForm');

});

Route::get('/upload_csv', array('uses' => 'TestController@create', 'as' => 'upload_csv'));