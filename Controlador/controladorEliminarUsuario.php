<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloUsuario.php");
  
	
	$usuario = new Usuario();
    $datos = $usuario->getUsuario();



	

	if(isset($_GET['Cedula'])){ 
		$ced = $_GET['Cedula'];
		$usuario->EliminarUsuario($ced);
		header("location:controladorUsuariosAdmin.php");
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

	

    ?>