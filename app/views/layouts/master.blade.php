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
        <!-- <link rel="stylesheet" href="css/master-bootstrap-overwrite.css" /> -->
        @yield('stylesheets')
        <style>
            @yield('styles')
        </style>
    </head>
    <div class="text-center">
        @yield('header')
        <ul class="nav nav-pills">
            <li><a href="/public">Home</a></li>
            <li><a href="/public/questionnaire">Questionaire</a></li>
            <li><a href="/public/mygrades">My Grades</a></li>

            

            <li><a href="/public/help">Help</a></li>

            <li><a href="/public/login">Logout</a></li>
        </ul>
    </div>
    <body>
        @yield('content')
        
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>