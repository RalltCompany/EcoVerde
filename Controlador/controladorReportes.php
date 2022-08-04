<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloUsuario.php");

	
	$usuario = new Usuario();
    $datosUsuarios = $usuario->getUsuario();

    require_once("../Vista/vistaReportes.php");

	
    $n=0;
    while($r=$query->fetch_object()){ $datosUsuarios[]=$r; $n++;}
	
    
    

    ?>