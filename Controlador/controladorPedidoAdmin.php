<?php
require_once('../db/db.php');
require_once('../Modelo/modeloPedidos.php');

$pedidos=new Pedidos();

$datos=$pedidos->getPedidosAdmin("Pendiente");
require_once('../Vista/vistaPedidos.php');



?>