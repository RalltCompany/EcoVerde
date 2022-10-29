<?php

require_once('../db/db.php');
require_once('../Modelo/modeloUsuario.php');
require_once('../Modelo/modeloPedidos.php');

$usu = new Usuario();
$ped = new Pedidos();


if(isset($_GET['con1'])){
    $con1 = $usu -> Consulta1();
    require_once('../Vista/consulta1.php');
}else if(isset($_GET['con2'])){
    $con2 = $ped -> Consulta2();
    require_once('../Vista/consulta2.php');
}else if(isset($_GET['con3'])){
    $con3 = $ped -> Consulta3();
    require_once('../Vista/consulta3.php');
}else if(isset($_GET['con4'])){
    $con4 = $ped -> Consulta4();
    require_once('../Vista/consulta4.php');
}else if(isset($_GET['con5'])){
    $con5 = $ped -> Consulta5();
    require_once('../Vista/consulta5.php');
}else if(isset($_GET['con6'])){
    $con6 = $ped -> Consulta6();
    require_once('../Vista/consulta6.php');
}else if(isset($_GET['con7'])){

  
       
    
    

    
    if(isset($_POST['filtrar'])){
        
    $_SESSION['mes'] = $_POST['mes'];
    $mes= $_POST['mes'];
    
    if($con7=$ped->Consulta7($mes)){

        echo "<script>window.location='controladorConsultas.php?con7&mes=".$mes."&filtrar'</script>";

    }
    

   /* if($con7=$ped->Consulta7($mes)){
    echo "<script>window.location='controladorConsultas.php?con7'</script>";
}else{
    echo "no encontrado";
}
}*/
    }


    require_once('../Vista/consulta7.php');

   



}



?>