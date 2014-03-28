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
        {{ HTML::style('css/small-device.css', array('type' => 'text/css','media'=> 'only screen and (max-width: 767px), only screen and (max-device-width: 767px)')) }}
        {{ HTML::style('js/DataTables-1.9.4/media/css/demo_table.css') }}
        @yield('stylesheets')

        <style>
            @yield('styles')
        </style>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        {{ HTML::script('js/jquery-2.0.3.js') }}
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        {{ HTML::script('js/bootstrap.js') }}
        {{ HTML::script('js/DataTables-1.9.4/media/js/jquery.dataTables.js') }}
        @yield('head')

<<<<<<< HEAD
      
=======
       

     
>>>>>>> 737ef78ee4248f1c357751741396f544e61ab7ed
    



    




    



   </head>

    <nav class="cc-navbar navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href='home'>Capstone Connect</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling  -->
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <li>{{ HTML::linkRoute('home', 'Home') }}</li>                
                <?php 
                    try
                    {
                        // Find the user using the user id
                        $user = Sentry::getUser();
                        $NOTadmin = Sentry::findGroupByName('Users');


                        // Find the Administrator group
                        $admin = Sentry::findGroupByName('Admin');



                        /*     if ($user->inGroup($NOTadmin))
                        {
                        echo('<li>');
                            echo (HTML::linkRoute('mygrades', 'My Grades') );
                            echo('</li>');
                        }*/
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
                                        echo( HTML::linkRoute('admin_evals', 'Mange Evaluation') );
                                    echo('</li>');
                                    echo('<li>');
                                        echo( HTML::linkRoute('allgrades', 'Average Grades') );
                                    echo('</li>');
                                    echo('<li>');
                                        echo( HTML::linkRoute('create_announcement', 'Post New Announcement'));
                                    echo('</li>');
                                    echo('<li>');
                                        echo( HTML::linkRoute('download_csv', 'Download CSV File'));
                                    echo('</li>');
                                    echo('<li>');
                                        echo( HTML::linkRoute('contact_create_email', 'Update Email Contact'));
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
                @if(!$user->inGroup($admin))
                    <li>{{ HTML::linkRoute('evaluation.index', 'Evaluate') }}</li>
                @endif
            </ul>
            <ul class='nav navbar-nav navbar-right'> 
                <li class="dropdown">  
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php $user = Sentry::getUser(); echo $user['email'];?> <b class="caret bottom-up"></b>
                    </a>  
                    <ul class="dropdown-menu bottom-up">  
                      <li>{{ HTML::linkRoute('help', 'Help') }}</li>
                        <li>{{ HTML::linkRoute('contact', 'Contact') }}</li> 
                            <li>{{ HTML::linkRoute('logout', 'Logout') }}</li>  
                    </ul>  
                </li> 
            </ul>
        </div>
    </nav>

    <body>
        <h1 class="master-header"><b>@yield('header')</b></h1>
        
        {{--This allows a veiw to override the--}}
        {{--main div's class value--}}
        <?php $containerClass; ?>
        @yield('container_class_value')
        @if(!isset($containerClass))
            <?php $containerClass="BigWhite container" ?>
        @endif


        <div class={{"'".$containerClass."'"}}>
            @yield('content')
        </div>
    </body>
</html>