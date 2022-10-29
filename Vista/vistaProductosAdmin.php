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
    <link rel="shortcut icon" href="../images/logo.ico" type="../image/logo.icon">
    <link rel="logo.icon" href="../images/logo.icon">
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


    <div class="cuerpoOtros">
        <h2 class="title-product">Productos</h2>

        <div class="men">
        <a class="a" href="controladorRegistrarProducto.php">Registrar</a>
        <a class="a" href="controladorProductoAdmin.php">Listado</a>
        
        </div>
        <br>
        <div class="men">
            <form action="">
        <input type="text" placeholder="Filtrar por Codigo" name="cedula" id="cedula">
        <a class="a" href="javascript:funcion()"><i class="fa-solid fa-magnifying-glass"></i></a>
        </form>

        <script language="JavaScript">

            function funcion(){
                var cedula=document.getElementById("cedula").value;
                
                window.location.href = 'controladorProductoAdmin.php?Buscar='+cedula+'&Hola';
            }

        </script>

        </div>
<br>
        <i class="fa-solid fa-boxes-packing"></i>
        

      
    <div class='contenedorTabla'>
    <table class='notas'>
    
    <thead>
            <tr>
                <th>Codigo</th>
                
                <th>CI Admin</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th class="celdaEmail">Familia</th>
                <th>Disponibilidad</th>
                <th>Eliminar</th>
                <th>Modificar</th>
                </tr>
    </thead>
    <?php if(!isset($_GET['Buscar'])){ 
    echo "<tbody>";
    
              foreach($datos as $dato) {
                echo "<tr>
                <td data-label='Cedula'>".$dato["codigo"]."</td>
                <td data-label='Nombre'>".$dato["ciu"]."</td>
                <td data-label='Apellido'>".$dato["nombre"]."</td>
                <td data-label='Celular'>".$dato["precio"]."</td>
                <td data-label='Email'>".$dato["familia"]."</td>
                <td data-label='Tipo'>".$dato["disponibilidad"]." KG</td>
                <td data-label='Eliminar'><a href=controladorEliminarUsuario.php?ProdEliminar=".$dato["codigo"]."> <i class='fa-solid fa-user-xmark'></i> </a></td>
                <td data-label='Eliminar'><a href=controladorModificarProducto.php?Codigo=".$dato["codigo"]."> <i class='fa-solid fa-user-pen'></i> </a></td>
                </tr>";
                }
                "</tbody>";

            }else{
                echo "<tbody>";
                $Encontrado=False;
                $producto = new Producto();
                $buscado=$producto->getProductoBuscar($_GET['Buscar']);
              foreach($buscado as $dato) {
                    
                    

                        echo "<tr>
                        <td data-label='Cedula'>".$dato["codigo"]."</td>
                        <td data-label='Nombre'>".$dato["ciu"]."</td>
                        <td data-label='Apellido'>".$dato["nombre"]."</td>
                        <td data-label='Celular'>".$dato["precio"]."</td>
                        <td data-label='Email'>".$dato["familia"]."</td>
                        <td data-label='Tipo'>".$dato["disponibilidad"]." KG</td>
                        <td data-label='Eliminar'><a href=controladorEliminarUsuario.php?ProdEliminar=".$dato["codigo"]."> <i class='fa-solid fa-user-xmark'></i> </a></td>
                        <td data-label='Eliminar'><a href=controladorModificarProducto.php?Codigo=".$dato["codigo"]."> <i class='fa-solid fa-user-pen'></i> </a></td>
                        </tr>";

                $Encontrado=True;
                


                    
                }

                if(!$Encontrado){
                    echo "<tr>
                    <td data-label='Alerta' colspan='8'>No se encontró.</td>
                    <tr>";
                }
                "</tbody>";
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


        <?php
         if(!isset($_GET['Buscar'])){
                $producto->PaginadoProducto();
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