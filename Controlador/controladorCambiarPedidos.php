<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloPedidos.php");
  
	
	$pedidos = new Pedidos();

    $datos = $pedidos->getPedidosAdmin("Armado");
  
    
    
    require_once("../Vista/vistaCambiarPedidos.php");

	
	if(isset($_GET['armado'])){

        $numero=$_GET['armado'];

        if($pedidos->PedidoAEntregar($numero)){
            echo "<script>window.location='controladorCambiarPedidos.php?cambiado'</script>";
        }

    }

	

    ?>