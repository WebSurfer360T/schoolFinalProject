<?php
require_once "config.php"; // include the database information
$sql = mysql_query("SELECT * FROM users WHERE username='".addslashes($_POST['username'])."'") or die("O nome de Utilizador está incorrecto. MySQL erro:".mysql_error()); // checks if username exists
$result = mysql_fetch_array($sql); // puts the database information into an array

if($result['password'] == sha1($_POST['password'])) { // if the passwords match
session_start(); // start the session

$_SESSION["sessioname"] = $_POST["username"];
header('Location: seguranca.php');
}
else{
echo 'Dados Errados, tente de novo';
}

?>