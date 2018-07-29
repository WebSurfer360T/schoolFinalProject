<html> 

<head> <title> Listar Bilhetes Registados </title> </head>
<body> <h2> Listar Bilhetes Registados:  </h2> <br> 
<?php 
 $ligax = mysqli_connect('localhost:3307', 'root', 'usbw');
 if (!$ligax) {echo '<p> Falha na ligação.';}
 mysqli_select_db($ligax, 'bilhetes_bd');
 $consulta = "Select * From bilhetes_tb";
 $result = mysqli_query($ligax, $consulta);
 $nregistos = mysqli_num_rows($result);
 echo "N de bilhetes registados: ".$nregistos ;
?>
<br> <table border="1"> 
<tr><td> Bilhetes: <td> Bilhetes Nova Serie: <td> Carreira:  <td> Data:  <td> Identificacao do Motorista:</tr> 
<?php
 for ($i=0; $i <$nregistos; $i++)  {
   $registo = mysqli_fetch_assoc($result);
   echo '<tr>';
   echo '<td>'.$registo['bilhetes'];
   echo '<td>'.$registo['bilhetes_serie'];
   echo '<td>'.$registo['carreira'];
   echo '<td>'.$registo['data'];
   echo '<td>'.$registo['id_motorista'];
   echo '</tr>'; 
 }
?>
</table> <br> <a href="index.html">Voltar a entrada</a>
</body>
</html> 