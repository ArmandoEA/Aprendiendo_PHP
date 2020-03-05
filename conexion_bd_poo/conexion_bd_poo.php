<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$conexion = new mysqli("localhost", "root", "", "prueba");
		if($conexion->connect_errno){
			echo "Fallo en la conexión: ". $conexion->connect_errno;
		}
		$conexion->set_charset("utf8");
		$sql="SELECT * FROM alumnos";
		$resultado=$conexion->query($sql);
		if($conexion->errno){
			die($conexion->error);
		}
		//ARRAY ASOCIATIVO
		/*while ($fila=$resultado->fetch_assoc()) {
			echo $fila['codigo']."<br>";
			echo $fila['nombre']."<br>";
			echo $fila['carrera']."<br>";
			echo $fila['semestre']."<br><br>";
		}*/
		//ARRAY INDEXADO
		while ($fila=$resultado->fetch_array()) {
			echo $fila[0]."<br>";
			echo $fila[1]."<br>";
			echo $fila[2]."<br>";
			echo $fila[3]."<br><br>";
		}
		$conexion->close();
	?>

</body>
</html>