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
        <style>
        @section('styles')
            body {
                padding-top: 60px;
                background-color: #73000A;
                color: #FFFFFF;
            }
            .navbar{
                float: top;
                text-align: center;
                color: #FFFFFF;
            }
            .navbar li{
                display: inline;
                padding-left: 5px;
                padding-right: 5px;
                border-left: 1px solid white;
            }
            .navbar li:first-child{
                border-left: 0px;
            }

        @show
        </style>
        {{ HTML::style('css/bootstrap-responsive.css') }}
 
    </head>
 
    <body>
        <ul class="navbar">
            <li class="navbar"><a href="#home" class="navbar">Home</a></li>
            <li class="navbar"><a href="#Questionaire" class="navbar">Questionaire</a></li>
            <li class="navbar"><a href="#MyGrades" class="navbar">My Grades</a></li>
            <li class="navbar"><a href="#Help" class="navbar">Help</a></li>
        </ul>
        @yield('content')
    </body>
</html>