<?php
class PasswordController extends BaseController {
 
  //Make 'remind' view to send link to email address to reset password
  public function remind()
  {
    return View::make('remind');
  }

  //Send email to user with link to form to update password
  public function request()
  {
  	$credentials = array('email' => Input::get('email'));
 
  	return Password::remind($credentials);
  }

  //Make 'reset' view so user can enter new password
  public function reset($token)
  {
  	return View::make('reset')->with('token', $token);
  }

  //Update password with user specified password
  public function update()
  {
  	$credentials = array('email' => Input::get('email'));
 
  	return Password::reset($credentials, function($user, $password)
    {
    	$user->password = Hash::make($password);
 
    	$user->save();
 
    	return Redirect::to('login')->with('resetSuccess', 'Your password has been reset');
  	});
  }
}