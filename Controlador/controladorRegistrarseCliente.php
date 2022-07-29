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

            
            header('location:../Controlador/controladorRegistrarseCliente.php?errmail');
    }else{


      if($usuario->ComprobarCedula($Cedula)){

        header('location:../Controlador/controladorRegistrarseCliente.php?errcedula');
  
}else{

  if( $Clave != $ClaveVal){

   header('location:../Controlador/controladorRegistrarseCliente.php?errclave');

  }else{
    $usuario->RegistrarCliente($Cedula, $Nombre, $Apellido, $Celular, $Email, $Clave, $Calle, $Numero, $Esquina, $Barrio);
      header('location:../Controlador/controladorLogin.php?registro');
  }


}
    }
}


            
         
      


    

      
     

?>