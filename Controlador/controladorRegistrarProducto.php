<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloProducto.php");
  
	
	$producto = new Producto();
    $datos = $producto->getProducto();
    $cius = $producto->CedulaUs();

    require_once("../Vista/vistaRegistrarProductos.php");

	if(isset($_POST['registrar'])){

        $ciu = $_POST['cedula'];
		$nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $familia = $_POST['familia'];
        $dispo = $_POST['disponibilidad'];
        $propi = $_POST['propiedades'];
        $mes = $_POST['mesplantado'];

		if($producto->RegistrarProductos($ciu, $nombre, $precio, $familia, $dispo, $propi, $mes, 'imagen', "../Vista/images")){
            echo "<script>window.location='controladorRegistrarProducto.php?registrado'</script>";
        }else{
            echo "No registrado";
        }

        
        }
	

	

    ?>