<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		session_start();	//Reanudar la sesión ya existente
		if(!isset($_SESSION['usuario'])){
			header("location:login.php");
		}
	?>

	<h1>Bienvenido</h1>

	<?php  
		echo "Usuario: " . $_SESSION['usuario'] . "<br><br>";
	?>

	<p><a href="cerrar_sesion.php">Cerrar sesión</a></p>
</body>
</html>