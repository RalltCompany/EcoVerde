<?php

require_once("../db/db.php");
require_once("../Modelo/modeloUsuario.php");

session_start();

$usuario= new Usuario();

$credenciales=$usuario->getUsuario();

$_SESSION['CI']=$credenciales[''];





?>