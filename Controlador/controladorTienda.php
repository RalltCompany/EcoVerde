<?php
    require_once("../db/db.php");
require_once("../Modelo/modeloProducto.php");
    include("../Modelo/modeloPedidos.php");

$producto = new Producto();



require_once("../Vista/shop.php");

?>