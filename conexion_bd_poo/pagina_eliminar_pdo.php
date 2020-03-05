<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$codigo = $_POST['codigo'];
		try{
			$conexion = new PDO("mysql:host=localhost; dbname=prueba", "root", "");
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conexion->exec("SET CHARACTER SET utf8");
			$sql="DELETE FROM alumnos WHERE codigo = :cod";
			$resultado = $conexion->prepare($sql);
			$resultado->execute(array(":cod"=>$codigo));
			echo "Registro eliminado";
			$resultado->closeCursor();
		}catch(Exception $e){
			die("Error: " . $e->GetMessage());
		}finally{
			$conexion=null;
		}
	?>
</body>
</html>