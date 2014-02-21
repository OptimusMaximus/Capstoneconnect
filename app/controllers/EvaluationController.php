<?php

class EvaluationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('evaluation_new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$evaluation = Evaluation::create(array(
			'q1' => $_POST["q1"],
		    'q2' => $_POST["q2"],
		    'q3' => $_POST["q3"],
		    'q4' => $_POST["q4"],
		    'q5' => $_POST["q5"],
		    'q6' => $_POST["q6"],
		    'q7' => $_POST["q7"],
		    'q8' => $_POST["q8"],
		    'q9' => $_POST["q9"],
		    'q10' => $_POST["q10"]
		));

		return Redirect::to('admin_users');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}