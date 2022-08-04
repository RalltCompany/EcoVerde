

<?php
include_once('crearPDFUsuarios.php');
$pdf = new PDF();
 
$pdf->AddPage();
 
$miCabecera = array('Cedula', 'Nombre', 'Apellido', 'Celular', 'Email', 'Tipo');
 
require_once("../../db/db.php");
include_once("../../Modelo/modeloUsuario.php");

$usuario=new Usuario();
$misDatos= $usuario->getUsuario();



 
$pdf->tablaHorizontal($miCabecera, $misDatos);
 
$pdf->Output(); //Salida al navegador
?>


