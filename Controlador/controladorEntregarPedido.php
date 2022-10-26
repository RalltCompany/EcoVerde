<?php
date_default_timezone_set('America/Argentina/Buenos_Aires');
    require_once("../db/db.php");
	require_once("../Modelo/modeloPedidos.php");

	
	$pedidos = new Pedidos();
   

    $Numero=$_GET['PedidoEntregar'];

    $pedidos->PedidoEnRuta($Numero);

    $Fecha= date("y-m-d");

    if(isset($_GET['PedidoEntregar'])){
        $datosPedido = $pedidos->getPedidoInspeccionar($Numero);
    }

    require_once("../Vista/vistaEntregarPedido.php");


    if(isset($_POST['Entregado'])){
       $Destinatario=$_POST['Destinatario'];
       if($pedidos->PedidoEntregado($Numero, $_SESSION['CI'], $Destinatario, $Fecha)){
        echo "<script>window.location='../Controlador/controladorReparto.php'</script>";
       }
    } 

    ?>