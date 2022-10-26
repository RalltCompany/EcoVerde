<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloProducto.php");
  
	
	$producto = new Producto();
    $datos = $producto->getProducto();
    $cius = $producto->CedulaUs();
    $datosS = $producto->getProductoParaModificar($_GET['Codigo']);

    require_once("../Vista/vistaModificarProductos.php");

	if(isset($_POST['modificar'])){
        $codigo = $_GET['Codigo'];
        $ciu = $_POST['cedula'];
		$nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $familia = $_POST['familia'];
        $dispo = $_POST['disponibilidad'];
        $propi = $_POST['propiedades'];
        $mes = $_POST['mesplantado'];
      
       
            
                if($producto->ModificarImagen($codigo, 'imagen', "../Vista/images")){
                    $producto->ModificarProducto($codigo, $ciu, $nombre, $precio, $familia, $dispo, $propi, $mes);
                    echo "<script>window.location='../Controlador/controladorProductoAdmin.php?modificado'</script>";
                }else{
                    $producto->ModificarProducto($codigo, $ciu, $nombre, $precio, $familia, $dispo, $propi, $mes);
                    echo "<script>window.location='../Controlador/controladorProductoAdmin.php?modificado'</script>";
                }
            } 
            
        
        
	

	

    ?>