<!DOCTYPE html>
<html>
    <head>
        <title>
          Capstone Connect
        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <!-- CSS are placed here -->
        <link rel="stylesheet" href="css/bootstrap.css" />
        <link rel="stylesheet" href="css/bootstrap-responsive.css" />
        <link rel="stylesheet" type="text/css" href="css/base.css" />
        <style>
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
            .checkbox{
              color:black;
            }
            ul.nav-pills a:link {background-color: none}
            ul.nav-pills a:hover {background-color:rgb(178,180,179);}
            ul.nav-pills a:focus {background-color:rgb(178,180,179);}
            ul.nav-pills a:active {background-color:rgb(178,180,179);}

            a:link {color:#FFFFFF;}      /* unvisited link white */
            a:visited {color:#FFFFFF}  /* visited link white*/
            a:hover {color:#000000;}  /* mouse over link State House Gray*/
            a:focus {color:#000000;}
            a:active {color:#000000;}  /* selected link Pluff Mud*/ 
            </style>
    </head>
    <div class="text-center">
      <h1>Capstone Connect</h1>
      
    </div>
    <body>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

   <br /><br />
<div class="Login">
      <legend>New to Capstone Connect? Sign up!</legend>
    <form accept-charset="UTF-8" action="" method="post">
        <input class="span3" name="name" placeholder="Full Name" type="text"><br /><br /> 
        <input class="span3" name="username" placeholder="Username" type="text"><br /><br />
        <input class="span3" name="password" placeholder="Password" type="password"> <br /><br />
        <button class="btn btn-primary" type="submit">Sign up</button>
    </form>
</div>



</body>
</html>