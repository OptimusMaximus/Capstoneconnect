<?php

class TestController extends \BaseController {

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
	 * Show the form for creating a new user.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('upload_csv');	
	}

	public function upload()
	{
		$file = Input::file('csv_file');
		$mime = $file->getMimeType();
		//echo $mime;
		//$credentials = array( 'csv_file' => $file);
        //$rules = array ('csv_file' => 'required|mimes:csv,text/plain');
        //$validator = Validator::make($credentials, $rules);      

        if( $mime != 'text/plain' ) {
            Session::flash('error', 'Upload failed.  File uploaded is not a text file.  Try again.');
			return Redirect::to('upload_csv');
        }
        else {
        	//put code in here to parse and upload to database

			Session::flash('message', 'You have successfully uploaded the CSV file.');
			return Redirect::to('upload_csv');
		}
	}

}