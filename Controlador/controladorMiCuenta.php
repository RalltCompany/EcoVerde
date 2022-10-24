<?php
require_once("../db/db.php");
require_once("../Modelo/modeloPedidos.php");

$pedidos=new Pedidos();
$cedula=$_SESSION['CI'];
$datos=$pedidos->pedidosCliente($cedula);

require_once("../Vista/misPedidos.php");




?>