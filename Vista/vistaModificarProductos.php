<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- Site Metas -->
    <title>EcoVerde - Gestión Productos</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Vista/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../Vista/css/styleLogin.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../Vista/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../Vista/css/custom.css">

    <link rel="stylesheet" href="../Vista/css/style.css">
    <link rel="stylesheet" href="../Vista/css/formProductos.css">

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


    <div class="cuerpomod">

        <h2 class="title-product">Modificar Producto</h2>
       

        <div class="men">
        <a class="a" href="../Controlador/controladorRegistrarProducto.php">Registrar</a>
        <a class="a" href="../Controlador/controladorProductoAdmin.php">Buscar</a>
        </div>

        <br>

        <h3 class="title-productmod">Codigo de producto a modificar: <b><span><?php echo $_GET['Codigo']  ?></span></b></h3>
        <form action="" enctype="multipart/form-data" method="POST" class="form-productos">
            <div class="contenedor-flex">
                <div class="izquierda">
                    <div class="izquierda-divs">
                <input type="text" name="nombre" placeholder="Nombre del producto">
                </div>
                <div class="izquierda-divs">
                <input type="number" name="disponibilidad" placeholder="Disponibilidad en KG">
                </div>
                <div class="izquierda-divs">
                <input type="text" name="familia" placeholder="Familia o Categoría">
                </div>

                <div class="izquierda-divs">
                    <input type="file" name="imagen" id="">
                </div>


                </div>
            




            <div class="derecha">

                <div class="derecha-divs">
                <input type="text" name="propiedades" placeholder="Propiedades">
                </div>

                <div class="derecha-divs">
            <input type="text" name="precio"  placeholder="Precio en pesos">
            </div>

            <div class="derecha-divs">
            <input type="date" name="mesplantado" placeholder="Mes de plantado">
        </div>

        <div class="derecha-divs">
            <select name="cedula" id="" aria-placeholder="Codigo">
              <option value="null">Cedula del Usuario</option>
              <?php
              foreach($cius as $ci){
                echo "<option value=".$ci["ci"].">".$ci["nombre"]."</option>";
              }





              
              ?>
            </select>
        </div>
            </div>
                </div>
            <div class="botones">
                <input type="submit" value="Modificar" name="modificar" class="registrar">
            </div>
        </form>

        </div>
<br><br><br>

    
    


















































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