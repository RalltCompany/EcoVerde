<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloPedidos.php");
  
	
	$pedidos = new Pedidos();
    //

    $Numero=$_GET['NumPedido'];

    $datosPedido = $pedidos->getPedidoInspeccionar($Numero);
    $pedidos = new Pedidos();
    $productos=$pedidos->getProductosInspeccionar($Numero);
    
    
    require_once("../Vista/inspeccionarPedido.php");

	
	

	if(isset($_POST['Armado'])){
        $Direccion=$_POST['DireccionPed'];
        if($pedidos->PedidoArmado($Numero, $Direccion)){
            echo "<script>window.location='controladorGestionarPedidos.php?armado=1'</script>";
        }

    }

    ?>