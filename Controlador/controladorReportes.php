<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloUsuario.php");
    require_once("../Modelo/modeloProducto.php");
	require_once("../Modelo/modeloPedidos.php");
	$usuario = new Usuario();
    $datosUsuarios = $usuario->getUsuario();



    $producto=new Producto();
    $datosProductos= $producto->getProducto();

    $pedido=new Pedidos();
    $datosPedidos=$pedido->getPedidos();
    require_once("../Vista/vistaReportes.php");

	
    
	
    
    

    ?>