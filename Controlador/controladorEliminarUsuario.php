<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloUsuario.php");
  
	
	$usuario = new Usuario();
    $datosS = $usuario->getUsuario();

    require_once("../Vista/vistaEliminarUsuario.php");

	

	if(isset($_POST['eli'])){
		$ced = $_POST['ced'];
		$usuario->EliminarUsuario($ced);
		echo("<meta http-equiv='refresh' content='0.1'>");
	}

	

    ?>