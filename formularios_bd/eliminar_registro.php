<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$cod=$_GET["codigo"];
		require("datos_conexion.php");
		$conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
		if(mysqli_connect_errno()){
			echo "Fallo al conectar con la BD <br>";
			exit();
		}
		mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");
		mysqli_set_charset($conexion, "utf8");
		$consulta="DELETE FROM alumnos WHERE codigo = '$cod'";
		$resultado=mysqli_query($conexion, $consulta);
		if ($resultado==false) {
			echo "Error en la consulta";
		}else{
			if(mysqli_affected_rows($conexion)==0){
				echo "No se encontró ningún registro con este código";
			}else{
				if (mysqli_affected_rows($conexion) == 1) {
					echo "Se ha eliminado 1 registro<br>";
				}else{
					echo "Se han eliminado ".mysqli_affected_rows($conexion)." registros<br>";
				}
			}
		}

		mysqli_close($conexion);
	?>
</body>
</html>	