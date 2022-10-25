<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloPedidos.php");
  
	
	$pedidos = new Pedidos();
    $datos = $pedidos->getPedidosAdmin("Aceptado");
    

    require_once("../Vista/vistaGestionarPedidos.php");

	
	

	

    ?>