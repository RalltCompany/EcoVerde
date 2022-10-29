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
    <title>EcoVerde</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo.ico" type="image/logo.icon">
    <link rel="logo.icon" href="images/logo.icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Vista/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="Vista/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="Vista/css/responsive.css">
    <!-- Custom CSS 
    <link rel="stylesheet" href="Vista/css/custom.css"> -->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://kit.fontawesome.com/861b0d1a7d.js" crossorigin="anonymous"></script>
</head>

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
                                
                               echo  "<li><a href='Vista/micuenta.php'><i class=fa fa-user s_color></i> Bienvenido/a ".$_SESSION['NOMBRE']."</a></li>";
                               ECHO  "<li><a href=Vista/Micuenta.php><i class=fas fa-headset></i> Mi Cuenta</a></li>";
                               echo  "<li><a href=Controlador/logout.php><i class=fa fa-user s_color></i> Cerrar Sesión</a></li>";
                            
                            
                             } else if($_SESSION['TIPO']=="Administrador"){

                                echo  "<li><a href='Vista/micuenta.php'><i class=fa fa-user s_color></i> Bienvenido/a ".$_SESSION['NOMBRE']."</a></li>";
                               ECHO  "<li><a href=Vista/MenuAdmin.php><i class=fas fa-headset></i> Menú Administrador</a></li>";
                               echo  "<li><a href=Controlador/logout.php><i class=fa fa-user s_color></i> Cerrar Sesión</a></li>";


                            }else if($_SESSION['TIPO']=="Gestor"){

                                echo  "<li><a href=#><i class=fa fa-user s_color></i> Bienvenido/a ".$_SESSION['NOMBRE']."</a></li>";
                               ECHO  "<li><a href=Vista/MenuAdmin.php><i class=fas fa-headset></i> Menú Gestor</a></li>";
                               echo  "<li><a href=Controlador/logout.php><i class=fa fa-user s_color></i> Cerrar Sesión</a></li>";


                            }else if($_SESSION['TIPO']=="Reparto"){

                                echo  "<li><a href=micuenta.php><i class=fa fa-user s_color></i> Bienvenido/a ".$_SESSION['NOMBRE']."</a></li>";
                               ECHO  "<li><a href=Controlador/controladorReparto.php><i class=fas fa-headset></i> Menú Reparto</a></li>";
                               echo  "<li><a href=Controlador/logout.php><i class=fa fa-user s_color></i> Cerrar Sesión</a></li>";


                            }
                           
                            
                            }else{

                                echo "<li><a href=Controlador/controladorLogin.php><i class=fa fa-user s_color></i> Iniciar Sesión</a></li>";

                                echo "<li><a href=Controlador/controladorRegistrarseCliente.php><i class=fa-solid fa-address-card></i> Registrarse</a></li>";
                            }

                          


                            if (!isset($_SESSION["ocarrito"])){
                                $_SESSION["ocarrito"] = new Pedidos();
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
                    <a class="navbar-brand" href="index.php"><img src="images/logo.png" class="logo-eco" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link" href="Vista/about.php">Sobre nosotros</a></li>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Tienda</a>
                            <ul class="dropdown-menu">
								<li><a href="Controlador/controladorTienda.php?pagina=1">Tienda</a></li>
								
                                <?php 



                                    if(isset($_SESSION['CI'])){ 
                                echo "<li><a href='Controlador/controladorCarrito.php'>Carrito <span class='numCarrito'>".$_SESSION['ocarrito']->getCantidadProd()."<span></a></li>
                                <li><a href='Controlador/controladorPedido.php'>Pedido</a></li>
                                <li><a href='Vista/Micuenta.php'>Mi cuenta</a></li>";}  
                                ?>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="Vista/gallery.php">Galería</a></li>
                        <li class="nav-item"><a class="nav-link" href="Vista/contact-us.php">Contáctanos</a></li>
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

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/fondo.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Bienvenido a <br> EcoVerde</strong></h1>
                            <p class="m-b-40">Tu lugar de confianza en cuanto a los productos <br> más frescos del mercado y a un solo click de distancia.</p>
                            <p><a class="btn hvr-hover" href="Controlador/controladorTienda.php">Comprar Ahora</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/fondo2.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Bienvenido a <br> EcoVerde</strong></h1>
                            <p class="m-b-40">Tu lugar de confianza en cuanto a los productos <br> más frescos del mercado y a un solo click de distancia.</p>
                            <p><a class="btn hvr-hover" href="Controlador/controladorTienda.php">Comprar Ahora</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/fondo3.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Bienvenido a <br> EcoVerde</strong></h1>
                            <p class="m-b-40">Tu lugar de confianza en cuanto a los productos <br> más frescos del mercado y a un solo click de distancia.</p>
                            <p><a class="btn hvr-hover" href="Controlador/controladorTienda.php">Comprar Ahora</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/verduras.png" alt="" />
                        <a class="btn hvr-hover" href="#">Verduras</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/frutas.png" alt="" />
                        <a class="btn hvr-hover" href="#">Frutas</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box">
                        <img class="img-fluid" src="images/insumo.png" alt="" />
                        <a class="btn hvr-hover" href="#">Insumos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->
	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="images/ofertaverduras.png" alt="" />
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<img class="img-fluid" src="images/ofertafruta.png" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div> 

    <!-- Start Products  -->
    
    <!-- End Products  -->

    <!-- Start Blog  -->
    <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Nuestra huerta y plantaciones</h1>
                        <p>Estas nos algunas fotos de nuestra huerta orgánica. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog1.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                               <center><h3>Plantaciones</h3></center> 
                                <p></p>
                            </div>
                            <ul class="option-blog">
                              
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog2.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                               <center><h3>Plantaciones despues de 2 meses</h3></center>
                                <p></p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src="images/blog3.jpg" alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                            <center><h3>Cosecha</h3></center>
                                <p></p>
                            </div>
                            <ul class="option-blog">                            
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    <!-- End Blog  -->


    <!-- Start Instagram Feed  -->
    
    <!-- End Instagram Feed  -->


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
    <script src="Vista/js/jquery-3.2.1.min.js"></script>
    <script src="Vista/js/popper.min.js"></script>
    <script src="Vista/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="Vista/js/jquery.superslides.min.js"></script>
    <script src="Vista/js/bootstrap-select.js"></script>
    <script src="Vista/js/inewsticker.js"></script>
    <script src="Vista/js/bootsnav.js."></script>
    <script src="Vista/js/images-loded.min.js"></script>
    <script src="Vista/js/isotope.min.js"></script>
    <script src="Vista/js/owl.carousel.min.js"></script>
    <script src="Vista/js/baguetteBox.min.js"></script>
    <script src="Vista/js/form-validator.min.js"></script>
    <script src="Vista/js/contact-form-script.js"></script>
    <script src="Vista/js/custom.js"></script>
</body>

</html>