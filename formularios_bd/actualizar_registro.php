<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$cod=$_GET["codigo"];
		$nom=$_GET["nombre"];
		$car=$_GET["carrera"];
		$sem=$_GET["semestre"];
		require("datos_conexion.php");
		$conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
		if(mysqli_connect_errno()){
			echo "Fallo al conectar con la BD <br>";
			exit();
		}
		mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");
		mysqli_set_charset($conexion, "utf8");
		$consulta="UPDATE alumnos SET nombre='$nom', carrera = '$car', semestre = '$sem' WHERE codigo = '$cod'";
		$resultado=mysqli_query($conexion, $consulta);
		if ($resultado==false) {
			echo "Error en la consulta";
		}else{
			echo "Registro guardado<br><br>";
			echo "$cod<br>$nom<br>$car<br>$sem<br>";
		}

		mysqli_close($conexion);
	?>
</body>
</html>	