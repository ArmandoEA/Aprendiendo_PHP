<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$codigo = $_POST['codigo'];
		$nombre = $_POST['nombre'];
		$carrera = $_POST['carrera'];
		$semestre = $_POST['semestre'];
		try{
			$conexion = new PDO("mysql:host=localhost; dbname=prueba", "root", "");
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conexion->exec("SET CHARACTER SET utf8");
			$sql="INSERT INTO alumnos (codigo, nombre, carrera, semestre) VALUES (:cod,:nom,:car,:sem)";
			$resultado = $conexion->prepare($sql);
			$resultado->execute(array(":cod"=>$codigo, ":nom"=>$nombre, ":car"=>$carrera, ":sem"=>$semestre));
			echo "Registro insertado";
			$resultado->closeCursor();
		}catch(Exception $e){
			die("Error: " . $e->GetMessage());
		}finally{
			$conexion=null;
		}
	?>
</body>
</html>