<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloUsuario.php");
  
	
	$usuario1 = new Usuario();
    $datos = $usuario1->getUsuario();
    $datosZ = $usuario1->getUsuarioParaModificar($_GET['Cedula']);

    require_once("../Vista/vistaModificarUsuarios.php");	
    

	if(isset($_POST['mod'])){
		$nombree = $_POST['nom'];
        $cedulaa = $_POST['cedu'];
        $emaill = $_POST['em'];
        $apellidoo = $_POST['ape'];
        $celularr = $_POST['celu'];
        $callee = $_POST['calle'];
        $numeroo = $_POST['numero'];
        $esquinaa = $_POST['esquina'];
        $barrioo = $_POST['barrio'];
        $tipoo = $_POST['tipouss'];
        $ciadmin= $_SESSION['CI'];
		$usuario1->ModificarUsuarios($cedulaa, $nombree, $apellidoo, $celularr, $emaill, $callee, $numeroo, $esquinaa, $barrioo, $tipoo, $ciadmin);
		echo "<script>window.location='controladorUsuariosAdmin.php?$ciadmin'</script>";
        echo $_SESSION['CI'];
	}	

    ?>