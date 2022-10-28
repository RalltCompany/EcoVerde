<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloProducto.php");
  
	
	$producto = new Producto();
    $datos = $producto->getProducto();
    
    if(isset($_GET['Hola'])){
        $Numero=$_GET['Buscar'];
        
        echo "<script language='javascript'>window.location.href = 'controladorProductoAdmin.php?Buscar=".$Numero."'; </script>";
    }

    
    require_once("../Vista/vistaProductosAdmin.php");

    



	

	

    ?>