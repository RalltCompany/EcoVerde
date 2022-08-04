<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloUsuario.php");
    require_once("../Modelo/modeloProducto.php");
	
	$usuario = new Usuario();
    $datosUsuarios = $usuario->getUsuario();



    $producto=new Producto();
    $datosProductos= $producto->getProducto();
    require_once("../Vista/vistaReportes.php");

	
    
	
    
    

    ?>