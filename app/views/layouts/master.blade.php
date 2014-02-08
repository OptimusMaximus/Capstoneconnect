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
           
    </body>
</html>