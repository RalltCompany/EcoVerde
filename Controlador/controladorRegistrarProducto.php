<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloProducto.php");
  
	
	$producto = new Producto();
    $datos = $producto->getProducto();

    require_once("../Vista/vistaProductos.php");

	if(isset($_POST['registrar'])){

        $nombreI=$_FILES["imagen"] ["name"];
        $tipoI=$_FILES["imagen"] ["type"];

        if(((strpos($tipoI, "gif") || strpos($tipoI, "jpeg") || strpos($tipoI, "jpg")) || strpos($tipoI, "png"))){

        $carpetaD=$_SERVER["DOCUMENT_ROOT"]. "EcoVerde/Vista/images/";
        move_uploaded_file($_FILES["imagen"] ["tmp_name"], $carpetaD.$nombreI);

        $cedula = $_POST['cedula'];
		$nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $familia = $_POST['familia'];
        $dispo = $_POST['disponibilidad'];
        $propi = $_POST['propiedades'];
        $mes = $_POST['mesplantado'];
		$producto->RegistrarProductos($cedula, $nombre, $precio, $familia, $dispo, $propi, $mes, $nombreI);
		echo("<meta http-equiv='refresh' content='0.1'>");
        }
        }
	

	

    ?>