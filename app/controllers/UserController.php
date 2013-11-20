<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getQuestions()
	{
		$results = DB::select('select * from questions where id = 10');
		return $results;
	}

	public function submitQuestionnaire()
	{
		$answer1 = Input::get('answer1');
		$answer2 = Input::get('answer2');
		$answer3 = Input::get('answer3');
		$answer4 = Input::get('answer4');
		$answer5 = Input::get('answer5');
		$answer6 = Input::get('answer6');
		$answer7 = Input::get('answer7');
		$answer8 = Input::get('answer8');
		$answer9 = Input::get('answer9');
		$answer10 = Input::get('answer10');

		$comments1 = Input::get('comments1');
		$comments2 = Input::get('comments2');
		$comments3 = Input::get('comments3');
		$comments4 = Input::get('comments4');
		$comments5 = Input::get('comments5');
		$comments6 = Input::get('comments6');
		$comments7 = Input::get('comments7');
		$comments8 = Input::get('comments8');
		$comments9 = Input::get('comments9');
		$comments10 = Input::get('comments10');

		$testgroup = 'testgroup';
		$answeredby = 'test';
		$answeredabout = 'test';

		DB::insert("INSERT INTO answers(date_created, group_name, answered_about, answered_by, answer1, answer2, answer3, 
			answer4, answer5, answer6, answer7, answer8, answer9, 
			answer10, comments1, comments2, comments3, comments4, comments5, comments6, 
			comments7, comments8, comments9, comments10) 
		VALUES (NOW(), '$testgroup', '$answeredabout', '$answeredby' , '$answer1', '$answer2', '$answer3',
			'$answer4', '$answer5', '$answer6', '$answer7', '$answer8', '$answer9',
			 '$answer10', '$comments1', '$comments2', '$comments3', '$comments4', '$comments5', '$comments6', 
			 '$comments7', '$comments8', '$comments9', '$comments10')");
		return Redirect::to('questionnaire');

	}

	public function showWelcome()
	{
		return View::make('register');
	}

}