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
        

        <form action="../Controlador/controladorRegistrarUsuario.php" method="POST" class="form-productos">
            <div class="contenedor-flex">
                <div class="izquierda">
                    <div class="izquierda-divs">
                <input type="text" name="nombre" maxlength="30" placeholder="Nombre">
                </div>
                <div class="izquierda-divs">
                    <input type="text" name="apellido" maxlength="30" placeholder="Apellido">
                    </div>
                <div class="izquierda-divs">
                <input type="number" name="cedula" minlength="8" maxlength="8"  placeholder="Cédula de identidad"c>
                </div>
                <div class="izquierda-divs">
                <input type="email" name="email" placeholder="Email">
                </div>

                <div class="izquierda-divs">
                    <input type="password" name="password" minlength="8" id="" placeholder="Contraseña">
                </div>


                <div class="izquierda-divs">
                    <select name="tipous" id="" >
                        <option value="null" class="">Selecciona tipo de usuario</option>
                        <option value="Administrador">Administrador</option>
                        <option value="Gestor">Gestor</option>
                        <option value="Reparto">Reparto</option>
                        <option value="Cliente">Cliente</option>
                       
        
                    </select>
                </div>
                </div>
            
<?php
                if(isset($_GET['errmail'])){
                echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'Oops...!',
              text: 'El correo electronico que quieres utilizar, ya fue registrado',
              confirmButtonColor: '#008037', 
              });
              </script>";
            }

           

            if(isset($_GET['errcedula'])){
                echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'Oops...!',
              text: 'La cedula que quieres utilizar ya fue registrada',
              confirmButtonColor: '#008037', 
              });
              </script>";
            }
        

            if(isset($_GET['errclave'])){
                echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'Oops...!',
              text: 'Las contraseñas ingresadas no coinciden',
              confirmButtonColor: '#008037', 
              });
              </script>";
            }




            ?>


            <div class="derecha">

                <div class="derecha-divs">
                <input type="text" name="calle" placeholder="Calle">
                </div>
                <div class="derecha-divs">
                    <input type="text" name="num" placeholder="Numero">
                    </div>
                
                    <div class="derecha-divs">
                        <input type="text" name="esq" placeholder="Esquina">
                        </div>
                        <div class="derecha-divs">
                            <input type="text" name="bar" placeholder="Barrio">
                            </div>

                <div class="derecha-divs">
            <input type="text" name="cel"  placeholder="Celular">
            </div>
            </div>
                </div>
            <div class="botones">
                <input type="submit" name="reg" value="Registrar" class="registrar">
            </div>
        </form>
        <br>
        
    </div>
    
    





















    
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
</body>

</html>