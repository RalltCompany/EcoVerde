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
    <title>EcoVerde - Login</title>
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

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://kit.fontawesome.com/861b0d1a7d.js" crossorigin="anonymous"></script>
</head>


<body>
<?php
if(isset($_GET['registro'])){
                echo "<script>swal.fire('¡Solicitud de registro fue exito!','Un administrador aceptara su registro en la brevedad');</script>";
            }
?>
  <div class="body-form">
    <div class="form-titulo"><i class="fa-solid fa-circle-user"></i>
    
    </div>
    <img src="../images/img-login.jpg" alt="logo ecoverde" class="img-fondo">
    <form action="" class="form-login" method="POST">
      <a href="index.html"><img src="../images/logoresponsive.png" class="logo-responsive"></a>
      <label class="email-label">Email</label>
      <input type="mail" class="caja-login " name="mail">

      
      <label class="pass-label">Contraseña</label>
      <input type="password" name="pass" class="caja-login" >
      
      <p class="registrarse-texto">¿No tienes una cuenta? <a href="controladorRegistrarseCliente.php" class="registrarse">Regístrate</a></p>
      <input type="submit" value="ENTRAR" name="entrar" class="entrar-boton">
    </form>
    
  </div>

  <div class="imagen-derecha">
    <a href="../index.php"><img src="../images/logo.png" class="logo"></a>
    <br>
    <p class="subtitulo">Bienvenido al sitio web oficial de EcoVerde</p>
  </div>
  
  
</body>