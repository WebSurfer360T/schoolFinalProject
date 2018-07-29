<?php 
  session_start(); 

  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: indexprincipal.php");
  }
?>

<html>

<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="tcb3.png" />


<div>
<?php if (isset($_SESSION['username'])) : ?>
<p> Está conectado com: <?php echo $_SESSION['username']; ?> </p>

<?php endif ?>
</div>


<style>

body{
background: linear-gradient(2deg, #bdd630, #acc32d, #7f901f);
background-size: 600% 600%;

-webkit-animation: AnimationName 47s ease infinite;
-moz-animation: AnimationName 47s ease infinite;
animation: AnimationName 47s ease infinite;

@-webkit-keyframes AnimationName {
    0%{background-position:51% 0%}
    50%{background-position:50% 100%}
    100%{background-position:51% 0%}
}
@-moz-keyframes AnimationName {
    0%{background-position:51% 0%}
    50%{background-position:50% 100%}
    100%{background-position:51% 0%}
}
@keyframes AnimationName { 
    0%{background-position:51% 0%}
    50%{background-position:50% 100%}
    100%{background-position:51% 0%}
}

color: #fff;
font-family: Calibri;

background-image: url('bus.png');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
	background-size: 30%;
	background-color: #bdd630;
	background-position-y: 300px;
	
	
	

}


.btn-group button {
    background-color: #fff; 
    border: 1px solid #bdd630; 
    color: #7f901f; 
    padding: 10px 24px; 
    cursor: pointer; 
    float: left;
	font-size: 18px;
}


.btn-group:after {
    content: "";
    clear: both;
    display: table;
}

.btn-group button:not(:last-child) {
    border-right: none; 
}


.btn-group button:hover {
    background-color: #8c9b35;
	color: #fff;
}

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #fff;
   color: green;
   text-align: center;
}

* {
    box-sizing: border-box;
}


.column {
    float: left;
    width: 25%;
   background-color: #fff;
    height: 70px; 
	margin-top: 20px;
}


.row:after {
	
    content: "";
    display: table;
    clear: both;
}



@media only screen and (max-width: 600px) {
    body {
       background-image: url('bus.png');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; 
	background-size: 70%;
	background-color: #bdd630;
	background-position-y: 300px;
    }
}

</style>

<title> Transportes Coletivos do Barreiro </title>


</head>


<body>
<div style="font-size: 35px; margin-top: 30px;"> 
<p style="text-align: center;"> Transportes Coletivos do Barreiro </p> <br> <br>

<div class="btn-group" style="width:100%">
  <!--<button style="width:33.3%" onclick="window.open('inserir_dados.php' , '_self')" >Inserir </button> -->
    <button style="width:50%" onclick="window.open('mostrar_dados.php' , '_self')" >Ver dados</button>
  <button style="width:50%"  name="logout" onclick="window.open('indexprincipal.php' , '_self')">Sair </button>

</div>



</div>


</body>

</html>