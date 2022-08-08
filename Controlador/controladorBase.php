<?php


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

