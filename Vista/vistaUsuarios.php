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
    <title>EcoVerde - Gestión Usuarios</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Vista/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../Vista/css/styleLogin.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../Vista/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../Vista/css/custom.css">
    
    <link rel="stylesheet" href="../Vista/css/style.css">
    <link rel="stylesheet" href="../Vista/css/UsuariosAdmin.css">
 

    <script src="https://kit.fontawesome.com/861b0d1a7d.js" crossorigin="anonymous"></script>
    

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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

        <div class="volver">
            <a href="../Vista/MenuAdmin.php"><i class="fa-solid fa-circle-chevron-left"></i></a>
        </div>
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
                    <li class="nav-item active"><a class="nav-link" href="index.html">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">Sobre Nosotros</a></li>
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle-arrow" data-toggle="dropdown">Tienda</a>
                        <ul class="dropdown-menu">
                            <li><a href="shop.html">Sidebar Shop</a></li>
                            <li><a href="shop-detail.html">Shop Detail</a></li>
                            <li><a href="cart.html">Cart</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                            <li><a href="my-account.html">My Account</a></li>
                            <li><a href="wishlist.html">Wishlist</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="gallery.html">Galería</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.html">Contáctanos</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                   
                </ul>
            </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
       
    <!-- End Navigation -->
</header>



<body>


    <div class="cuerpo">
        <h2 class="title-product">Usuarios</h2>

        <div class="men">
        <a class="a" href="controladorRegistrarUsuario.php">Registrar</a>
        <a class="a" href="controladorUsuariosAdmin.php">Buscar</a>
        </div>
<br>
        <i class="fa-solid fa-user-gear"></i>
        

      
    <div class='contenedor'>
    <table class='notas'>
    
    <thead>
            <tr>
                <th>Cedula</th>
                
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Celular</th>
                <th class="celdaEmail">Email</th>
                <th>Tipo</th>
                <th></th>
                <th></th>
                </tr>
    </thead>
    <?php echo "<tbody>";
    
              foreach($datos as $dato) {
                echo "<tr>
                <td data-label='Cedula'>".$dato["ci"]."</td>
                <td data-label='Nombre'>".$dato["nombre"]."</td>
                <td data-label='Apellido'>".$dato["apellido"]."</td>
                <td data-label='Celular'>".$dato["celular"]."</td>
                <td data-label='Email'>".$dato["email"]."</td>
                <td data-label='Tipo'>".$dato["tipo"]."</td>
                <td data-label='Eliminar'><a href=controladorEliminarUsuario.php?Cedula=".$dato["ci"]."> <i class='fa-solid fa-user-xmark'></i> </a></td>
                <td data-label='Eliminar'><a href=controladorModificarUsuario.php?Cedula=".$dato["ci"]."> <i class='fa-solid fa-user-pen'></i> </a></td>
                </tr>";
                }
                "</tbody>
                ";
                
                
        ?>
        </table>
        </div>

        
        <?php

                $usuario2->PaginadoUsuarios();

        ?>

        </div>
            

        

        
        <?php


if(isset($_GET['modificado'])){
echo "<script>
Swal.fire({
icon: 'success',
title: '¡Usuario modificado correctamente!',
confirmButtonColor: '#008037', 
});
</script>";
    }
    if(isset($_GET['Cedula'])){
        echo "<script>
        Swal.fire({
        icon: 'info',
        title: '¡Usuario eliminado correctamente!',
        html: '<p>El usuario con la cédula: <b>".$_GET['Cedula']."</b> ha sido eliminado con éxito.</p>',
        confirmButtonColor: '#008037', 
        });
        </script>";
            }


    ?>




















    

</body>

</html>


  <!-- ALL JS FILES -->
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