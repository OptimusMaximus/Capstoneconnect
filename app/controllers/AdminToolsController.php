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

}