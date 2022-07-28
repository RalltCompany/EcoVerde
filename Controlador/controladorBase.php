<?php

	//Llamada al modelo
	// require_once("models/mascotas_model.php");
	
	//Creamos un objeto de la clase personas_model
	// $mascota = new mascotas_model();
	//Mediante el objeto invocamos al metodo getPersonas y guardamos
	//el resultado dentro de $datos
	// datos = $mascota->getMascotas();
	 
	//Llamada a la vista
	require_once("vista/inicio.php");

	

	if(isset($_POST['guardar'])){
		$nombre = $_POST['nom'];
		$raza=$_POST['raza'];
		$fecha=$_POST['fecha'];
		$mascota->insertMascotas($nombre, $raza, $fecha);
		header('location:index.php');
	}

	if(isset($_POST['Eliminar'])){
		$id=$_POST['ID'];
		$mascota->deleteMascotas($id);
		header('location:index.php');
	}

	if(isset($_POST['Modificar'])){
		$id=$_POST['ID'];
		$nombre = $_POST['nom'];
		$raza=$_POST['raza'];
		$fecha=$_POST['fecha'];
		$mascota->modificarMascotas($id, $nombre, $raza, $fecha);
		header('location:index.php');
	}
	
?>

