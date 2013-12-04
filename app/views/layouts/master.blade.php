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
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/master-bootstrap-overwrite.css" />
        <link rel="stylesheet" type="text/css" href="css/base.css" />
        @yield('stylesheets')
        <style>
            @yield('styles')
        </style>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.0.3.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>
    </head>
    <div class="text-center">
        @yield('header')
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