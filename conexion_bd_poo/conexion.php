<?php 
	require("config.php");

	class Conexion
	{
		protected $conexion_db;

		//FORMA CON PDO
		function __construct(){
			try{
				$this->conexion_db = new PDO('mysql:host=localhost; dbname=prueba', 'root', '');
				$this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$this->conexion_db->exec("SET CHARACTER SET utf8");

				return $this->conexion_db;
			}catch(Exception $e){
				echo "Error en la linea ".$e->getLine();
			}
		}

		//FORMA ORIENTADA A OBJETOS
		/*function __construct(){
			$this->conexion_db = new mysqli(DB_HOST, DB_USUARIO, DB_CONTRA, DB_NOMBRE);
			if ($this->conexion_db->connect_errno) {
				echo "Fallo en la conexion: " . $this->conexion_db->connect_error;
			}
			$this->conexion_db->set_charset(DB_CHARSET);
		}*/
	}
?>