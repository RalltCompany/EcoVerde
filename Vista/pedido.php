<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Ecoverde - Pedido</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../images/logo.ico" type="../image/logo.icon">
    <link rel="logo.icon" href="../images/logo.icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Vista/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../Vista/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../Vista/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../Vista/css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://kit.fontawesome.com/861b0d1a7d.js" crossorigin="anonymous"></script>
</head>
<?php

if(!isset($_SESSION['CI'])){
    echo "<script>window.location='errorSession.php'</script>";
}

?>
<body>
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					
                    <div class="right-phone-box">
                    <p>Contactanos: <a href="#"> 22260722</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <?php   
                           
                            if(isset($_SESSION['TIPO'])){ 
                                if($_SESSION['TIPO']=="Cliente"){
                                
                                    echo  "<li><a href='../Vista/micuenta.php'><i class=fa fa-user s_color></i> Bienvenido/a ".$_SESSION['NOMBRE']."</a></li>";
                                    ECHO  "<li><a href=../Vista/Micuenta.php><i class=fas fa-headset></i> Mi Perfil</a></li>";
                                    echo  "<li><a href=logout.php><i class=fa fa-user s_color></i> Cerrar Sesión</a></li>";
                                 
                                 
                                  } else if($_SESSION['TIPO']=="Administrador"){
     
                                     echo  "<li><a href='../Vista/micuenta.php'><i class=fa fa-user s_color></i> Bienvenido/a ".$_SESSION['NOMBRE']."</a></li>";
                                    ECHO  "<li><a href=../Vista/MenuAdmin.php><i class=fas fa-headset></i> Menú Administrador</a></li>";
                                    echo  "<li><a href=logout.php><i class=fa fa-user s_color></i> Cerrar Sesión</a></li>";


                            }
                           
                            
                            }else{

                                echo "<li><a href=Controlador/controladorLogin.php><i class=fa fa-user s_color></i> Iniciar Sesión</a></li>";

                                echo "<li><a href=Controlador/controladorRegistrarseCliente.php><i class=fa-solid fa-address-card></i> Registrarse</a></li>";
                            }

                          
                            ?>
                            
                            
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                            <li>
                                    <i class="fab fa-opencart"></i> 20% de descueto con el codigo 3Ad-5Up
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80%  descuento en vegetales
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 10%! compra de vegetales
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50%! Compra ahora 
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80%  descuento en vegetales
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% de descuento con el codigo 3Ad-5Up
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50%! Compra ahora 
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-verde bg-verde navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="../index.php"><img src="../Vista/images/logo.png" class="logo-eco" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                    <li class="nav-item active"><a class="nav-link" href="../index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="../Vista/about.php">Sobre nosotros</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Tienda</a>
                            <ul class="dropdown-menu">
								<li><a href="controladorTienda.php">Tienda</a></li>
                                <?php 
                                    if(isset($_SESSION['CI'])){ 
                                echo "<li><a href='controladorCarrito.php'>Carrito <span class='numCarrito'>".$_SESSION['ocarrito']->getCantidadProd()."<span></a></li>
                                <li><a href='../Controlador/controladorPedido'>Pedido</a></li>
                                <li><a href='../Vista/Micuenta.php'>Mi cuenta</a></li>";}  
                                ?>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="../Vista/gallery.php">Galería</a></li>
                        <li class="nav-item"><a class="nav-link" href="../Vista/contact-us.php">Contáctanos</a></li>
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
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Checkout</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="controladorCarrito.php">Carrito</a></li>
                        <li class="breadcrumb-item active">Pedido</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
           
            <div class="row">
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="checkout-address">
                        <div class="title-left">
                            <h3>Formulario de factura</h3>
                        </div>
                        <form class="needs-validation" method="POST" action='' >
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName">Nombre *</label>
                                    <input type="text" class="form-control" id="firstName" placeholder="" value="<?php 
                                    $cliente=new Usuario();

                                    $datosCliente=$cliente->getUsuarioComprador($_SESSION['CI']);
                                    foreach($datosCliente as $datoC){
                                        
                                        echo $datoC['nombre'];   ?>" readonly>
                                    <div class="invalid-feedback"> Valid first name is required. </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName">Apellido *</label>
                                    <input type="text" class="form-control" id="lastName" placeholder="" value="<?php 
                                        
                                        echo $datoC['apellido'];   ?>" readonly>
                                    <div class="invalid-feedback"> Valid last name is required. </div>
                                </div>
                            </div>
                           
                            <div class="mb-3">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control" id="email" placeholder="" value="<?php 
                                        
                                        echo $datoC['email'];   ?>"  readonly>
                                <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                            </div>
                            <div class="mb-3">
                                <label for="address">Dirección de entrega de pedido *</label>
                                <input type="text" class="form-control" id="direccionEdit" name="DireccionPed" placeholder="" value="<?php 
                                        
                                        echo $datoC['calle']." ".$datoC['numero'];  } ?>" readonly >
                                <div class="invalid-feedback"> Please enter your shipping address. </div>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="direccion" onclick="editDireccion()">
                                <label class="custom-control-label" for="direccion">Editar dirección de entrega</label>
                            </div>
                            <div class="row">
                                
                            <script type="text/Javascript">
                                
                                function editDireccion(){
                                if(document.getElementById('direccion').checked) {
                                    document.getElementById('direccionEdit').removeAttribute("readonly");
                                }else{
                                    document.getElementById('direccionEdit').setAttribute("readonly", "readonly");
                                }
                            }
                            </script>
                                
                            </div>
                            <hr class="mb-4">
                            
                            
                            <div class="title"> <span>Método de pago</span> </div>
                            <div class="d-block my-3">
                                <div class="custom-control custom-radio">
                                    <input id="credit" name="metodoPago" type="radio" class="custom-control-input" value="Tarjeta de crédito" checked required>
                                    <label class="custom-control-label" for="credit">Tarjeta de crédito</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="debit" name="metodoPago" type="radio" class="custom-control-input" value="Tarjeta de débito" required>
                                    <label class="custom-control-label" for="debit">Tarjeta de débito</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input id="paypal" name="metodoPago" type="radio" class="custom-control-input" value="MercadoPago" required>
                                    <label class="custom-control-label" for="paypal">MercadoPago</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cc-name">Name on card</label>
                                    <input type="text" class="form-control" id="cc-name" placeholder="" required> <small class="text-muted">Full name as displayed on card</small>
                                    <div class="invalid-feedback"> Name on card is required </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cc-number">Credit card number</label>
                                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                    <div class="invalid-feedback"> Credit card number is required </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">Expiration</label>
                                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                    <div class="invalid-feedback"> Expiration date required </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label for="cc-expiration">CVV</label>
                                    <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                    <div class="invalid-feedback"> Security code required </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="payment-icon">
                                        <ul>
                                            <li><img class="img-fluid" src="images/payment-icon/1.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/2.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/3.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/5.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/7.png" alt=""></li>
                                        </ul>
                                    </div>
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
                                    <h3>Seleccione preferencia de horario de entrega</h3>
                                </div>
                                <div class="mb-4">
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption1" name="rangoHora" value="8 a 12" class="custom-control-input" checked="checked" type="radio">
                                        <label class="custom-control-label" for="shippingOption1">Matutino</label>  </div>
                                    <div class="ml-4 mb-2 small">(8 a 12)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption2" name="rangoHora" value="12 a 16" class="custom-control-input" type="radio">
                                        <label class="custom-control-label" for="shippingOption2">Tarde</label>  </div>
                                    <div class="ml-4 mb-2 small">(12 a 16)</div>
                                    <div class="custom-control custom-radio">
                                        <input id="shippingOption3" name="rangoHora" value="16 a 20" class="custom-control-input" type="radio">
                                        <label class="custom-control-label" for="shippingOption3">Nocturno</label>  </div>
                                        <div class="ml-4 mb-2 small">(16 a 20)</div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="odr-box">
                                <div class="title-left">
                                    <h3>Carrito de compras</h3>
                                </div>
                                <div class="rounded p-2 bg-light">


                                    <?php

                                
                                        if(!isset($_SESSION["ocarrito"])){ 
                                        $_SESSION["ocarrito"]=new Pedidos();
                                    }
                                        $_SESSION["ocarrito"]->imprime_factura();
                                    






                                            if($_SESSION["ocarrito"]->ret_val() == 0){
                                                echo "<script>window.location='controladorCarrito.php?vacio'</script>";
                                            }
                                        
                                        
                                    ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3>Su orden</h3>
                                </div>
                                <div class="d-flex">
                                    <div class="font-weight-bold">Product</div>
                                    <div class="ml-auto font-weight-bold">Total</div>
                                </div>
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Sub Total</h4>
                                    <div class="ml-auto font-weight-bold"><?php echo "$ ".$subtotal=$_SESSION["ocarrito"]->getSubtotal(); ?> </div>
                                </div>
                            
                                <hr class="my-1">
                                <div class="d-flex">
                                    <h4>Iva</h4>
                                    <div class="ml-auto font-weight-bold"><?php echo "$ ".$subtotal=$_SESSION["ocarrito"]->getIva(); ?></div>
                                </div>
                                <div class="d-flex">
                                    <h4>Costo de envío</h4>
                                    <div class="ml-auto font-weight-bold"> Gratis </div>
                                </div>
                                <hr>
                                <div class="d-flex gr-total">
                                    <h5>Total + IVA</h5>
                                    <div class="ml-auto h5"> <?php echo "$ ".$total_fact=$_SESSION["ocarrito"]->ret_val(); ?></div>
                                </div>
                                <hr> </div>
                        </div>
                        <div class="col-12 d-flex shopping-box"><input type="submit" class="ml-auto btn hvr-hover" value="Finalizar Compra" name="Finalizar"> </div></form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->

  

    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Business Time</h3>
							<ul class="list-time">
								<li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Freshshop</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> 
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> 							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">contactinfo@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2018 <a href="#">ThewayShop</a> Design By :
            <a href="https://html.design/">html design</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

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