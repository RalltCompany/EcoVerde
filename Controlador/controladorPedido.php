<?php


require_once("../db/db.php");
require_once("../Modelo/modeloPedidos.php");
require_once("../Modelo/modeloUsuario.php");


require_once("../Vista/pedido.php");
$cliente=new Usuario();
$datosCliente=$cliente->getUsuarioComprador($_SESSION['CI']);




   

    



	
	


?>