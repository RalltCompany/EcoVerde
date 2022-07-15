<?php

require_once("../db/db.php");
require_once("../Modelo/modeloUsuario.php");






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
    
    $usuario=new Usuario();
     
    

      if($Clave==$ClaveVal){ 
        if($usuario->ComprobarEmail($Email)){
         
         if($usuario->ComprobarCedula($Cedula)){ 
             if($usuario->RegistrarCliente($Cedula, $Nombre, $Apellido, $Celular, $Email, $Clave, $Calle, $Numero, $Esquina, $Barrio) ){

                   header('location:../Vista/login.php');
             }else{
                   echo "no se pudo registrar";
             }

         }else{
            header('location:../Vista/registrarse.php?errCed=aparecer');
            }

         }else{
            header('location:../Vista/registrarse.php?errMail=aparecer');
         }
      }else{
         header('location:../Vista/registrarse.php?errContra=aparecer');
      }
    
      }



      
      if(isset($_POST['entrar'])){

         $Mail=$_POST['mail'];
         $Clave=MD5($_POST['pass']);
         $usuario=new Usuario();

         if($usuario->IniciarSesion($Mail, $Clave)){
         if($usuario->ComprobarEstado($Mail, $Clave)){ 

            



                  header('location:../index.php');
            
            }else{
               header('location:../Vista/login.php?estado=aparecer');
               
         }

          }else{
            
            header('location:../Vista/login.php?error=aparecer');

          }

      }

?>