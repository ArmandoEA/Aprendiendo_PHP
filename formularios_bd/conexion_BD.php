<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Conexion a Base de datos</title>
	<style>
		table{
			width: 50%;
			border: 1px solid #000;
			margin: auto;
		}
	</style>
</head>
<body>

	<?php
		require("datos_conexion.php");
		$conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
		if(mysqli_connect_errno()){
			echo "Fallo al conectar con la BD <br>";
			exit();
		}
		mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");
		mysqli_set_charset($conexion, "utf8");
		$consulta="SELECT * FROM libro";
		$resultado=mysqli_query($conexion, $consulta);

		echo "<table>";
		while (($fila=mysqli_fetch_row($resultado)) == true) {
			echo "<tr><td>";
			 for ($i=0; $i<count($fila); $i++){ 
			   echo $fila[$i]."</td><td>";
			  }
			  echo "</td></tr>";
		}
		echo "</table>";

		mysqli_close($conexion);	
	?>

</body>
</html>