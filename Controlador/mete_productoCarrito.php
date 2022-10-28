<?php
   
	include("../Modelo/modeloPedidos.php");

    

	
	require_once("../db/db.php");

	$producto=new Pedidos();

	$datos=$producto->AlertaProducto($_GET["codigo"], $_GET["Cantidad"]);

	foreach($datos as $dato){
		
		if($dato['disponibilidad-'.$_GET['Cantidad'].'']>=0){ 

		$_SESSION['ocarrito']->introduce_producto($_GET["codigo"], $_GET["nombre"], $_GET["precio"]);
		header("Location:controladorCarrito.php?");
		
		}else{
			header("Location:controladorCarrito.php?Alerta");
		}
	}
	
  
?>