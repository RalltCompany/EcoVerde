<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>EcoVerde - Gestión Reportes</title>
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
    <link rel="stylesheet" href="../Vista/css/formReportes.css">
    <link rel="stylesheet" href="../Vista/css/style.css">
    

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
            <a href="MenuAdmin.php"><i class="fa-solid fa-circle-chevron-left"></i></a>
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

        <h2 class="title-product">REPORTES</h2> <br>
        

        <div class="contenedor">
            <h3 class="title-sub">USUARIO</h3>
    <table class="notas">
    
    <thead>
        <tr>
                    <th>Cedula</th>
                    <th>Cedula del Admin</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Celular</th>
                    <th class="celdaEmail">Email</th>
                    <th>Calle</th>
                    <th>Numero</th>
                    <th>Esquina</th>
                    <th>Barrio</th>
                    <th>Tipo</th>
                    <th>Estado</th>
            

        </tr>
    </thead>
    <?php echo "<tbody>";
        
        foreach($datosUsuarios as $dato) {
          echo "<tr>
          <td data-label='Cedula'>".$dato["ci"]."</td>
          <td data-label='Cedula del Admin'>NULL</td>
          <td data-label='Nombre'>".$dato["nombre"]."</td>
          <td data-label='Apellido'>".$dato["apellido"]."</td>
          <td data-label='Celular'>".$dato["celular"]."</td>
          <td data-label='Email'>".$dato["email"]."</td>
          <td data-label='Calle'>".$dato["calle"]."</td>
          <td data-label='Numero'>".$dato["numero"]."</td>
          <td data-label='Esquina'>".$dato["esquina"]."</td>
          <td data-label='Barrio'>".$dato["barrio"]."</td>
          <td data-label='Tipo'>".$dato["tipo"]."</td>
          <td data-label='Estado'>".$dato["estado"]."</td>
          </tr>";
          }
          "</tbody>"
          ; 
?>
</table><br>
<center>
    <input type="submit" value="Crear Reporte" class="boton1">

</center>
<div class="cuerpo">

    <h3 class="title-sub">PRODUCTOS</h3>

    <div class="contenedor">
<table class="notas">

<thead>
    <tr>

        <th>Codigo</th>
        <th>Nombre</th>
        <th>Disponibilidad</th>
        <th>Familia o Categoria</th>
        <th>Imagen</th>
        <th>Propiedades</th>
        <th>Precio</th>
        <th>Mes de plantado</th>
        

    </tr>
</thead>
<tbody>
    <tr>
        <td data-label="Codigo">sdfasdsda</td>
        <td data-label="Nombre">dffasdf</td>
        <td data-label="Disponibilidad">ASASASAS</td>
        <td data-label="Familia/Categoria">sdfgdsgsd</td>
        <td data-label="Imagen">sdfasdsda</td>
        <td data-label="Propiedades">dffasdf</td>
        <td data-label="Precio">ASASASAS</td>
        <td data-label="Mes de plantado">sdfgdsgsd</td>
        
    </tr>
    <tr>
        <td data-label="Codigo">sdfasdsda</td>
        <td data-label="Nombre">dffasdf</td>
        <td data-label="Disponibilidad">ASASASAS</td>
        <td data-label="Familia/Categoria">sdfgdsgsd</td>
        <td data-label="Imagen">sdfasdsda</td>
        <td data-label="Propiedades">dffasdf</td>
        <td data-label="Precio">ASASASAS</td>
        <td data-label="Mes de plantado">sdfgdsgsd</td>
        
    </tr>
    <tr>
        <td data-label="Codigo">sdfasdsda</td>
        <td data-label="Nombre">dffasdf</td>
        <td data-label="Disponibilidad">ASASASAS</td>
        <td data-label="Familia/Categoria">sdfgdsgsd</td>
        <td data-label="Imagen">sdfasdsda</td>
        <td data-label="Propiedades">dffasdf</td>
        <td data-label="Precio">ASASASAS</td>
        <td data-label="Mes de plantado">sdfgdsgsd</td>
       
    </tr>
    <tr>
        <td data-label="Codigo">sdfasdsda</td>
        <td data-label="Nombre">dffasdf</td>
        <td data-label="Disponibilidad">ASASASAS</td>
        <td data-label="Familia/Categoria">sdfgdsgsd</td>
        <td data-label="Imagen">sdfasdsda</td>
        <td data-label="Propiedades">dffasdf</td>
        <td data-label="Precio">ASASASAS</td>
        <td data-label="Mes de plantado">sdfgdsgsd</td>
        
    </tr>
    <tr>
        <td data-label="Codigo">sdfasdsda</td>
        <td data-label="Nombre">dffasdf</td>
        <td data-label="Disponibilidad">ASASASAS</td>
        <td data-label="Familia/Categoria">sdfgdsgsd</td>
        <td data-label="Imagen">sdfasdsda</td>
        <td data-label="Propiedades">dffasdf</td>
        <td data-label="Precio">ASASASAS</td>
        <td data-label="Mes de plantado">sdfgdsgsd</td>
        
    </tr>
