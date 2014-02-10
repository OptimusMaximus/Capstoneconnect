<?php

class AnswerController extends \BaseController {

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
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Answer::create(array('ans1' => $_POST["ans1"],
						   'ans2' => $_POST["ans2"],
						   'ans3' => $_POST["ans3"],
						   'ans4' => $_POST["ans4"],
						   'ans5' => $_POST["ans5"],
						   'ans6' => $_POST["ans6"],
						   'ans7' => $_POST["ans7"],
						   'ans8' => $_POST["ans8"],
						   'ans9' => $_POST["ans9"],
						   'ans10' => $_POST["ans10"],
						   'comment'=>$_POST["comment"]));
		return Redirect::to('questionnaire');
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