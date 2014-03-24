<?php

class SplashController extends BaseController {

	public function showWelcome()
	{
		return View::make('splash');
	}
}