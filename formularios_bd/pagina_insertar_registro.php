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
		$codigo=$_GET["codigo"];
		$nombre=$_GET["nombre"];
		$carrera=$_GET["carrera"];
		$semestre=$_GET["semestre"];

		require("datos_conexion.php");
		$conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
		if(mysqli_connect_errno()){
			echo "Fallo al conectar con la BD <br>";
			exit();
		}
		mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");
		mysqli_set_charset($conexion, "utf8");
		$sql = "INSERT INTO alumnos(codigo, nombre, carrera, semestre) VALUES (?,?,?,?)";
		$resultado=mysqli_prepare($conexion, $sql);	//preparar la consulta
		$ok=mysqli_stmt_bind_param($resultado, "ssss", $codigo, $nombre, $carrera, $semestre);	//guarda un booleano; si la función tuvo éxito. "s"= string, "i"=integer, "d"=double
		$ok=mysqli_stmt_execute($resultado);	//devuelve un booleano, si la ejecución tuvo éxito
		if($ok==false){
			echo "Error al ejecutar la consulta";
		}else{
			echo "Se ha agregado un nuevo registro<br>";
			mysqli_stmt_close($resultado);
		}
	?>

</body>
</html>