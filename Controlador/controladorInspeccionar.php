<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloPedidos.php");
  
	
	$pedidos = new Pedidos();
    //

    $Numero=$_GET['NumPedido'];

    $datosPedido = $pedidos->getPedidoInspeccionar($Numero);
    $productos=$pedidos->getProductosInspeccionar($Numero);
    

    require_once("../Vista/inspeccionarPedido.php");

	
	

	

    ?>