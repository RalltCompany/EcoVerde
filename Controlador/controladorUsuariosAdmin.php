<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloUsuario.php");

	
	$usuario2 = new Usuario();
    $datos = $usuario2->getUsuario();

    require_once("../Vista/vistaUsuarios.php");

	

	
    
    

    ?>