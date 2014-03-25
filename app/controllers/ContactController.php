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


        public function update(){
            
            //Get 'email' variable from contact_create_email.blade view
            $email = Input::Get('email');
            $password = Input::Get('password');

            

            Session::flash('flash', 'Your contact email has been updated' );
            return Redirect::to('contact_create_email'); 

        }
}