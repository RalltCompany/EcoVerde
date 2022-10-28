<?php
   
	require_once("../Modelo/modeloPedidos.php");
	require_once("../db/db.php");

	$producto=new Pedidos();

	$CantCarrito=$_SESSION['ocarrito']->ret_cantidadProd($_GET["codigo"]);

	
	 $Cantidad=$_GET["Cantidad"]+$CantCarrito;

	 
	
	$datos=$producto->AlertaProducto($_GET["codigo"], $Cantidad);

	foreach($datos as $dato){
		
		echo $dato['disponibilidad-'.$Cantidad.''];
		if($dato['disponibilidad-'.$Cantidad.'']>=0){ 

		$_SESSION['ocarrito']->introduce_producto($_GET["codigo"], $_GET["nombre"], $_GET["precio"]);
		header("Location:controladorTienda.php?pagina=".$_GET['pagina']."");
		
		}else{
			header("Location:controladorTienda.php?pagina=".$_GET['pagina']."&Alerta");;
		}
	}
   
?>