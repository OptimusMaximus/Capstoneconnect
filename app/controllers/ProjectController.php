<?php

class ProjectController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('admin_users');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		Return View::make('project_new');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Project::create(array('name' => Input::get('project_name'), 'description' => Input::get('description')));
		Return Redirect::to('admin_users');
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
		$project = Project::find($id);
		return View::make('project_edit', $project);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$project = Project::find($id);

		$project->name = Input::get("project_name");
		$project->description = Input::get("description");
		$project->save();
		return Redirect::to('admin_users');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$users = User::where('project_id','=',$id)->get();
		foreach ($users as $user) {
			$user->project_id=NULL;
			$user->save();
		}
		Project::destroy($id);
		return Redirect::to('admin_users');
	}

}