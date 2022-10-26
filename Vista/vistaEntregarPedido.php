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

<?php
if(isset($_GET['armado'])){
    echo "<script>
                                Swal.fire({
                                  icon: 'Success',
                                  title: '¡Armado!',
                                  text: '¡Estado de pedido cambiado a: Armado!',
                                  confirmButtonColor: '#008037', 
                                  });
                                  </script>";
 }
?>
<body>


    <div class="cuerpo">

        <h2 class="title-product">Entregar pedido</h2>
       
        <br>
       



        <div class="cart-box-main">
        <div class="container">
           
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <?php   foreach($datosPedido as $dato){ ?>
                            <h3>Factura de pedido Numero: <?php echo $dato['numero'] ?></h3>
                        </div>
                        <form class="needs-validation" method="POST" action='' >
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Nombre </label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value=" <?php echo $dato['nombre'] ?>" readonly>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Apellido </label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="<?php echo $dato['apellido'] ?>" readonly>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                           
                         
                            <div class="mb-3">
                                <label for="address">Dirección de entrega de pedido </label>
                                <input type="text" class="form-control" id="direccionEdit" name="DireccionPed" placeholder="" value="<?php echo $dato['direccionpe'] ?>" readonly >
                                <div class="invalid-feedback"> Por favor ingresa la dirección del pedido. </div>
                            </div>
                           
                            <div class="mb-3">
                                <label for="address">Nombre de persona que recibe el pedido</label>
                                <input type="text" class="form-control" id="" name="Destinatario" placeholder="Escriba aquí" required  >
                                <div class="invalid-feedback"> Por favor ingresa el nombre de quien recibió el pedido. </div>
                            </div>
                            
                            <div class="row">
                                
                            
                                
                            </div>
                            <hr class="mb-4">
                            
                            
                            <div class="title"> <span>Método de pago</span> </div>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="metodoPago" type="radio" class="custom-control-input" value="Tarjeta de crédito" checked required>
                                    <label class="custom-control-label" for="credit"><?php echo $dato['metodoPago'] ?></label>
                                </div>
                                
                            </div>
                            
                            <hr class="mb-1"> 
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <div class="shipping-method-box">
                                <div class="title-left">
                                    <h3>Preferencia de horario de entrega</h3>
                                </div>
                                <div class="mb-4">
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption1" name="rangoHora" value="8 a 12" class="custom-control-input" checked="checked" type="radio">
                                        <label class="custom-control-label" for="shippingOption1"><?php if($dato['horaPref']=="8 a 12"){echo "Matutino"; }else if($dato['horaPref']=="12 a 16"){echo "Tarde";}else if($dato['horaPref']=="16 a 20"){echo "Nocturno";} ?></label>  </div>
                                    <div class="ml-4 mb-2 small">(<?php echo $dato['horaPref'];  ?>)</div>
                                    
                            </div>
                        </div>

                        <?php     }   ?>
                        <div class="col-md-12 col-lg-12">
                            
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Su orden</h3>
                                </div>
                                
                              
                                <?php    foreach($datosPedido as $datoped){        ?>
                            
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Iva</h4>
                                    <div class="ml-auto font-weight-bold">$<?php  $iva=$datoped['total']*0.22; echo $iva;       ?></div>
                                </div>
                                <div class="d-flex">
                                    <h4>Costo de envío</h4>
                                    <div class="ml-auto font-weight-bold"> Gratis </div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Total + IVA</h5>
                                    <div class="ml-auto h5">$<?php   echo $datoped['total'];       ?> </div>
                                </div>
                                <hr> </div><?php     }       ?>
                        </div>
                        <input class="botonImpo" type="submit" class="ml-auto btn hvr-hover" value="Pedido Entregado" name="Entregado"></form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
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