<?php

class UserController extends \BaseController {

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
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('user_new');	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		try
		{
			$group=$_POST["group"];
			switch ($group)
			{
				case "U":
				  $permissions = array(
				  	'user.create' => -1,
	                'user.delete' => -1,
	                'user.view'   => 1,
	                'user.update' => 1,
	                );
				  break;
				case "A":
				  $permissions = array(
	                'user.create' => 1,
	                'user.delete' => 1,
	                'user.view'   => 1,
	                'user.update' => 1,
	                );
				  break;
				default:
					echo "Group wan't specified.";
				exit;
			}

   			$user = Sentry::createUser(array(
				'email' => $_POST["email"],
				'first_name' => $_POST["first_name"],
				'last_name' => $_POST["last_name"],
				'activated' => false,
				'permissions'=> $permissions,
				'password' => $_POST["password"],
			));
		}
		catch (Cartalyst\Sentry\Users\UserExistsException $e)
		{
    		echo 'User with this email already exists.';
		}

		return Redirect::to('admin_users');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//Ask if this is correct
		//Then confirm
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::find($id);
		return View::make('user_edit', $user);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$user = User::find($id);

		$group=$_POST["group"];
		switch ($group)
		{
			case "U":
			  $user->permissions = array(
			  	'user.create' => -1,
                'user.delete' => -1,
                'user.view'   => 1,
                'user.update' => 1,
                );
			  break;
			case "A":
			  $user->permissions = array(
                'user.create' => 1,
                'user.delete' => 1,
                'user.view'   => 1,
                'user.update' => 1,
                );
			  break;
			default:
				echo "Group wan't specified.";
			exit;
		}

		$user->email = $_POST["email"];
		$user->first_name = $_POST["first_name"];
		$user->last_name = $_POST["last_name"];
		$user->save();

		return Redirect::to('user_edit');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);
		return Redirect::back();
	}

}