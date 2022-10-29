<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="js/validarRegistro.js"></script>
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
    <link rel="shortcut icon" href="../images/logo.ico" type="image/logo.icon">
    <link rel="logo.icon" href="../images/logo.icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Vista/css/bootstrap.min.css">
    <!-- Site CSS -->
   
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../Vista/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../Vista/css/custom.css">

    <link rel="stylesheet" href="../Vista/css/registrarse.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="https://kit.fontawesome.com/861b0d1a7d.js" crossorigin="anonymous"></script>
</head>


<body>
    <div class="volver">
        <a href="controladorLogin.php"><i class="fa-solid fa-circle-chevron-left"></i></a>
    </div>
  <div class="ladoform">
    
    <div class="form-titulo"><i class="fa-solid fa-circle-user"></i>
    
       

    </div>
    <form action="" method="POST" class="form-productos" id="formRegister" >
        <div class="contenedor-flex">
            <div class="izquierda">
                <div class="izquierda-divs">
            <input type="text" name="nombre" maxlength="20" placeholder="Nombre" required>
            </div>
            <div class="izquierda-divs">
                <input type="text" name="apellido"  maxlength="20"  placeholder="Apellido" required>
                </div>
            <div class="izquierda-divs">
            <input type="text" name="cedula" minlength="8" maxlength="8" placeholder="Cédula de identidad" required>
            </div>
           
            
           
            <div class="izquierda-divs">
            <input type="email" name="email"minlength="4" maxlength="50"  placeholder="Email" required>
            </div>

    
            
            <div class="izquierda-divs">
                <input type="password" name="password" minlength="8" id="password" placeholder="Contraseña" required>
            </div>
             
            
            
                    <div class="izquierda-divs">
                <input type="password" name="passwordVal" minlength="8" id="passwordVal" required placeholder="Confirmar contraseña">
            </div>
            
            </div>
        

            <?php
            if(isset($_GET['errmail'])){
                echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'Oops...!',
              text: 'El correo electronico que quieres utilizar, ya fue registrado',
              confirmButtonColor: '#008037', 
              });
              </script>";
            }

           

            if(isset($_GET['errcedula'])){
                echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'Oops...!',
              text: 'La cedula que quieres utilizar ya fue registrada',
              confirmButtonColor: '#008037', 
              });
              </script>";
            }
        

            if(isset($_GET['errclave'])){
                echo "<script>
            Swal.fire({
              icon: 'error',
              title: 'Oops...!',
              text: 'Las contraseñas ingresadas no coinciden',
              confirmButtonColor: '#008037', 
              });
              </script>";
            }




            ?>


        <div class="derecha">

            <div class="derecha-divs">
            <input type="text" name="calle"  maxlength="20"  placeholder="Calle" required>
            </div>
            <div class="derecha-divs">
                <input type="text" name="numero"  minlength="1" maxlength="6" placeholder="Numero de puerta" required>
                </div>
            
                <div class="derecha-divs">
                    <input type="text" name="esquina"  maxlength="30"  placeholder="Esquina" required>
                    </div>
                    <div class="derecha-divs">
                        <input type="text" name="barrio"  maxlength="20"  placeholder="Barrio" required>
                        </div>

            <div class="derecha-divs">
        <input type="text" name="celular" minlength="9" maxlength="9"  placeholder="Celular" required>
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





</html>