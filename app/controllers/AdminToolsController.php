<?php

class AdminToolsController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Admin Tools Controller
	|--------------------------------------------------------------------------
	|
	| 
	|
	|
	|
	*/

	/*render admin.blade.php*/
	public function makePage()
	{
		return View::make('admin');
	}

	


	public function createQuestionnaire()
	{
		$question1 = Input::get('q1');
		$question2 = Input::get('q2');
		$question3 = Input::get('q3');
		$question4 = Input::get('q4');
		$question5 = Input::get('q5');
		$question6 = Input::get('q6');
		$question7 = Input::get('q7');
		$question8 = Input::get('q8');
		$question9 = Input::get('q9');
		$question10 = Input::get('q10');

		DB::insert("INSERT INTO questions(date_created, question1, question2, question3, question4, question5,
			question6, question7, question8, question9, question10) VALUES (NOW(), '$question1', '$question2', '$question3',
			'$question4', '$question5', '$question6', '$question7', '$question8', '$question9', '$question10')");
		return Redirect::to('admin');

	}

}