<?php

    require_once("../db/db.php");
    require_once("../Modelo/modeloUsuario.php");
    

	$clientes = new Usuario();
    $datos= $clientes->getUsuariosPendientes();

    require_once("../Vista/vistaClientesAdmin.php");
    
	
    
    

    ?>