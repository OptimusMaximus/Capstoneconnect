<!DOCTYPE html>
<html>
    <head>
        <title>
            @section('title')
            Capstoneconnect 
            @show
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <!-- CSS are placed here -->

        {{ HTML::style('css/bootstrap.css') }}
        {{ HTML::style('css/base.css', array('type' => 'text/css')) }}
        {{ HTML::style('css/master-bootstrap-overwrite.css') }}
        {{ HTML::style('css/small-device.css', array('type' => 'text/css','media'=> 'only screen and (max-width: 600px), only screen and (max-device-width: 600px)')) }}
        @yield('stylesheets')

        <style>
            @yield('styles')
        </style>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.0.3.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>
        @yield('head')
    </head>

    <div class="text-center">
        <h1>@yield('header')</h1>
        <ul class="nav nav-pills">
            <li><a href="/Capstoneconnect/public/home">Home</a></li>
            <li><a href="/Capstoneconnect/public/questionnaire">Questionnaire</a></li>
            <li><a href="/Capstoneconnect/public/mygrades">My Grades</a></li>
            <li><a href="/Capstoneconnect/public/help">Help</a></li>
            <li><a href="/Capstoneconnect/public/logout">Logout</a></li>
        </ul>
    </div>
    <body>
        @yield('content')
           

    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Capstone Connect</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li>{{ HTML::linkRoute('home', 'Home') }}</li>
                <li>{{ HTML::linkRoute('questionnaire', 'Questionnaire') }}</li>
                <li>{{ HTML::linkRoute('mygrades', 'My Grades') }}</li>
                <li>{{ HTML::linkRoute('help', 'Help') }}</li>
                <?php 
                    try
                    {
                        // Find the user using the user id
                        $user = Sentry::getUser();

                        // Find the Administrator group
                        $admin = Sentry::findGroupByName('Admin');

                        // Check if the user is in the administrator group
                        if ($user->inGroup($admin))
                        {
                            echo(
                                '<li class="dropdown">  
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                        Admin Tools <b class="caret bottom-up"></b>
                                    </a>  
                                    <ul class="dropdown-menu bottom-up">');
                                    echo('<li>');  
                                        echo( HTML::linkRoute('admin_users', 'User/Project') );
                                    echo('</li>');
                                    echo('<li>');
                                        echo( HTML::linkRoute('admin_evals', 'Evaluations') );
                                    echo('</li>');
                            echo(  '</ul>  
                                </li>'
                            );
                        }
                    }
                    catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
                    {
                        echo 'User was not found.';
                    }
                    catch (Cartalyst\Sentry\Groups\GroupNotFoundException $e)
                    {
                        echo 'Group was not found.';
                    } 
                ?>
            </ul>
            <ul class='nav navbar-nav navbar-right'> 
                <li class="dropdown">  
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php $user = Sentry::getUser(); echo $user['email'];?> <b class="caret bottom-up"></b>
                    </a>  
                    <ul class="dropdown-menu bottom-up">  
                        <li>{{ HTML::linkRoute('logout', 'Logout') }}</li>  
                    </ul>  
                </li> 
            </ul>
        </div>
    </nav>

</html>