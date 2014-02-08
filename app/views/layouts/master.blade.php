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

        <link rel="stylesheet" hre=f"css/bootstrap-responsive.css" />

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
             <li class="dropdown">  
         <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php $user = DB::table('users')->select('email')->get();print_r($user);?><b class="caret bottom-up"></b></a>  
         <ul class="dropdown-menu bottom-up pull-right">  
            
         
       <li><a href="/Capstoneconnect/public/logout">Logout</a></li>  
         </ul>  
       </li>  

           


         <!--   <div class="dropdown"> <a id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="/page.html">
    Dropdown <span class="caret"></span>
  </a>


  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
     <li><a href="/Capstoneconnect/public/logout"><font color = Red>Logout</font></a></li>
  </ul>
</div>
-->

        </ul>
    </div>
    <body>
        @yield('content')
           
    </body>
</html>