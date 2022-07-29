<?php

require_once("../db/db.php");
require_once("../Modelo/modeloUsuario.php");

session_start();

$usuario= new Usuario();

$credenciales=$usuario->getUsuario();


foreach($credenciales as $credencial){
                     
    $_SESSION['CI']=$_GET['ci'];
    $_SESSION['TIPO']=$_GET['tipo'];
    $_SESSION['NOMBRE']=$_GET['nombre'];
    
}


header('location:../index.php');




?>