<?php

require_once("../db/db.php");
require_once("../Modelo/modeloUsuario.php");




require_once("../Vista/login.php");

      
      if(isset($_POST['entrar'])){

         $Mail=$_POST['mail'];
         $Clave=MD5($_POST['pass']);
         $usuario=new Usuario();

         if($usuario->IniciarSesion($Mail, $Clave)){
        
                  header('location:../index.php');
            
          

      }

       }

?>