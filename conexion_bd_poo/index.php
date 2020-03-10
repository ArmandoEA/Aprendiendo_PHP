<?php 
	require("DevuelveAlumnos.php");
	$alumnos = new DevuelveAlumnos();
	$array_alumnos = $alumnos->get_alumnos();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		foreach($array_alumnos as $elemento) { 
			echo $elemento['codigo']. "<br>";
			echo $elemento['nombre']. "<br>";
			echo $elemento['carrera']. "<br>";
			echo $elemento['semestre']. "<br><br>";
		}
	?>
</body>
</html>