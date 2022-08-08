<?php
    require_once("../db/db.php");
require_once("../Modelo/modeloProducto.php");


$producto = new Producto();
$datos = $producto->getProducto();
require_once("../Vista/shop.php");

?>