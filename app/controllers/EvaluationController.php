<?php

class EvaluationController extends \BaseController {

	/**
	 * Display  of open Evaluations
	 *
	 * @return Response
	 */
	public function index()
	{
		$openEvals = Evaluation::where('close_at','>=',Carbon::now())->get();
		return View::make('evaluation_open', array('openEvals' => $openEvals));
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
		$date = new Carbon(Input::get('close_at'));
		$evaluation = Evaluation::create(array(
			'title'=>Input::get('title'),
			'q1' => Input::get("q1"),
		    'q2' => Input::get("q2"),
		    'q3' => Input::get("q3"),
		    'q4' => Input::get("q4"),
		    'q5' => Input::get("q5"),
		    'q6' => Input::get("q6"),
		    'q7' => Input::get("q7"),
		    'q8' => Input::get("q8"),
		    'q9' => Input::get("q9"),
		    'q10' => Input::get("q10"),
		    'close_at' => ''
		));

		$evaluation->close_at = $date;
		$evaluation->save();

		return Redirect::to('admin_evals');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		// Make sure eval has closed
		$eval = Evaluation::find($id);
		if(!isset($eval)) return Redirect::to('home');
		if($eval->close_at <= Carbon::now()){
			return Redirect::to('home');
		}

		$currentUser = Sentry::getUser(); 
	    $groupMembers = User::where('project_id','=',$currentUser->project_id)->where('id','!=',$currentUser->id)->get();


		return View::make('questionnaire', array( 'eval' => $eval, 'groupMembers' => $groupMembers,'currentUser' => $currentUser));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$eval = Evaluation::find($id);
		return View::make('evaluation_edit', array('eval' => $eval));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$eval = Evaluation::find($id);
		$eval->title=Input::get('title');
		$eval->q1 = Input::get('q1');
		$eval->q2 = Input::get('q2');
		$eval->q3 = Input::get('q3');
		$eval->q4 = Input::get('q4');
		$eval->q5 = Input::get('q5');
		$eval->q6 = Input::get('q6');
		$eval->q7 = Input::get('q7');
		$eval->q8 = Input::get('q8');
		$eval->q9 = Input::get('q9');
		$eval->q10 = Input::get('q10');
		$eval->close_at = new Carbon(Input::get('close_at')); 
		$eval->save();
		return Redirect::route('admin_evals');	
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Evaluation::destroy($id);
		return Redirect::to('admin_evals');
	}

}