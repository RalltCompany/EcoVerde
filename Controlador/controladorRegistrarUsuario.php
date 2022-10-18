<?php

    require_once("../db/db.php");
	require_once("../Modelo/modeloUsuario.php");

	
	$usuario2 = new Usuario();
    $datos = $usuario2->getUsuario();

    require_once("../Vista/vistaRegistrarUsuarios.php");

	if(isset($_POST['reg'])){
        $cedula = $_POST['cedula'];
		$nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $celular = $_POST['cel'];
        $email = $_POST['email'];
        $clave = MD5($_POST['password']);
        $calle = $_POST['calle'];
        $numero = $_POST['num'];
        $esquina = $_POST['esq'];
        $barrio = $_POST['bar'];
        $tipo = $_POST['tipous'];
		
		
        if($usuario2->ComprobarEmail($email)){

            echo "<script>window.location='../Controlador/controladorRegistrarUsuario.php?errmail'";
    }else{
    
    
      if($usuario2->ComprobarCedula($cedula)){
        echo "<script>window.location='../Controlador/controladorRegistrarUsuario.php?errcedula'";
        
    
    }else{
    
    $usuario2->RegistrarUsuarios($cedula, $nombre, $apellido, $celular, $email, $clave, $calle, $numero, $esquina, $barrio, $tipo);
    echo "<script>window.location='controladorRegistrarUsuario.php?registrado'</script>";
    }
    
    
    }
    
    
    }

	
    
    

    ?>