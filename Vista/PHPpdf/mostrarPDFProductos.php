

<?php
include_once('crearPDFProductos.php');
$pdf = new PDF();
 
$pdf->AddPage();
 
$miCabecera = array('Codigo', 'Nombre', 'Disponibilidad', 'Categoria', 'Precio', 'Mes de Plantado');
 
require_once("../../db/db.php");
include_once("../../Modelo/modeloProducto.php");

$producto=new Producto();
$misDatos= $producto->getProducto();



 
$pdf->tablaHorizontal($miCabecera, $misDatos);
 
$pdf->Output(); //Salida al navegador
?>

