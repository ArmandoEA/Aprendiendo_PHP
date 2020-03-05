<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
		function ejecuta_consulta($labusqueda){
			require("datos_conexion.php");
			$conexion=mysqli_connect($db_host, $db_usuario, $db_contra, $db_nombre);
			if(mysqli_connect_errno()){
				echo "Fallo al conectar con la BD <br>";
				exit();
			}
			mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la BD");
			mysqli_set_charset($conexion, "utf8");
			$consulta="SELECT * FROM libro WHERE nombreLibro LIKE '%$labusqueda%'";
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
		}	
	?>
</head>
<body>
	<?php 
		$mibusqueda=$_GET["buscar"];
		$mipag=$_SERVER["PHP_SELF"];

		if($mibusqueda!=NULL){
			ejecuta_consulta($mibusqueda);
		}else{
			echo ("<form action='".$mipag."' method='get'>
				<label>Buscar:<input type='text' name='buscar'></label>
				<input type='submit' name='enviando' value='Dale!'>
				</form>");
		}
	?>
</body>
</html>