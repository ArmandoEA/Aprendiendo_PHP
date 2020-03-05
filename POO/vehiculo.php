<?php
	class Coche{
		protected $ruedas;
		var $color;
		var $motor;

		function __construct(){
			$this->ruedas=4;
			$this->color="";
			$this->motor=1600;
		}

		function get_ruedas(){
			return $this->ruedas;
		}

		function arranca(){
			echo "El coche arranca<br>";
		}

		function set_color($color_coche){
			$this->color = $color_coche;
			echo "El color del coche es ".$this->color."<br>";
		}
	}

	/*********************************************************************/

	class Camion extends Coche{

		function __construct(){
			$this->ruedas=8;
			$this->color="gris";
			$this->motor=2600;
		}

		function arranca(){
			echo "El coche arranca<br>";
		}

		function establece_color($color_coche){
			$this->color = $color_coche;
			echo "El color del coche es ".$this->color."<br>";
		}
	}
?>