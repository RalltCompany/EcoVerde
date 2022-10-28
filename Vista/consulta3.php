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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
<?php
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
            <a href="../Vista/vistaConsultas.php"><i class="fa-solid fa-circle-chevron-left"></i></a>
        </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
       
    <!-- End Navigation -->
</header>



<body>


    <div class="cuerpoOtros">
        <h2 class="title-product">Consultas</h2>

        </div>
<br>

        

      
    <div class='contenedorTabla'>
    <table class='notas'>
    
    <thead>
            <tr>
                
                <th>Cantidad de pedidos</th>
                <th>Rango de hora</th>

                </tr>
    </thead>
    <?php echo "<tbody>";
      if(isset($con3)){ 
              foreach($con3 as $dato) {
                echo "<tr>
                <td data-label='Cantidad de pedidos'>".$dato["p"]."</td>
                <td data-label='Rango de hora'>".$dato["horaPref"]."</td>
                </tr></tbody>
                ";
                }
               
                    
            }else{
                echo '<tr><td class="alerta" colspan="10">No hay registros.</td></tr>';
            }
                




                
        if(isset($_GET['Eliminado'])){
            echo "<script>
            Swal.fire({
              icon: 'info',
              title: '¡Producto Eliminado!',
              html: '<p>El producto de código: <b>".$_GET['CodEliminado']."</b> ha sido eliminado con éxito.</p>',
              confirmButtonColor: '#008037', 
              });
              </script>";
                      }

                      if(isset($_GET['modificado'])){
                        echo "<script>
                        Swal.fire({
                          icon: 'success',
                          title: '¡Producto Modificado!',
                          html: '<p>El producto ha sido modificado con éxito.</p>',
                          confirmButtonColor: '#008037', 
                          });
                          </script>";
                                  }
                     
        ?>
        </table>
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