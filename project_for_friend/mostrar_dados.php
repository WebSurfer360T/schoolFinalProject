<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = 'usbw'; // Password
$db_name = 'tcb'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$sql = 'SELECT * 
		FROM bilheteira';
		
$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Dados</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			 font-family: 'Montserrat', sans-serif;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #C5D301;
			color: #FFFFFF;
			text-align: center;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
			text-align: center;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: center;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: rgba(75, 112, 69, 0.7);
			color: #fff;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: center;
		}
		.data-table tfoot th:first-child {
			text-align: center;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
		
	 
	</style>
	<meta charset="utf-8">
<link rel="icon" type="image/png" href="tcb3.png" />
</head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<body>
	
	<table class="data-table" style="margin-top: 30px;" >
		
		<thead>
			<tr>
			    <td>IDB</td>
				<th>ID Motorista</th>
				<th>Carreira</th>
				<th>Hora</th>
				<th>Nº de Bilhete Inicial</th>
				<th>Nº de Bilhete Final</th>
				<th>Nº de Série Inicial</th>
				<th>Nº de Série Final</th>
			</tr>
			
			<style>
			
.button {
	MARGIN-TOP: 15PX;
    background-color: #C6D500;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    font-size: 16px;
  padding: 10px 20px;
    width: 130px;
	

	
}
    
	

</style>
			
			 
			
			
			
		</thead>
		<tbody>
	
		
		<?php
		
		while ($row = mysqli_fetch_array($query))
		{
			
			echo '<tr>
			        <td>'.$row['id'].'</td>
					<td>'.$row['id_motorista'].'</td>
					<td>'.$row['carreira'].'</td>
					<td>'.$row['hora'].'</td>
					<td>'.$row['b_inicial'].'</td>
					<td>'.$row['b_final'].'</td>
					<td>'.$row['serie_inicial'].'</td>
					<td>'.$row['serie_final'].'</td>
				</tr>';
			
		}?>
		</tbody>
		
	</table>
	


	
	<center>
	<!--<button class="button" onclick='window.open("inserir_dados.php", "_self")'  > Adicionar </button> -->
			<button class="button" onclick='window.open("editar.php", "_self")'> Editar </button>
			<button class="button" onclick='window.open("eliminar.php", "_self")'> Eliminar </button>
	
	  <button class="button" onclick='window.open("entrar2.php", "_self")'> Voltar </button> </center>
			
</body>
</html>