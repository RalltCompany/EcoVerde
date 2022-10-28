<?php
   
	require_once("../Modelo/modeloPedidos.php");
	require_once("../db/db.php");

	$producto=new Pedidos();

	$datos=$producto->AlertaProducto($_GET["codigo"], $_GET["Cantidad"]);

	foreach($datos as $dato){
		
		echo $dato['disponibilidad-'.$_GET['Cantidad'].'']>=0;
		/*if($dato['disponibilidad-'.$_GET['Cantidad'].'']>=0){ 

		$_SESSION['ocarrito']->introduce_producto($_GET["codigo"], $_GET["nombre"], $_GET["precio"]);
		header("Location:controladorTienda.php?pagina=".$_GET['pagina']."");
		
		}else{
			header("Location:controladorTienda.php?pagina=".$_GET['pagina']."&Alerta");;
		}*/
	}
   
?>