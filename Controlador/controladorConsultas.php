<?php

require_once('../db/db.php');
require_once('../Modelo/modeloUsuario.php');

$usu = new Usuario();
$datos = $usu -> Consulta1();

require_once('../Vista/consulta1.php');




?>