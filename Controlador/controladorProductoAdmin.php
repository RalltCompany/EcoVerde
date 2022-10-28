<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloProducto.php");
  
	
	$producto = new Producto();
    $datos = $producto->getProducto();
    

    require_once("../Vista/vistaProductosAdmin.php");

	if(isset($_POST['registrar'])){

        $ciu = $_POST['cedula'];
		$nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $familia = $_POST['familia'];
        $dispo = $_POST['disponibilidad'];
        $propi = $_POST['propiedades'];
        $mes = $_POST['mesplantado'];
		$producto->RegistrarProductos($ciu, $nombre, $precio, $familia, $dispo, $propi, $mes, 'imagen', "../Vista/images");
		echo("<meta http-equiv='refresh' content='0.1'>");
        
        }

        if(isset($_GET['Hola'])){
            $Numero=$_GET['Buscar'];
    
            echo "<script language='javascript'>window.location.href = 'controladorProductoAdmin.php?Buscar=".$Numero."'; </script>";
        }
	

	

    ?>