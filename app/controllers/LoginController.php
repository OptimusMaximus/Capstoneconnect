<?php

class LoginController extends BaseController {

	public function showWelcome()
	{
		return View::make('login');
	}

}