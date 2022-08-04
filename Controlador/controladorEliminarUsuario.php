<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloUsuario.php");
  
	
	$usuario = new Usuario();
    $datosS = $usuario->getUsuario();



	

	
		$ced = $_GET['Cedula'];
		$usuario->EliminarUsuario($ced);
		header("location:controladorUsuariosAdmin.php");
	

	

    ?>