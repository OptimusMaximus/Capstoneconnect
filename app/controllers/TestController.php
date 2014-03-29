<?php

class TestController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//List all Users
	}

	/**
	 * Show the form for creating a new user
	 * belonging to a project of pid.
	 *
	 * @return Response
	 */
	public function projectCreate($pid)
	{
		return View::make('user_new', array('pid' => $pid));
	}


	/**
	 * Show the form for creating a new user.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('upload_csv');	
	}

}