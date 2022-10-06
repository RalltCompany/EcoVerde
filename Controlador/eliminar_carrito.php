<?php
	include("../Modelo/modeloPedidos.php");
	$_SESSION["ocarrito"]->elimina_producto($_GET["linea"]);
	header("Location:controladorCarrito.php");
?>