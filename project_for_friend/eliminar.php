<?php

function renderForm($first1, $error)

{

?>

<!DOCTYPE HTML>

<html>

<head>

<title> Eliminar dados </title>                     						     

  <link rel="icon" type="image/png" href="tcb3.png" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  
</head>

<body>

<div class="header">
  	<h2>Eliminar dados</h2>
  </div>


<?php



if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>
<html>

<head>

<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<style>
* {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background: #F8F8FF;
 font-family: 'Montserrat', sans-serif;
}

.header {
  width: 50%;
  margin: 50px auto 0px;
  color: white;
  background: #B9D135;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  padding: 20px;
}
form, .content {
  width: 50%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;

}
.input-group {
  margin: 10px 0px 10px 0px;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
 
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #B9D135;
  border: none;
}
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  
  text-align: left;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}



.btn {
  padding: 10px;
  font-size: 15px;
  color: white;
  background: #B9D135;
  border: none;
}






@media only screen and (max-width: 600px) {
    form {
		padding: 50px 50px 50px 50px ;
       }

 .header {
	padding: 50px 50px 50px 50px ;
       }

}




</style>




 <form method="post" action="">
  	<p> Inserir ID do Motorista <br>  <input type="text" name="id"size=13 value="<?php echo $first1; ?>"> </p>
	

<p>
<br> 
<input class="btn" type="submit" name="submit" value="Eliminar"><br> </p>


</form>

</body>

</html>

<?php

}



include('connection_file.php');
mysql_select_db("tcb");





// check if the form has been submitted. If it has, start to process the form and save it to the database

if (isset($_POST['submit']))

{

// get form data, making sure it is valid

$firstname1 = mysql_real_escape_string(htmlspecialchars($_POST['id']));





// check to make sure both fields are entered

if ($firstname1 == '')

{

// generate error message

$error = '<center>Preencha todos os campos</center>';



// if either field is blank, display the form again

renderForm($firstname1, $error);

}

else

{

// save the data to the database

mysql_query("DELETE FROM bilheteira WHERE id='$firstname1'")

or die(mysql_error());



// once saved, redirect back to the view page

header("Location: entrar2.php");

}

}

else

// if the form hasn't been submitted, display the form

{

renderForm('','','','','','','','');

}

?>