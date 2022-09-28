<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloUsuario.php");
  
	
	$usuario = new Usuario();
    $datosS = $usuario->getUsuario();



	

	if(isset($_GET['Cedula'])){ 
		$ced = $_GET['Cedula'];
		$usuario->EliminarUsuario($ced);
		header("location:controladorUsuariosAdmin.php");
	}


	if(isset($_GET['CedulaAceptar'])){



	}

	if(isset($_GET['CedulaRechazar'])){



	}

	

    ?>