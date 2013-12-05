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

	

	/*
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
	}*/

	public function addStudent()
	{
		$student = Student::create(array('first_name' => $_POST["first_name"],
		    							 'last_name' => $_POST["last_name"],
		    							 'email' => $_POST["email"]));
		return Redirect::to('admin');
	}

	public function addGroup()
	{
		$group = ProjectGroup::create(array('name' => $_POST["group_name"],
		    							 'description' => $_POST["description"]));
		return Redirect::to('admin');
	}

	public function addEvaluation()
	{
		$evaluation = Evaluation::create(array('q1' => $_POST["q1"],
											   'q2' => $_POST["q2"],
											   'q3' => $_POST["q3"],
											   'q4' => $_POST["q4"],
											   'q5' => $_POST["q5"],
											   'q6' => $_POST["q6"],
											   'q7' => $_POST["q7"],
											   'q8' => $_POST["q8"],
											   'q9' => $_POST["q9"],
											   'q10' => $_POST["q10"]));
		return Redirect::to('admin');
	}
}