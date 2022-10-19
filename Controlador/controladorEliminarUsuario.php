<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloUsuario.php");
  
	require_once("../Modelo/modeloProducto.php");

	$usuario = new Usuario();
    $datos = $usuario->getUsuario();

	$producto = new Producto();
    //$datosProd = $producto->getUsuario();

	

	if(isset($_GET['Cedula'])){ 
		$ced = $_GET['Cedula'];
		if($usuario->EliminarUsuario($ced)){
			echo "<script>window.location='controladorUsuariosAdmin.php?Cedula=".$ced."'</script>";
		}
		
		
	}


	if(isset($_GET['CedulaAceptar'])){
		$Cedula=$_GET['CedulaAceptar'];
		if($usuario->AceptarCliente($Cedula)){
			header("location:controladorClientes.php?Aceptado=1&CIACEPTADO=".$Cedula."");
		}else{
			echo "No se pudo aceptar";
		}
		
		
	}

	if(isset($_GET['CedulaRechazar'])){

		$Cedula=$_GET['CedulaRechazar'];
		if($usuario->EliminarUsuario($Cedula)){
			header("location:controladorClientes.php?Rechazado=1&CIRECHAZADO=".$Cedula."");
		}else{
			echo "No se pudo rechazar";
		}
		

	}

	if(isset($_GET['ProdEliminar'])){

		$Codigo=$_GET['ProdEliminar'];
		if($producto->deleteProducto($Codigo)){
			header("location:controladorProductoAdmin.php?Eliminado=1&CodEliminado=".$Codigo."");
		}else{
			echo "No se pudo Eliminar";
		}
		

	}

    ?>