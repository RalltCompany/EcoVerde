<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>EcoVerde - Registrarse</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
   
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" href="css/registrarse.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://kit.fontawesome.com/861b0d1a7d.js" crossorigin="anonymous"></script>
</head>


<body>
    <div class="volver">
        <a href="login.php"><i class="fa-solid fa-circle-chevron-left"></i></a>
    </div>
  <div class="ladoform">
    
    <div class="form-titulo"><i class="fa-solid fa-circle-user"></i>
    
       

    </div>
    <form action="../Controlador/controladorCliente.php" method="POST" class="form-productos" id="formRegister" >
        <div class="contenedor-flex">
            <div class="izquierda">
                <div class="izquierda-divs">
            <input type="text" name="nombre" placeholder="Nombre" required>
            </div>
            <div class="izquierda-divs">
                <input type="text" name="apellido" placeholder="Apellido" required>
                </div>
            <div class="izquierda-divs">
            <input type="text" name="cedula" placeholder="Cédula de identidad" required>
            </div>
            <div class="mensajeContra <?php  echo $_GET['errCed'] ?>"> <span class="mensaje-error">Ya te has registrado con esta CI. Inicia Sesión</span> </div>
            
           
            <div class="izquierda-divs">
            <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="mensajeContra <?php  echo $_GET['errMail'] ?>"> <span class="mensaje-error">El correo ya está registrado a una cuenta existente. Inicia sesión</span> </div>
            <div class="izquierda-divs">
                <input type="password" name="password" minlength="8" id="password" placeholder="Contraseña" required>
            </div>
             
            <div class="mensajeContra <?php  echo $_GET['errContra'] ?>"> <span class="mensaje-error">Las contraseñas no coinciden</span> </div>
            
                    <div class="izquierda-divs">
                <input type="password" name="passwordVal" id="passwordVal" required placeholder="Confirmar contraseña">
            </div>
            
            </div>
        




        <div class="derecha">

            <div class="derecha-divs">
            <input type="text" name="calle" placeholder="Calle" required>
            </div>
            <div class="derecha-divs">
                <input type="text" name="numero" placeholder="Numero de puerta" required>
                </div>
            
                <div class="derecha-divs">
                    <input type="text" name="esquina" placeholder="Esquina" required>
                    </div>
                    <div class="derecha-divs">
                        <input type="text" name="barrio" placeholder="Barrio" required>
                        </div>

            <div class="derecha-divs">
        <input type="text" name="celular"  placeholder="Celular" required>
        </div>

        

    
        </div>
            </div>
        <div class="botones">
            <input type="submit" value="Registrarse" class="registrar" name="registrar" id="login">
            
        </div>
    </form>
    
    
  </div>

  <div class="imagen-derecha">
    <a href="../index.php"><img src="../images/logo.png" class="logo"></a>
    <br>
    <p class="subtitulo">Bienvenido al sitio web oficial de EcoVerde</p>
  </div>
  
  
</body>


<script src="js/validarRegistro.js"></script>


</html>