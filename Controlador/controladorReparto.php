<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloPedidos.php");

	
	$pedidos = new Pedidos();
    $datos=$pedidos->getPedidosEntrega();

    require_once("../Vista/menuReparto.php");



    ?>