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
		
		$ans = Answer::where('eid','=',Input::get('eid'))
				->where('answered_about','=',Input::get('answered_about'))
				->where('answered_by','=',Input::get('answered_by'))
				->first();
		if(isset($ans)) {
			$ans->ans1= Input::get("ans1")!==NULL ? Input::get("ans1") : '';
			$ans->ans2= Input::get("ans2")!==NULL ? Input::get("ans2") : '';
			$ans->ans3= Input::get("ans3")!==NULL ? Input::get("ans3") : '';
			$ans->ans4= Input::get("ans4")!==NULL ? Input::get("ans4") : '';
			$ans->ans5= Input::get("ans5")!==NULL ? Input::get("ans5") : '';
			$ans->ans6= Input::get("ans6")!==NULL ? Input::get("ans6") : '';
			$ans->ans7= Input::get("ans7")!==NULL ? Input::get("ans7") : '';
			$ans->ans8= Input::get("ans8")!==NULL ? Input::get("ans8") : '';
			$ans->ans9= Input::get("ans9")!==NULL ? Input::get("ans9") : '';
			$ans->ans10= Input::get("ans10")!==NULL ? Input::get("ans10") : '';
			$ans->comment=Input::get('comment');
			$ans->save();
		}
		else {
		Answer::create(array(
						   'eid'=>Input::get("eid"),
						   'answered_about'=>Input::get("answered_about"),
						   'answered_by'=>Input::get("answered_by"),
						   'ans1' =>  Input::get("ans1")!==NULL ? Input::get("ans1") : '',
						   'ans2' =>  Input::get("ans2")!==NULL ? Input::get("ans2") : '',
						   'ans3' =>  Input::get("ans3")!==NULL ? Input::get("ans3") : '',
						   'ans4' =>  Input::get("ans4")!==NULL ? Input::get("ans4") : '',
						   'ans5' =>  Input::get("ans5")!==NULL ? Input::get("ans5") : '',
						   'ans6' =>  Input::get("ans6")!==NULL ? Input::get("ans6") : '',
						   'ans7' =>  Input::get("ans7")!==NULL ? Input::get("ans7") : '',
						   'ans8' =>  Input::get("ans8")!==NULL ? Input::get("ans8") : '',
						   'ans9' =>  Input::get("ans9")!==NULL ? Input::get("ans9") : '',
						   'ans10' =>  Input::get("ans10")!==NULL ? Input::get("ans10") : '',
						   'comment'=>Input::get("comment")
						   ));
		}
		Session::flash('screenA', 'You have successfully submitted this evaluation');

		return Redirect::route('evaluation.show', Input::get('eid'));
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