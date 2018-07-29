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
  width: 30%;
  margin: 50px auto 0px;
  color: white;
  background: #B9D135;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  padding: 20px;
}
form, .content {
  width: 30%;
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
</style>

  <title>Entrar</title>
  <link rel="icon" type="image/png" href="tcb3.png" />
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
</head>
<body>
  <div class="header">
  	<h2>Entrar</h2>
  </div>
	
  <form method="post" action="">
  	<?php include('errors.php'); ?>
  	
	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Nome de Utilizador</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Palavra-Passe</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Entrar</button>
  	</div>
	
  	<p>
  		Ainda não possui uma conta? <a href="register.php"> Registar</a>
  	</p>
  </form>
</body>
</html>