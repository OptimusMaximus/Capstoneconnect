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

   <form role="form">
<!--------  <div class ="Login">
  <div class="form-group">
    <label for="exampleInputEmail1">Email Address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

   <label class="checkbox">
                    <input type="checkbox" value="remember-me" />
                    Keep me signed in
                </label>  
  <button type="submit" class="btn btn-default">Submit</button>

  <br /><br />Forgot your password? Click Here

</div>---->
<div class="container">
    <div class="row">
        <div class="col-md-3 col-md-offset-4">
            <div class="account-box">
                
                <form class="form-signin" action="#">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email" required autofocus />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" required />
                </div>
                <label class="checkbox">
                    <input type="checkbox" value="remember-me" />
                    Keep me signed in
                </label>
                <button class="btn btn-lg btn-block purple-bg" type="submit">
                    Sign in</button>
                </form>
                <a class="forgotLnk" href="http://www.jquery2dotnet.com">I can't access my account</a>
               <!-- <div class="or-box">
                    <span class="or">OR</span>
                    <div class="row">
                        <div class="col-md-6 row-block">
                            <a href="/.www.facebook.com" class="btn btn-facebook btn-block">Facebook</a>
                        </div>
                        <div class="col-md-6 row-block">
                            <a href="www.google.com" class="btn btn-google btn-block">Google</a>
                        </div>
                    </div>
                </div>
                <div class="or-box row-block">
                    <div class="row">
                        <div class="col-md-12 row-block">
                            <a href="/public/register" class="btn btn-primary btn-block">Create New Account</a>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</div>

</form>
</body>
</html>