<?php

date_default_timezone_set('America/Argentina/Buenos_Aires');
require_once("../db/db.php");
require_once("../Modelo/modeloPedidos.php");
require_once("../Modelo/modeloUsuario.php");


require_once("../Vista/pedido.php");


$pedido=new Pedidos();

$CI=$_SESSION['CI'];
$FechaHora= date("d-m-y h:i:s");



$productos=$_SESSION['ocarrito']->getNum();
$total=$_SESSION['ocarrito']->ret_val();


if(isset($_POST['Finalizar'])){
    $MetodoPago= $_POST['metodoPago'];
    $RangoHora= $_POST['rangoHora'];
    $DireccionPe=$_POST['DireccionPed'];
    
    
    if($pedido->insertPedidos($CI, $FechaHora, $MetodoPago, $RangoHora, $DireccionPe, $total)){

       $NumPedido=$pedido->getUltimoPedidoInsertado($CI);
       
        
       if($_SESSION['ocarrito']->conformarPedido($NumPedido, $productos)){
        
       }
       echo "<script language='javascript'>window.location.href = 'terminar_carrito.php?Pedido'; </script>";

        
    }else{
        echo "no se pudo insertar";
    }
}


   

    



	
	


?>