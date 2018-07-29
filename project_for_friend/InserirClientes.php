<html> 
 <head> <title> Inserir </title> </head>
<body> <h2> Novo cliente </h2>
<?php 
 $cod = $_POST['codcli'];
 $nome = $_POST['nome'];
 $morada = $_POST['morada'];
 echo 'Dados recebidos: <br />';
 echo 'Código: '.$cod.'<br />';
 echo 'Nome: '.$nome.'<br />';
 echo 'Morada: '.$morada.'<br />';
 $ligax = mysqli_connect("localhost:3307", "root", "usbw");
 if (!$ligax)  {echo '<p> Erro: Falha na ligação.'; exit;}
 mysqli_select_db($ligax, 'test');
 $insere = "INSERT INTO cliente ( CodCli, Nome, Morada ) 
VALUES (' ".$cod." ' , ' ".$nome." ' , ' ".$morada." ' )";
 $result = mysqli_query($ligax, $insere);
 if ($result==1) echo "<p>Dados inseridos<br>";
 else echo "<p>Dados não inseridos<br>";
?>
<p> <a href="index.html">Voltar à entrada</a>
<p> <a href="ListarClientes.php">Listar clientes</a> 
</body>
</html> 