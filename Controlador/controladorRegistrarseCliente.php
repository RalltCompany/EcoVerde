<?php

require_once("../db/db.php");
require_once("../Modelo/modeloUsuario.php");

require_once("../Vista/registrarse.php");
$usuario=new Usuario();



   if(isset($_POST['registrar'])){ 
    $Cedula = $_POST['cedula'];
    $Nombre=$_POST['nombre'];
    $Apellido=$_POST['apellido'];
    $Celular = $_POST['celular'];
    $Email = $_POST['email'];
    $Clave = MD5($_POST['password']);
    $ClaveVal=MD5($_POST['passwordVal']);
    $Calle = $_POST['calle'];
    $Numero = $_POST['numero'];
    $Esquina = $_POST['esquina'];
    $Barrio= $_POST['barrio'];






      if($usuario->ComprobarEmail($Email)){

            
            echo "<script>window.location='../Controlador/controladorRegistrarseCliente.php?errmail'</script>";
    }else{


      if($usuario->ComprobarCedula($Cedula)){
        echo "<script>window.location='../Controlador/controladorRegistrarseCliente.php?errcedula'</script>";
  
}else{

  if( $Clave != $ClaveVal){
    echo "<script>window.location='../Controlador/controladorRegistrarseCliente.php?errclave'</script>";

  }else{
    $usuario->RegistrarCliente($Cedula, $Nombre, $Apellido, $Celular, $Email, $Clave, $Calle, $Numero, $Esquina, $Barrio);
    echo "<script>window.location='../Controlador/controladorLogin.php?registro'</script>";
  }


}
    }
}


            
         
      


    

      
     

?>