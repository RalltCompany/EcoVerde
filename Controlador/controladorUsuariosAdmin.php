<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloUsuario.php");

	
	$usuario2 = new Usuario();
    $datos = $usuario2->getUsuariosAdmin();

   

    if(isset($_GET['Hola'])){
        $CI=$_GET['Buscar'];
        $usuario2 = new Usuario();

        
        echo "<script>window.location='../Controlador/controladorUsuariosAdmin.php?Buscar=".$CI."'</script>";
    }
    require_once("../Vista/vistaUsuarios.php");

	
    

   
	
    
    

    ?>