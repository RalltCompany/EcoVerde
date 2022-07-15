<?php
	class Conectar{
		
		
		public static function conexion(){
			$conexion = new mysqli("localhost", "root", "", "ecoverde");
			
			$conexion->query("SET NAMES 'utf8'"); 
			//Devuelve la conexion
			return $conexion;
		}
		
	}
?>