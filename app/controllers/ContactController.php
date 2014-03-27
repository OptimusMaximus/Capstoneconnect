<?php

class ContactController extends BaseController {

//Server Contact view:: we will create view in next step
 public function getContact(){

            return View::make('contact');
        }

        //Contact Form
        public function getContactUsForm(){

            //Get all the data and store it inside Store Variable
            $data = Input::all();

            //Validation rules
            $rules = array (
                'first_name' => 'required|alpha',
                'last_name' => 'required|alpha',
                'phone_number'=>'numeric|min:0',
                'email' => 'required|email',
                'message' => 'required|min:1'
            );

            //Validate data
            $validator  = Validator::make ($data, $rules);

            //If everything is correct than run passes.
            if ($validator -> passes()){

                //Send email using Laravel send function
                Mail::send('emails.hello', $data, function($message) use ($data)
                {
                    //email 'From' field: Get users email add and name
                    $message->from($data['email'] , $data['first_name']);
                     //email 'To' field: cahnge this to emails that you want to be notified.                    
                    $message->to('CapstoneContactSC@gmail.com', 'my name')->subject('contact request');

                });

                return View::make('contact');  
            }else{
                //return contact form with errors
                return Redirect::to('/contact')->withErrors($validator);
            }
        }


        public function create(){
            return View::make('contact_create_email');
        }

        //Update old email and password for contact information related to email
        public function update(){
            
            //Get variables from contact_create_email.blade view
            $newEmail = Input::Get('email');
            $newPassword = Input::Get('password');
            $oldEmail = Input::Get('oldEmail');
            $oldPassword = Input::Get('oldPassword');

            //Get input from user
            $credentials = array(
                    'email' => Input::get('email'),
                    'password' => Input::get('password')
            );

             // Set Validation Rules
            $rules = array (
                    'email' => 'required|min:4|max:32|email:',
                    'password' => 'required|min:5'
                    );

            //Run input validation
            $validator = Validator::make($credentials, $rules);

            //Check $credentials against $rules
            if ($validator->fails())
            {
                return Redirect::to('contact_create_email')->withErrors($validator)->withInput();
            }

            if($newEmail == null || $newPassword == null) {
                Session::flash('warning', 'New email and/or new password cannot be an empty field');
                return Redirect::to('contact_create_email');
            }
            //$pattern = '~[a-zA-Z0-9-_.]+@[a-zA-Z]+\.[a-z]{2,4}~i';

            //Match exactly the email and password with boundaries
            $emailPattern = "~\b$oldEmail\b~";
            $passwordPattern = "~\b$oldPassword\b~";

            //$filename = '/var/www/html/Capstoneconnect/mailexample.php';
            //$filename = 'mailexample.php';
            $filename = $_SERVER['DOCUMENT_ROOT']."\Capstoneconnect\app\config\mailexample.php";

            //Find the exact pattern and replace with new info
            $emailData = file_get_contents($filename);
            $newEmailData = preg_replace($emailPattern, $newEmail, $emailData);
            if($emailData == $newEmailData){
                Session::flash('warning', 'Your old email does not match.  Try again');
                return Redirect::to('contact_create_email');
            }
            //Save new email
            echo file_put_contents($filename, $newEmailData);

            $passwordData = file_get_contents($filename);
            $newPasswordData = preg_replace($passwordPattern, $newPassword, $passwordData);
            if($passwordData == $newPasswordData){
                Session::flash('warning', 'Your old password does not match.  Try again');
                return Redirect::to('contact_create_email');
            }
            //Save new password
            echo file_put_contents($filename, $newPasswordData);

            //Success
            Session::flash('screenAnnounce', 'Your new contact email and password has been updated' );
            return Redirect::to('contact_create_email'); 
            
        }
}