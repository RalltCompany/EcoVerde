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




if(isset($_GET['armado'])){
    
        echo "<script>
        Swal.fire({
          icon: 'success',
          title: '¡Gracias!',
          html: 'Su pedido ha sido registrado correctamente. Puedes hacer un seguimiento en el apartado <b>Mi cuenta</b>. ¡Gracias por elegirnos!',
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
                <h2 class="h2">¡Bienvenido <?php echo $_SESSION['NOMBRE']; ?>!</h2>
                </ul>
            </div>
            <!-- /.navbar-collapse -->

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
            <div class="volver">
            <a href="../Vista/MenuAdmin.php"><i class="fa-solid fa-circle-chevron-left"></i></a>
        </div>
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
        <a class="a" href="../Controlador/controladorPedidoAdmin.php"> Aceptar o Rechazar  |</a>
        <a class="a" href="../Controlador/controladorGestionarPedidos.php">|  Gestionar  |</a>
        <a class="a" href="../Controlador/controladorCambiarPedidos.php">|  Enviar a entrega</a>
        </div>
        <br>
        <div class="contenedor">
    <table class="notas">
    
    <thead>
        <tr>

            <th>Numero</th>
            <th>Metodo de pago</th>
            <th>Dirección</th>
            <th>Fecha y hora</th>
            <th>Rango de hora preferido</th>
            <th>Enviar a entrega</th>
            
            
    
        </tr>
    </thead>
    <tbody>
        <?php

 if(isset($datos)){
        foreach( $datos as $dato){
    echo '<tr><td data-label="Numero">'.$dato['numero'].'</td><td data-label="Metodo Pago">'.$dato['metodoPago'].'</td><td data-label="Direccion">'.$dato['direccionpe'].'</td><td data-label="Fecha y hora">'.$dato['fechayHora'].'</td><td data-label="Hora preferida de entrega">'.$dato['horaPref'].'</td><td data-label="Enviar a entrega"><a href="controladorCambiarPedidos.php?armado='.$dato['numero'].'"><i class="fa-solid fa-truck"></i></a></td></tr>';
                                }
                            }else{
                                echo '<tr><td colspan="6">No hay pedidos armados.</td></tr>';
                            }
                                    ?>
    </tbody>

    
</table>

</div>

<?php

$pedidos->mostrarPaginado("CambiarPedidos", "Armado");
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