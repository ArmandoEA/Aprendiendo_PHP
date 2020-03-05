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
		$busqueda=$_GET["buscar"];
		require("datos_conexion.php");
		$conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
		if(mysqli_connect_errno()){
			echo "Fallo al conectar con la BD <br>";
			exit();
		}
		mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");
		mysqli_set_charset($conexion, "utf8");
		$consulta="SELECT * FROM alumnos where codigo LIKE '%$busqueda%'";
		$resultado=mysqli_query($conexion, $consulta);

		//rescatar datos de forma asociativa
		while (($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)) == true) {
			echo "<form action='actualizar_registro.php' method='get'>";
			echo "<input type='text' name='codigo' value='".$fila['codigo']."' readonly> <br>";
			echo "<input type='text' name='nombre' value='".$fila['nombre']."'><br>";
			echo "<input type='text' name='carrera' value='".$fila['carrera']."'><br>";
			echo "<input type='text' name='semestre' value='".$fila['semestre']."'><br>";
			echo "<input type='submit' name='enviando' value='Actualizar'>";
			echo "</form>";
		}

		mysqli_close($conexion);	
	?>

</body>
</html>