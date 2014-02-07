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
        {{ HTML::style('css/small-device.css', array('type' => 'text/css','media'=> 'only screen and (max-width: 600px), only screen and (max-device-width: 600px)')) }}
        @yield('stylesheets')
        <style>
            @yield('styles')
        </style>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery-2.0.3.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.js"></script>
    </head>
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
            <li><a href="/Capstoneconnect/public/home">Home</a></li>
            <li><a href="/Capstoneconnect/public/questionnaire">Questionnaire</a></li>
            <li><a href="/Capstoneconnect/public/mygrades">My Grades</a></li>
            <li><a href="/Capstoneconnect/public/help">Help</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/Capstoneconnect/public/logout">Logout</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    <body>
        <h1><u><b>@yield('header')</u></b></h1> 
        <div class="BigWhite container">
            @yield('content')
        </div>
           
    </body>
</html>