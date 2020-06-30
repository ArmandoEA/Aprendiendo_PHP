<!DOCTYPE html>
<html>
<head>
	<title>Bienvenido</title>
	<style>
		h1{
			text-align: center;
		}
		table{
			width: 25%;
			background-color: #FFAE00; 
			border: 2px dotted #F00;
			margin: auto;
		}
		.izq{
			text-align: right;
		}
		.der{
			text-align: left;
		}
		td{
			text-align: center;
			padding: 10px;
		}
	</style>
</head>
<body>
	<?php 
		$autenticado = false;
		if(isset($_POST["enviar"])){
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
					$autenticado = true;
					if(isset($_POST['recordar'])){
						setcookie("nombre_usuario", $_POST['login'], time()+86400);
					}
				}else{
					echo "Usuario o contraseña incorrecta";
				}	
			}catch(Exception $e){
				die("Error: " . $e->getMessage());
			}
		}
	?>
	
	<?php 
		if($autenticado == false){
			if(!isset($_COOKIE['nombre_usuario'])){
				include("formulario.php");
			}
		}

		if(isset($_COOKIE['nombre_usuario'])){
			echo "Hola " . $_COOKIE['nombre_usuario'];
		}elseif($autenticado == true){
			echo "Hola " . $_POST['login'];
		}
	?>

	<h2>CONTENIDO DE LA PÁGINA</h2>

	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	</p>

	<?php 
		if($autenticado == true || isset($_COOKIE['nombre_usuario'])){
			echo "Usted está autenticado";
		}
	?>
</body>
</html>