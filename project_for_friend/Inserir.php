<?php include('server.php') ?>
<!DOCTYPE html>
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
<title> Registar Bilhetes </title>                     						     

  <link rel="icon" type="image/png" href="tcb3.png" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
</head>
<body>
  <div class="header">
  	<h2>Entrar</h2>
  </div>
	
  <form method="post" action="register.php">
  	<p> Inserir ID Motorista <br>  <input type="text" name="id_motorista"size=13> </p>
  	<p> Inserir Número Bilhetes Inicial <br><input type="text" name="bilhetes" size=13> </p>
<p> Inserir Número Bilhetes Final <br><input type="text" name="bilhetes" size=13> </p>
<p> Inserir Número Bilhetes Nova Serie Inicial <br><input type="text" name="bilhetes_serie" size=13> </p>
<p> Inserir Número Bilhetes Nova Serie Final <br><input type="text" name="bilhetes_serie" size=13> </p>
<p> Carreira <br> <input type="text" name="carreira"    size=13> </p>
<p> Hora<br> <input type="text" name="hora" size=13> </p>
<p> Carreira <br><input type="text" name="Carreira" size=13> </p> <br>


 <p> <input class="btn" type="submit"   value="Inserir"> </p> <br>



	
  </form>
</body>
</html>

