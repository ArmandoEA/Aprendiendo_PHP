<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		$carrera = "Computación";
		$semestre = "Tercero";
		try{
			$conexion = new PDO("mysql:host=localhost; dbname=prueba", "root", "");
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conexion->exec("SET CHARACTER SET utf8");
			$sql="SELECT * FROM alumnos WHERE carrera = :car AND semestre = :sem";
			$resultado = $conexion->prepare($sql);
			$resultado->execute(array(":car"=>$carrera, ":sem"=>$semestre));
			while ($fila=$resultado->fetch(PDO::FETCH_ASSOC)) {
				echo "Código: ".$fila['codigo']."<br>";
				echo "Nombre: ".$fila['nombre']."<br>";
				echo "Carrera: ".$fila['carrera']."<br>";
				echo "Semestre: ".$fila['semestre']."<br><br>";
			}
			$resultado->closeCursor();
		}catch(Exception $e){
			die("Error: " . $e->GetMessage());
		}finally{
			$conexion=null;
		}
	?>
</body>
</html>