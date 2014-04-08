<!--This is a blade template that goes in email message to old contact email-->
<?php
//get the new email that contact was changed to
$email = Input::get ('email');
date_default_timezone_set('America/New_York');
$date_time = date("F j, Y, g:i a");
?> 

<h1>Capstone Connect</h1>

<p>
Contact Email Address Changed To: <?php echo ($email);?> <br>
Date: <?php echo($date_time);?><br>


</p>