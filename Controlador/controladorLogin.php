<?php

require_once("../db/db.php");
require_once("../Modelo/modeloUsuario.php");




require_once("../Vista/login.php");


      
      if(isset($_POST['entrar'])){

         $Mail=$_POST['mail'];
         $Clave=MD5($_POST['pass']);
         $usuario=new Usuario();

         if($usuario->ComprobarEstado($Mail,$Clave)){
echo "<script>window.location='../Controlador/controladorLogin.php?errestado'</script>";
        

}else{

      if($usuario->IniciarSesion($Mail, $Clave)){
        
            $credenciales=$usuario->getCredenciales($Mail, $Clave);
            foreach($credenciales as $credencial){
               

                  header('location:abrirSesion.php?ci='.$credencial['ci'].'&tipo='.$credencial['tipo'].'&nombre='.$credencial['nombre'].'');
            }
                 
            
          

      }else{
            echo "<script>window.location='../Controlador/controladorLogin.php?errlogin'</script>";
            

      }

       }
      
      }

?>