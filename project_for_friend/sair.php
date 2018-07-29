<?php
session_start();
unset($_SESSION["sessioname"]); // unset the variable
session_destroy(); // detroy it
header("location: index.php"); // head home
?>