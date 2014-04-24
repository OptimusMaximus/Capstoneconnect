<?php

class ContactController extends BaseController {

        //Server Contact view:: we will create view in next step
        public function getContact()
        {

            return View::make('contact');
        }

        //Contact Form
        public function getContactUsForm(){

            //Get all the data and store it inside Store Variable
            $data = Input::all();

            //Validation rules for contacting professor
            //phone number is not currently required
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
                     //Arrange contacts table in descending order by created_at time and pick the most recent one
                    $contact = Contact::orderBy('created_at', 'desc')->first();
                    $contactEmail = $contact->contact_email;
                    
                    //email 'From' field: Get users email add and name
                    $message->from($data['email'] , $data['first_name']);
                     //email 'To' field: cahnge this to emails that you want to be notified.                    
                    //$message->to('CapstoneContactSC@gmail.com')->subject('contact request');
                     $message->to($contactEmail)->subject('Contact Request');
                    //$message->to('$adminEmail', 'my name')->subject('contact request');

                });
                //Sreen Announcement for Successfully Sent email to professor
                Session::flash('screenA', 'You have successfully sent this email to your professor' );

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

            //Get input from user
            $credentials = array(
                    'email' => Input::get("email"),
            );

             // Set Validation Rules
            $rules = array (
                    'email' => 'required|min:4|max:32|email:',
                    );

            //Run input validation
            $validator = Validator::make($credentials, $rules);

            //Check $credentials against $rules
            if ($validator->fails())
            {
                return Redirect::to('contact_create_email')->withErrors($validator)->withInput();
            }

            //Arrange contacts table in descending order by created_at time and pick the most recent one
            $contact = Contact::orderBy('created_at', 'desc')->first();
            if($contact != null){
                
                //Send email using Laravel send function
               Mail::send('emails.contactChanged', $credentials, function($message) use ($credentials)
               {
                    //Send email to old contact to let them know the contact email address has been changed
                    //Arrange contacts table in descending order by created_at time and pick the most recent one
                    $oldContact = Contact::orderBy('created_at', 'desc')->first();
                    $oldEmail = $oldContact->contact_email;                    
                    
                    //email 'To' field: change this to emails that you want to be notified.                    
                    $message->to($oldEmail)->subject('Contact Email Changed');

                    //Put new email into database
                    $newEmail = Contact::create(array('contact_email' => Input::get("email")));                     

                });

                Session::flash('screenAnnounce', 'Your new contact email has been updated.  An email has been sent to the old email address.' );
                return Redirect::to('contact_create_email'); 

            } else { //No email address is in database yet

                //Put new email into database
                $newEmail = Contact::create(array('contact_email' => Input::get("email")));
                Session::flash('screenAnnounce', 'Your new contact email has been updated.' );
                return Redirect::to('contact_create_email'); 
            }
                       
        }

        //This is the controller for the Admin sending emails to ALL USERS!
        public function getContactUsers()
        {

            return View::make('contact_users');
       }
       public function getContactAllUsers(){
            //Get all the data and store it inside Store Variable
            $data = Input::all();
            $users = User::all();
          //  $mailuserlist=DB::table('users')->get();

            //Validation rules
            //Since it's coming from the admin, only the message is required right now
            $rules = array (
                /*
                'first_name' => 'required|alpha',
                'last_name' => 'required|alpha',
                'email' => 'required|email',
                */
                'message' => 'required|min:1'
            );

            //Validate data
            $validator  = Validator::make ($data, $rules);

            //If everything is correct than run passes.
            if ($validator -> passes()){

                foreach ($users as $user) {
                //Send email using Laravel send function
                    //$email = $user->'email';
                Mail::queue('emails.hello_users', $data, function($message) use ($data, $user)
                {
                    
                    $message->from('CapstoneAdmin@capstoneconnect.com', 'Capstone Admin');
                     $message->to($user['email'])->subject('Message From Professor');
                       
                });

                //Screen announcement for a successful email sent to all users
                 Session::flash('screenA', 'You have successfully sent this email to users' );

              
                     return View::make('contact_users'); 
            }
        

        
            }else{
                //return contact form with errors
                return Redirect::to('/contact_users')->withErrors($validator);
            }
        }
    }


