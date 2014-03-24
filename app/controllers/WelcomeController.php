<?php

class WelcomeController extends BaseController {

	public function showWelcome()
	{
		return View::make('welcome');
	}
}