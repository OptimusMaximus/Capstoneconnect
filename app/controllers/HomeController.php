<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		$now = Carbon::now()->startOfMonth();
		$next = Carbon::now()->startOfMonth();
		$next->addMonth();

		$currentMonth = Evaluation::whereBetween('close_at', 
			array($now->startOfMonth()->toDateTimeString(),$now->endOfMonth()->toDateTimeString()))->get();
		$nextMonth = Evaluation::whereBetween('close_at', 
			array($next->startOfMonth()->toDateTimeString(), $next->endOfMonth()->toDateTimeString()))->get();

		return View::make('home', array('currMonthEvals' => $currentMonth, 'nextMonthEvals' => $nextMonth));
	}

}