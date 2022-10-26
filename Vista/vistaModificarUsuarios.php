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
            <a href="../Controlador/controladorUsuariosAdmin.php"><i class="fa-solid fa-circle-chevron-left"></i></a>
        </div>
            <!-- End Atribute Navigation -->
        </div>
        <!-- Start Side Menu -->
       
    <!-- End Navigation -->
</header>



<body>


    <div class="cuerpo">
        <h2 class="title-product">Usuarios</h2>

        <center>
        <a class="a" href="../Controlador/controladorRegistrarUsuario.php">Registrar</a>
        
        
        <a class="a" href="controladorUsuariosAdmin.php">Buscar</a>
        </center>
<br>
        <i class="fa-solid fa-user-gear"></i>
        

        <form action="" method="POST" class="form-productos">
            <div class="contenedor-flex">
                <div class="izquierda">
                    <div class="izquierda-divs">
                        
                <input type="number" name="cedu" placeholder="" value="<?php  echo $_GET['Cedula'];  ?>" readonly>
                </div>
                <div class="izquierda-divs">
                <?php foreach($datosZ as $dato){?>
                    <input type="text" name="nom" placeholder="Nombre" value="<?php echo $dato['nombre'];  ?>">
                    </div>
                <div class="izquierda-divs">
                <input type="text" name="ape" placeholder="Apellido" value="<?php echo $dato['apellido'];?>">
                </div>
                <div class="izquierda-divs">
                <input type="email" name="em" placeholder="Email" value="<?php echo $dato['email'];?>">
                </div>


                <div class="izquierda-divs">
                    <select name="tipouss" id="" >
                    <?php if($dato['tipo'] == "Administrador"){
                      echo " <option value='".$dato['tipo']."' class=''>".$dato['tipo']."</option>
                      <option value='Gestor'>Gestor</option>
                      <option value='Reparto'>Reparto</option>
                      <option value='Cliente'>Cliente</option>
                      <option value='' class=''>Selecciona tipo de usuario</option>";
                        
                    }else if($dato['tipo'] == "Gestor"){
                        echo "<option value='".$dato['tipo']."' class=''>".$dato['tipo']."</option>
                      <option value='Administrador'>Administrador</option>
                      <option value='Reparto'>Reparto</option>
                      <option value='Cliente'>Cliente</option>
                      <option value='' class=''>Selecciona tipo de usuario</option>";
                    }else if($dato['tipo'] == "Reparto"){
                        echo "<option value='".$dato['tipo']."' class=''>".$dato['tipo']."</option>
                        <option value='Administrador'>Administrador</option>
                        <option value='Gestor'>Gestor</option>
                        <option value='Cliente'>Cliente</option>
                        <option value='' class=''>Selecciona tipo de usuario</option>";
                    }else if($dato['tipo'] == "Cliente"){
                        echo "<option value='".$dato['tipo']."' class=''>".$dato['tipo']."</option>
                        <option value='Administrador'>Administrador</option>
                        <option value='Gestor'>Gestor</option>
                        <option value='Reparto'>Reparto</option>
                        <option value='' class=''>Selecciona tipo de usuario</option>";
                    }
                        ?>
        
                    </select>
                </div>
                </div>
            




            <div class="derecha">

                <div class="derecha-divs">
                <input type="text" name="calle" placeholder="Calle" value="<?php echo $dato['calle'];  ?>">
                </div>
                <div class="derecha-divs">
                    <input type="text" name="numero" placeholder="Numero"value="<?php echo $dato['numero'];  ?>">
                    </div>
                
                    <div class="derecha-divs">
                        <input type="text" name="esquina" placeholder="Esquina"value="<?php echo $dato['esquina'];  ?>">
                        </div>
                        <div class="derecha-divs">
                            <input type="text" name="barrio" placeholder="Barrio" value="<?php echo $dato['barrio'];  ?>">
                            </div>

                <div class="derecha-divs">
            <input type="text" name="celu"  placeholder="Celular"value="<?php echo $dato['celular'];  ?>">

            <?php }?>
            </div>
            </div>
                </div>
            <div class="botones">
                <input type="submit" name="mod" value="Modificar" class="modificar">
            </div>
        </form>

<?php


        if(isset($_GET['modificado'])){
  echo "<script>
  Swal.fire({
    icon: 'success',
    title: '¡Usuario modificado correctamente!',
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