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
    <title>EcoVerde - Gestión Pedidos</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../Vista/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="../Vista/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Vista/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../Vista/css/styleLogin.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../Vista/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../Vista/css/custom.css">
<link rel="stylesheet" href="../Vista/css/estilos-menupedidos.css">
    <link rel="stylesheet" href="../Vista/css/style.css">
    <link rel="stylesheet" href="../Vista/css/formProductos.css">

    <script src="https://kit.fontawesome.com/861b0d1a7d.js" crossorigin="anonymous"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<?php

if(!isset($_SESSION['CI'])){
    echo "<script>window.location='errorSession.php'</script>";
}




if(isset($_GET['Eliminado'])){
    echo "<script>
                                Swal.fire({
                                  icon: 'error',
                                  title: 'Oops...!',
                                  text: '¡Su carrito esta vacío!',
                                  confirmButtonColor: '#008037', 
                                  });
                                  </script>";
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
                    <li class="nav-item active"><a class="nav-link" href="index.php">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">Sobre Nosotros</a></li>
                    <li class="dropdown">
                        <a href="#" class="nav-link dropdown-toggle-arrow" data-toggle="dropdown">Tienda</a>
                        <ul class="dropdown-menu">
                            <li><a href="shop.php">Sidebar Shop</a></li>
                            <li><a href="shop-detail.php">Shop Detail</a></li>
                            <li><a href="cart.php">Cart</a></li>
                            <li><a href="checkout.php">Checkout</a></li>
                            <li><a href="my-account.php">My Account</a></li>
                            <li><a href="wishlist.php">Wishlist</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="gallery.php">Galería</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact-us.php">Contáctanos</a></li>
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
        <div class="side">
            <a href="#" class="close-side"><i class="fa fa-times"></i></a>
            <li class="cart-box">
                <ul class="cart-list">
                    <li>
                        <a href="#" class="photo"><img src="images/img-pro-01.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Delica omtantur </a></h6>
                        <p>1x - <span class="price">$80.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="images/img-pro-02.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Omnes ocurreret</a></h6>
                        <p>1x - <span class="price">$60.00</span></p>
                    </li>
                    <li>
                        <a href="#" class="photo"><img src="images/img-pro-03.jpg" class="cart-thumb" alt="" /></a>
                        <h6><a href="#">Agam facilisis</a></h6>
                        <p>1x - <span class="price">$40.00</span></p>
                    </li>
                    <li class="total">
                        <a href="#" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                        <span class="float-right"><strong>Total</strong>: $180.00</span>
                    </li>
                </ul>
            </li>
        </div>
        <!-- End Side Menu -->
    </nav>
    <!-- End Navigation -->
</header>


<body>


    <div class="cuerpo">

        <h2 class="title-product">GESTIONAR PEDIDOS</h2>
        <div class="men">
        <a class="a" href="../Controlador/controladorPedidoAdmin.php">Lista</a>
        <a class="a" href="../Controlador/controladorGestionarPedidos.php">Gestionar</a>
        </div>
        <br>
        <div class="contenedor">
    <table class="notas">
    
    <thead>
        <tr>

            <th>Numero</th>
            <th>Metodo de pago</th>
            <th>Nombre destinatario</th>
            <th>Fecha y hora</th>
            <th>Rango de hora preferido</th>
            <th>Detalles y gestión</th>
            
            
    
        </tr>
    </thead>
    <tbody>
        <?php

 if(isset($datos)){
        foreach( $datos as $dato){
    echo '<tr><td>'.$dato['numero'].'</td><td>'.$dato['metodoPago'].'</td><td>'.$dato['Nombre_destinatario'].'</td><td>'.$dato['fechayHora'].'</td><td>'.$dato['horaPref'].'</td><td><a href="controladorInspeccionar.php?NumPedido='.$dato['numero'].'"><i class="fa-solid fa-eye"></i></a></td></tr>';
                                }
                            }else{
                                echo '<tr><td colspan="7">No hay pedidos registrados.</td></tr>';
                            }
                                    ?>
    </tbody>

    
</table>

</div>

<?php

$pedidos->mostrarPaginado();
?>


 </div>

 
 


















































  <!-- ALL JS FILES -->
  <script src="../Vista/js/jquery-3.2.1.min.js"></script>
  <script src="../Vista/js/popper.min.js"></script>
  <script src="../Vista/js/bootstrap.min.js"></script>
  <!-- ALL PLUGINS -->
  <script src="../Vista/js/jquery.superslides.min.js"></script>
  <script src="../Vista/js/bootstrap-select.js"></script>
  <script src="../Vista/js/inewsticker.js"></script>
  <script src="../Vista/js/bootsnav.js."></script>
  <script src="../Vista/js/images-loded.min.js"></script>
  <script src="../Vista/js/isotope.min.js"></script>
  <script src="../Vista/js/owl.carousel.min.js"></script>
  <script src="../Vista/js/baguetteBox.min.js"></script>
  <script src="../Vista/js/form-validator.min.js"></script>
  <script src="../Vista/js/contact-form-script.js"></script>
  <script src="../Vista/js/custom.js"></script>
</body>

</html>