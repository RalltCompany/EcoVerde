<?php
    session_start();
	include("../Modelo/modeloPedidos.php");
    if (!isset($_SESSION["ocarrito"])){
        $_SESSION["ocarrito"] = new Pedidos();
    }
	$_SESSION['ocarrito']->introduce_producto($_GET["codigo"], $_GET["nombre"], $_GET["precio"]);
	//header("Location:controladorTienda.php");

    $_SESSION["ocarrito"]->imprime_carrito();
?>