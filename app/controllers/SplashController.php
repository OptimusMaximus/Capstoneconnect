<?php

class SplashController extends BaseController {
//This is a controller for the splash page
// ./welcome

	public function showWelcome()
	{
		return View::make('splash');
	}
}