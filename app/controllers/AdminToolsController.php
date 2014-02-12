<?php

class AdminToolsController extends BaseController {

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

	// render admin_users.blade.php
	public function makeManageUsers()
	{
		return View::make('admin_users');
	}

	// render admin_evals.blade.php
	public function makeManageEvals()
	{
		return View::make('admin_evals');
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

	public function addProject()
	{

	}

	public function addEvaluation()
	{

	}
}