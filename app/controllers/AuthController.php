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

                $credentials = array(
                        'email' => Input::get('email'),
                        'password' => Input::get('password')
                );
                
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
                            return Redirect::to('/login')->withErrors()->withInput();
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