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
					session_start();	//crear una sesión
					$_SESSION['usuario'] = $_POST['login'];
				}else{
					echo "Usuario o contraseña incorrecta";
				}	
			}catch(Exception $e){
				die("Error: " . $e->getMessage());
			}
		}
	?>
	
	<?php 
		if(!isset($_SESSION["usuario"])){	//si no se ha iniciado sesión
			include("formulario.php");
		}else{
			echo "Usuario: " . $_SESSION["usuario"];
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
</body>
</html>