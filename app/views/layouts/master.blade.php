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
        <link rel="stylesheet" href="css/bootstrap-responsive.css" />
        <style>
        @yield('styles')
            body {
                padding-top: 60px;
                background-color: #73000A;
                color: #FFFFFF;
                text-align: center;
            }
            .nav{
                float: top;
                text-align: center;
                color: #FFFFFF;
            }
            .nav-pills li{
                display: inline;
                padding-left: 5px;
                padding-right: 5px;
                border-left: 1px solid white;
            }
            .nav-pills li:first-child{
                border-left: 0px;
                padding-left: 0px;
            }
            .nav-pills{
                display: inline-block;
            }
            a:link {color:#FFFFFF;}      /* unvisited link white */
            a:visited {color:#FFFFFF}  /* visited link white*/
            a:hover {color:rgb(95,87,79);}  /* mouse over link State House Gray*/
            a:focus {color:rgb(95,87,79);}
            a:active {color:rgb(178,180,179);}  /* selected link Pluff Mud*/ 
        </style>
    </head>
    <div class="text-center">
        @yield('header')
        <ul class="nav nav-pills">
            <li><a href="/public">Home</a></li>
            <li><a href="#Questionaire">Questionaire</a></li>
            <li><a href="/public/mygrades">My Grades</a></li>

            <li><a href="/public/help">Help</a></li>

            <li><a href="#Help">Help</a></li>

            <li><a href="/public/login">Logout</a></li>
        </ul>
    </div>
    <body>
        @yield('content')
    </body>
</html>