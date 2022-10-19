

<?php
include_once('crearPDFPedidos.php');
$pdf = new PDF();
 
$pdf->AddPage();
 
$miCabecera = array('Numero', 'CI Comprador', 'Fecha entrega', 'Direccion', 'Metodo Pago', 'Destinatario');
 
require_once("../../db/db.php");
include_once("../../Modelo/modeloPedidos.php");

$pedidos=new Pedidos();
$misDatos= $pedidos->getPedidos();



 
$pdf->tablaHorizontal($miCabecera, $misDatos);
 
$pdf->Output(); //Salida al navegador
?>


