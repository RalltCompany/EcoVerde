<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>EcoVerde - Menu Administrador</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../images/logo.ico" type="../image/logo.icon">
    <link rel="logo.icon" href="../images/logo.icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" href="../Vista/css/UsuariosAdmin.css">

    
    

    <script src="https://kit.fontawesome.com/861b0d1a7d.js" crossorigin="anonymous"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="css/menus.css">
    
</head>


<?php


session_start();

if(!isset($_SESSION['CI'])){
    echo "<script>window.location='errorSession.php'</script>";
}

?>


<header class="main-header">
    <!-- Start Navigation -->
    <nav class="navbar navbar-expand-lg navbar-verde bg-verde navbar-default bootsnav">

        
        <div class="container">
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
                <a class="navbar-brand" href="../index.php"><img src="../images/logo.png" class="logo-eco" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                <h2 class="h2">¡Bienvenido <?php echo $_SESSION['NOMBRE']; ?>!</h2>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="volver">
            <a href="../Vista/MenuAdmin.php"><i class="fa-solid fa-circle-chevron-left"></i></a>
        </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
       
    <!-- End Navigation -->
</header>

<?php 
if(isset($_SESSION['TIPO'])){ 
    if($_SESSION['TIPO']=="Administrador"){
    echo  "<h4>Consultas</h4>";
    }
}

?>

<div class="opciones2">
    <div class="opciones-arriba2">
        <a href="../Controlador/controladorConsultas.php?con1"><div class="consulta-divs1"><p class="tituloss">Cantidad de clientes agrupados por barrio.</p></div></a>
        <a href="../Controlador/controladorConsultas.php?con2"><div class="consulta-divs1"><p class="tituloss">Cantidad de pedidos agrupados por clientes ordenados de mayor a menor cantidad.</p></div></a>
        <a href="../Controlador/controladorConsultas.php?con3"><div class="consulta-divs1"><p class="tituloss">Cantidad de pedidos agrupados por rango de hora de entrega.</p></div></a>
        <a href="../Controlador/controladorConsultas.php?con4"><div class="consulta-divs1"><p class="tituloss">Cliente que realizó el pedido de mayor monto.</p></div></a>
        <?php   if($_SESSION['TIPO']=="Administrador"){ echo "<a href='../Controlador/controladorConsultas.php?con5'><div class='consulta-divs1'><p class='tituloss'>Clientes que realizaron pedidos con monto mayor a $1000 en el mes anterior</p></div></a>";  } ?>
    </div>

    <div class="opciones-abajo2">
        
        <?php   if($_SESSION['TIPO']=="Administrador"){ 
            echo "<a href='../Controlador/controladorConsultas.php?con6'><div class='consulta-divs2'></i><p class='tituloss'>Monto facturado agrupado por año.</p></div>";
         echo "<a href='../Controlador/controladorConsultas.php?con7'><div class='consulta-divs2'></i><p class='tituloss'>Producto mayor solicitado en xxx mes.</p></div></a>";
         echo "<a href='../Controlador/controladorConsultas.php?con8'><div class='consulta-divs2'><p class='tituloss'>Producto menor solicitado en xxx mes.</p></div></a>";
         echo "<a href='../Controlador/controladorConsultas.php?con9'><div class='consulta-divs2'><p class='tituloss'>Cantidad de pedidos entregados agrupados por repartidor en xxx mes.</p></div></a>";
         echo "<a href='../Controlador/controladorConsultas.php?con10'><div class='consulta-divs2'><p class='tituloss'>Cantidad de pedidos agrupados por mes.</p></div></a>";} ?>
        
    </div>
</div>


















<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- ALL PLUGINS -->
<script src="js/jquery.superslides.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/inewsticker.js"></script>
<script src="js/bootsnav.js."></script>
<script src="js/images-loded.min.js"></script>
<script src="js/isotope.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/baguetteBox.min.js"></script>
<script src="js/form-validator.min.js"></script>
<script src="js/contact-form-script.js"></script>
<script src="js/custom.js"></script>

</body>