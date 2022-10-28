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
            <div class="volver">
            <a href="../Vista/MenuAdmin.php"><i class="fa-solid fa-circle-chevron-left"></i></a>
        </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
       
    <!-- End Navigation -->
</header>


<body>


    <div class="cuerpo">

        <h2 class="title-product">Productos</h2>

        <div class="men">
        <a class="a" href="../Controlador/controladorRegistrarProducto.php">Registrar</a>
        <a class="a" href="../Controlador/controladorProductoAdmin.php">Listado</a>
        </div>

        <br>

        
        <form action="../Controlador/controladorRegistrarProducto.php" enctype="multipart/form-data" method="POST" class="form-productos">
            <div class="contenedor-flex">
                <div class="izquierda">
                    <div class="izquierda-divs">
                <input type="text" name="nombre" minlength="2" maxlength="20"  placeholder="Nombre del producto">
                </div>
                <div class="izquierda-divs">
                <input type="number" name="disponibilidad"  placeholder="Disponibilidad en KG">
                </div>
                <div class="izquierda-divs">
                <input type="text" name="familia" minlength="2" maxlength="20" placeholder="Familia o Categoría">
                </div>

                <div class="izquierda-divs">
                    <input type="file" name="imagen" id="">
                </div>


                </div>
            




            <div class="derecha">

                <div class="derecha-divs">
                <input type="text" name="propiedades" minlength="2" maxlength="20" placeholder="Propiedades">
                </div>

                <div class="derecha-divs">
            <input type="text" name="precio" minlength="1" maxlength="6"  placeholder="Precio en pesos">
            </div>

            <div class="derecha-divs">
            <select name="mesplantado" id="" aria-placeholder="Codigo">
              <option value="null">Mes de plantado</option>
              <option value="Enero">Enero</option>
              <option value="Febrero">Febrero</option>
              <option value="Marzo">Marzo</option>
              <option value="Abril">Abril</option>
              <option value="Mayo">Mayo</option>
              <option value="Junio">Junio</option>
              <option value="Julio">Julio</option>
              <option value="Agosto">Agosto</option>
              <option value="Setiembre">Setiembre</option>
              <option value="Octubre">Octubre</option>
              <option value="Noviembre">Noviembre</option>
              <option value="Diciembre">Diciembre</option>
</select>
        </div>

        <div class="derecha-divs">
            
            <select name="cedula" minlength="8" maxlength="8" id="" aria-placeholder="Codigo">
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
                <input type="submit" value="Registrar" name="registrar" class="registrar">
            </div>
        </form>

        </div>
<br><br><br>
<div class="todo">
<div class="all">
    </div>

   
    </div>
    
    
<?php


if(isset($_GET['registrado'])){
    echo "<script>
    Swal.fire({
    icon: 'success',
    title: '¡Producto registrado correctamente!',
    confirmButtonColor: '#008037', 
    });
    </script>";
        }
       
    
    
        ?>

















































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