</tbody>
</table><br>
<center>
    <input type="submit" value="Crear Reporte" class="boton1">

</center>
<div class="cuerpo">

    <h3 class="title-sub">PEDIDOS</h3>

    <div class="contenedor">
<table class="notas">

<thead>
    <tr>

        <th>Numero</th>
        <th>Metodo de pago</th>
        <th>Nombre destinatario</th>
        <th>Fecha y hora</th>
        <th>Rango de hora</th>
        <th>Fecha de entrega</th>
        <th>Estado</th>
        

    </tr>
</thead>
<tbody>
    <tr>
        <td data-label="titulo">sdfasdsda</td>
        <td data-label="nombreprog">dffasdf</td>
        <td data-label="resumen">ASASASAS</td>
        <td data-label="contenido">sdfgdsgsd</td>
        <td data-label="nombreprog">dffasdf</td>
        <td data-label="resumen">ASASASAS</td>
        <td data-label="contenido">sdfgdsgsd</td>
        
    </tr>
    <tr>
        <td data-label="titulo">sdfasdsda</td>
        <td data-label="nombreprog">dffasdf</td>
        <td data-label="resumen">ASASASAS</td>
        <td data-label="contenido">sdfgdsgsd</td>
        <td data-label="nombreprog">dffasdf</td>
        <td data-label="resumen">ASASASAS</td>
        <td data-label="contenido">sdfgdsgsd</td>
        
    </tr>
    <tr>
        <td data-label="titulo">sdfasdsda</td>
        <td data-label="nombreprog">dffasdf</td>
        <td data-label="resumen">ASASASAS</td>
        <td data-label="contenido">sdfgdsgsd</td>
        <td data-label="nombreprog">dffasdf</td>
        <td data-label="resumen">ASASASAS</td>
        <td data-label="contenido">sdfgdsgsd</td>
       
    </tr>
    <tr>
        <td data-label="titulo">sdfasdsda</td>
        <td data-label="nombreprog">dffasdf</td>
        <td data-label="resumen">ASASASAS</td>
        <td data-label="contenido">sdfgdsgsd</td>
        <td data-label="nombreprog">dffasdf</td>
        <td data-label="resumen">ASASASAS</td>
        <td data-label="contenido">sdfgdsgsd</td>
        
    </tr>
    <tr>
        <td data-label="titulo">sdfasdsda</td>
        <td data-label="nombreprog">dffasdf</td>
        <td data-label="resumen">ASASASAS</td>
        <td data-label="contenido">sdfgdsgsd</td>
        <td data-label="nombreprog">dffasdf</td>
        <td data-label="resumen">ASASASAS</td>
        <td data-label="contenido">sdfgdsgsd</td>
        
    </tr>
</tbody>

</table><br>
<center>
    <input type="submit" value="Crear Reporte" class="boton1">

</center>
<div class="cuerpo">

    <h3 class="title-sub">CLIENTES</h3>

    <div class="contenedor">
<table class="notas">

<thead>
    <tr>
        <th>Nombre</th>
        <th>Cédula</th>
        <th>Email</th>
        <th>Dirección</th>
        

    </tr>
</thead>
<tbody>
    <tr>
        <td data-label="titulo">sdfasdsda</td>
        <td data-label="nombreprog">dffasdf</td>
        <td data-label="resumen">ASASASAS</td>
        <td data-label="contenido">sdfgdsgsd</td>
        
    </tr>
    <tr>
        <td data-label="titulo">sdfasdsda</td>
        <td data-label="nombreprog">dffasdf</td>
        <td data-label="resumen">ASASASAS</td>
        <td data-label="contenido">sdfgdsgsd</td>
        
    </tr>
    <tr>
        <td data-label="titulo">sdfasdsda</td>
        <td data-label="nombreprog">dffasdf</td>
        <td data-label="resumen">ASASASAS</td>
        <td data-label="contenido">sdfgdsgsd</td>
       
    </tr>
    <tr>
        <td data-label="titulo">sdfasdsda</td>
        <td data-label="nombreprog">dffasdf</td>
        <td data-label="resumen">ASASASAS</td>
        <td data-label="contenido">sdfgdsgsd</td>
        
    </tr>
    <tr>
        <td data-label="titulo">sdfasdsda</td>
        <td data-label="nombreprog">dffasdf</td>
        <td data-label="resumen">ASASASAS</td>
        <td data-label="contenido">sdfgdsgsd</td>
        
    </tr>
</tbody>
</table><br>


<form action="">

<center>
    <input type="submit" value="Crear Reporte" class="boton1">

</center>

</div>
</form>
</div>
    


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