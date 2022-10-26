<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloPedidos.php");

	
	$pedidos = new Pedidos();
    $datos=$pedidos->getPedidosRepartidor();

    
    

    require_once("../Vista/menuReparto.php");




    ?>