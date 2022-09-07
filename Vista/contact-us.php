<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Contactanos</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://kit.fontawesome.com/861b0d1a7d.js" crossorigin="anonymous"></script>
</head>

<body>
    
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
                            session_start();
                            if(isset($_SESSION['TIPO'])){ 
                            if($_SESSION['TIPO']=="Cliente"){
                                
                               echo  "<li><a href='Vista/micuenta.php'><i class=fa fa-user s_color></i> Bienvenido/a ".$_SESSION['NOMBRE']."</a></li>";
                               ECHO  "<li><a href=#><i class=fas fa-headset></i> Mi Perfil</a></li>";
                               echo  "<li><a href=Controlador/logout.php><i class=fa fa-user s_color></i> Cerrar Sesión</a></li>";
                            
                            
                             } else if($_SESSION['TIPO']=="Administrador"){

                                echo  "<li><a href='Vista/micuenta.php'><i class=fa fa-user s_color></i> Bienvenido/a ".$_SESSION['NOMBRE']."</a></li>";
                               ECHO  "<li><a href=Vista/MenuAdmin.php><i class=fas fa-headset></i> Menú Administrador</a></li>";
                               echo  "<li><a href=Controlador/logout.php><i class=fa fa-user s_color></i> Cerrar Sesión</a></li>";


                            }else if($_SESSION['TIPO']=="Gestor"){

                                echo  "<li><a href=#><i class=fa fa-user s_color></i> Bienvenido/a ".$_SESSION['NOMBRE']."</a></li>";
                               ECHO  "<li><a href=Vista/MenuAdmin.php><i class=fas fa-headset></i> Menú Gestor</a></li>";
                               echo  "<li><a href=Controlador/logout.php><i class=fa fa-user s_color></i> Cerrar Sesión</a></li>";


                            }
                           
                            
                            }else{

                                echo "<li><a href=../Controlador/controladorLogin.php><i class=fa fa-user s_color></i> Iniciar Sesión</a></li>";

                                echo "<li><a href=../Controlador/controladorRegistrarseCliente.php><i class=fa-solid fa-address-card></i> Registrarse</a></li>";
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
                                    <i class="fab fa-opencart"></i> 20% de descueto con el codigo 3Ad-5Up
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
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo-eco" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item"><a class="nav-link" href="../index.php">Inicio</a></li>
                        <li class="nav-item "><a class="nav-link" href="about.php">Sobre nosotros</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Tienda</a>
                            <ul class="dropdown-menu">
								<li><a href="../Controlador/controladorTienda.php">Sidebar Shop</a></li>
								<li><a href="shop-detail.php">Shop Detail</a></li>
                                <?php 
                                    if(isset($_SESSION['CI'])){ 
                                echo "<li><a href='Vista/cart.php'>Carrito</a></li>
                                <li><a href='Vista/pedido.php'>Pedido</a></li>
                                <li><a href='Vista/Micuenta.php'>Mi cuenta</a></li>
                                <li><a href='Vista/wishlist.php'>Lista de deseos</a></li>";}  
                                ?>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Galería</a></li>
                        <li class="nav-item active"><a class="nav-link" href="contact-us.php">Contáctanos</a></li>
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
                <input type="text" class="form-control" placeholder="Buscar">
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
                    <h2>Contáctanos</h2>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                        <h2>Envienos su mensaje </h2>
                        <p></p>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Correo electonico" id="email" class="form-control" name="name" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="name" placeholder="Asunto" required data-error="Please enter your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="form-control" id="message" placeholder="Mensaje" rows="4" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
                                        <button class="btn hvr-hover" id="submit" type="submit">Enviar mensaje</button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
				<div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>Información de contacto</h2>
                        <p>Lo que pueden encontrar en en este  lugar es la dirección de nuestra huerta, telefono de contacto y nuesto correo electronico</p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Avenida General San Martín & Gilberto Bellini, 12300 Montevideo 
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Telefono: <a href="22260722">22260722</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Gmail: <a href="mailto: ecoverdeuy2022@gmail.com"> ecoverdeuy2022@gmail.com</a></p>
                            </li>
                        </ul>
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
							<h3>Horarios de atencion </h3>
							<ul class="list-time">
								<li>Lunes a Viernes 08.00am a 17.00pm</li> <li>Sabado: 10.00am a 08.00pm</li> <li>Domingo: <span>Cerrado</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Mensaje rapido</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Mensaje" />
									<i class="fa fa-envelope"></i>
								</div>
								<button class="btn hvr-hover" type="submit">Enviar</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Redes sociales</h3>
							<p>Lugares en donde nos puedes encontrar</p>
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/ecoverde_uy/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Acceso rapído</h4>
                            <ul>
                                <li><a href="inicio.php">Inicio</a></li>
                                <li><a href="Vista/about.php">Sobre nosotros</a></li>
                                <li><a href="">Tienda</a></li>
                                <li><a href="Vista/gallery.php">Galeria</a></li>
                                <li><a href="Vista/contact-us.php">Contáctanos</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contacto</h4>
                            <ul>
                                
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Telefono: <a href="tel:+1-888705770">22260722</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">ecoverdeuy2022@gmail.com</a></p>
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