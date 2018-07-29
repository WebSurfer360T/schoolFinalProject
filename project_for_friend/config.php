<?php
mysql_connect("localhost", "root", "usbw") or die(mysql_error()); // connects to database or outputs an error
mysql_select_db("tcb") or die(mysql_error()); // selects database from chosen server or outputs error
?>