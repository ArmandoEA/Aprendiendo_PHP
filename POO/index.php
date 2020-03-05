<!doctype <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Titulo</title>

</head>
<body>
	<?php
		include("vehiculo.php");

		$mazda = new Coche();
		$pegaso = new Camion();

		echo "El mazda tiene ". $mazda->get_ruedas()." ruedas <br>";
		echo "El pegaso tiene ". $pegaso->get_ruedas()." ruedas <br>";
	?>
</body>
</html>