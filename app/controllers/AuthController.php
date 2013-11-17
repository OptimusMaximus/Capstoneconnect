<?php 
 
class AuthController extends BaseController {
 
        /**
         * Display the login page
         * @return View
         */
        public function getLogin()
        {
                return View::make('login');

        }
 
        /**
         * Login action
         * @return Redirect
         */
        public function postLogin()
        {
                //Get input from user
                $credentials = array(
                        'email' => Input::get('email'),
                        'password' => Input::get('password')
                );
                
                // Set Validation Rules
                $rules = array (
                        'email' => 'required|min:4|max:32|email',
                        'password' => 'required|min:6'
                        );

                //Run input validation
                $v = Validator::make($credentials, $rules);

                try
                {
                    $user = Sentry::authenticate($credentials, false);
 
                    if ($user)
                    {
                        //go home
                        return Redirect::to('/home');
                    }
                }
                /*catch(\Exception $e)
                {
                        echo "{$credentials['email']}";
                        echo " {$credentials['password']}";
                        echo "{ $user}";//return Redirect::to('/mygrades')->withErrors(array('login' => $e->getMessage()));
                }*/
                catch (\Cartalyst\Sentry\Users\UserNotFoundException $e)
                {
                        Session::flash('loginError', 'Invalid username or password.' );
                        return Redirect::to('/login')->withErrors($v)->withInput();
                }

        }
 
        /**
         * Logout action
         * @return Redirect
         */
        public function getLogout()
        {
                Sentry::logout();
 
                return Redirect::to('login');
        }
 
}