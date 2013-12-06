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
                        'email' => 'required|min:4|max:32|email|Exists:users,email|Regex:/.sc.edu$/',
                        'password' => 'required|min:5'
                        );

                //Run input validation
                $validator = Validator::make($credentials, $rules);

                //Check $credentials against $rules
                if ($validator->fails())
                {
                    return Redirect::to('login')->withErrors($validator)->withInput();
                }

                try
                {
                    $rememberMe = Input::get('remember');
                    $user = Sentry::authenticate($credentials, $rememberMe);

                    //if admin logs in
                    if (  Sentry::getUser()->hasAnyAccess(['admin']) )
                    {   //go to admin page
                        return Redirect::to('admin');
                    }

                    if ($user)
                    {
                        //go home
                        return Redirect::to('home');
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
                    return Redirect::to('login')->withErrors($validator)->withInput();
                }
                catch (\Cartalyst\Sentry\Users\LoginRequiredException $e)
                {
                    Session::flash('loginError', 'Login field is required.' );
                    return Redirect::to('login')->withErrors($validator)->withInput();
                }
                catch (\Cartalyst\Sentry\Users\PasswordRequiredException $e)
                {
                    Session::flash('loginError', 'Password field is required.' );
                    return Redirect::to('login')->withErrors($validator)->withInput();
                }

        }
 
        /**
         * Logout action
         * @return Redirect
         */
        public function getLogout()
        {
                Sentry::logout();
                Session::flash('loginError', 'You have successfully logged out' );
                return Redirect::to('login');
        }
}
 
