<!--This is a blade template that goes in email message to site administrator-->
<?php
//get the first name
$first_name = Input::get('first_name');
$last_name = Input::get ('last_name');
$email = Input::get ('email');
$message = Input::get ('message');
date_default_timezone_set('America/New_York');
$date_time = date("F j, Y, g:i a");
?> 

<h1>To All Users</h1>

<p>
First name: <?php echo ($first_name); ?> <br>
Last name: <?php echo($last_name);?> <br>
Email address: <?php echo ($email);?> <br>
Date: <?php echo($date_time);?><br>
<b>Message: </b><?php echo ($message);?><br>
</p>