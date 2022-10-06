<?php
   
	include("../Modelo/modeloPedidos.php");

    

	$_SESSION['ocarrito']->introduce_producto($_GET["codigo"], $_GET["nombre"], $_GET["precio"]);
	header("Location:controladorTienda.php");

  
?>