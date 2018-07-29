<?php

$server = 'localhost';

$user = 'root';

$pass = 'usbw';

$db = 'tcb';


// Connect to Database

$connection = mysql_connect($server, $user, $pass, $db)

or die ("Could not connect to server ... \n" . mysql_error ());

mysql_select_db($db)

or die ("Could not connect to database ... \n" . mysql_error ());


?>
