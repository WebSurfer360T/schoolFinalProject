<html>

<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="tcb3.png" />


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
 <p> Inserir Número Bilhetes Inicial<input type="text" name="bilhetes" size=10> </p>
<p> Inserir Número Bilhetes Final<input type="text" name="bilhetes" size=10> </p>
<p> Inserir Número Bilhetes Nova Serie Inicial<input type="text" name="bilhetes_serie" size=10> </p>
<p> Inserir Número Bilhetes Nova Serie Final<input type="text" name="bilhetes_serie" size=10> </p>
<p> Inserir ID Motorista  <input type="text" name="id_motorista"size=5> </p>
<p> Carreira <input type="text" name="carreira"    size=5> </p>
<p> Hora <input type="text" name="hora" size=10> </p>
<p> Carreira <input type="text" name="Carreira" size=10> </p>

</div>



</div>



<!--

<div class="footer">
  <div class="row">
  <div class="column" >
     <p><img src="tcb.jpg" style="width: 97px; height: 93px; margin-top: -35px;"/> </p>
  </div>
  <div class="column">
     <p onclick="window.open('login.php')"> Entrar </p>
  </div>
  <div class="column" >
   
     <p> Registar  </p>
  </div>
  <div class="column" >
   
      <p>Cookies </p>
  </div>
</div>
</div>
 
 
 -->

</body>

</html>