<?php



require("../Modelo/modeloPedidos.php");
require_once("../Vista/cart.php");


	$_SESSION["ocarrito"]->imprime_carrito();
	echo "<br><a href=\"index.php\">[Volver]</a>";


?>