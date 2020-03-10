<?php 
	require("conexion.php");

	class DevuelveAlumnos extends conexion
	{
		function __construct()
		{
			parent::__construct();
		}

		public function get_alumnos(){
			$sql = "SELECT * FROM alumnos";
			$sentencia = $this->conexion_db->prepare($sql);
			$sentencia->execute(array());
			$resultado = $sentencia->fetchAll(PDO::FETCH_ASSOC);
			$sentencia->closeCursor();

			return $resultado;
			$this->conexion_db = null;	//por si hay un error lo elimina de memoria
		}

		//FORMA ORIENTADA A OBJETOS
		/*public function get_alumnos(){
			$resultado = $this->conexion_db->query('SELECT * FROM alumnos');
			$productos = $resultado->fetch_all(MYSQLI_ASSOC);

			return $productos;
		}*/
	}
?>