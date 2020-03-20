<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		try{
			$base = new PDO("mysql:host=localhost; dbname=prueba", "root", "");
			$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT * FROM usuarios WHERE nombre = :nom AND contrasena = :con";
			$resultado = $base->prepare($sql);
			$nombre = htmlentities(addslashes($_POST['login']));	//evitar inyecciones 
			$contrasena = htmlentities(addslashes($_POST['password']));
			$resultado->bindValue(":nom", $nombre);
			$resultado->bindValue(":con", $contrasena);
			$resultado->execute();
			$numero_registros = $resultado->rowCount();
			if($numero_registros!=0){
				session_start();	//crear una sesión
				$_SESSION['usuario'] = $_POST['login'];
				header("location:usuarios_registrados.php");
			}else{
				header("location:login.php");
			}	
		}catch(Exception $e){
			die("Error: " . $e->getMessage());
		}
	?>
</body>
</html>