<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
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
		$carrera=$_GET["buscar"];

		require("datos_conexion.php");
		$conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
		if(mysqli_connect_errno()){
			echo "Fallo al conectar con la BD <br>";
			exit();
		}
		mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");
		mysqli_set_charset($conexion, "utf8");
		$sql = "SELECT * FROM alumnos WHERE carrera = ?";
		$resultado=mysqli_prepare($conexion, $sql);	//preparar la consulta
		$ok=mysqli_stmt_bind_param($resultado, "s", $carrera);	//guarda un booleano; si la función tuvo éxito. "s"=tipo string, "i"=integer, "d"=double
		$ok=mysqli_stmt_execute($resultado);	//devuelve un booleano, si la ejecución tuvo éxito
		if($ok==false){
			echo "Error al ejecutar la consulta";
		}else{
			$ok=mysqli_stmt_bind_result($resultado, $codigo, $nombre, $carrera, $semestre);	//los parámetros es la variable $resultado y una lista de variables en las que se guardarán los resultados que devuelva
			echo "Alumnos encontrados: <br><br>";
			while (mysqli_stmt_fetch($resultado)) {
				echo "Código: $codigo <br>";
				echo "Nombre: $nombre <br>";
				echo "Carrera: $carrera <br>";
				echo "Semestre: $semestre <br><br>";
			}
			mysqli_stmt_close($resultado);
		}
	?>

</body>
</html>