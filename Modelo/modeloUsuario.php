<?php
Class Usuario{
    private $Usuario; //Para array
    private $db; //Para conexion


    private $Cedula;
    private $Nombre;
    private $Apellido;
    private $Celular;
    private $Email;
    private $Clave;
    private $Calle;
    private $Numero;
    private $Esquina;
    private $Barrio;
    private $Tipo;

   /*public function __construct($Cedula, $Nombre, $Apellido, $Celular, $Email, $Clave, $Calle, $Numero, $Esquina, $Barrio, $Tipo){
        $this -> Cedula=$Cedula;
        $this -> Nombre=$Nombre;
        $this -> Apellido=$Apellido;
        $this -> Celular=$Celular;
        $this -> Email=$Email;
        $this -> Clave=$Clave;
        $this -> Calle=$Calle;
        $this -> Numero=$Numero;
        $this -> Esquina=$Esquina;
        $this -> Barrio=$Barrio;
        $this -> Tipo=$Tipo;


       
    } */
    
    public function __construct(){
			
        //Asignamos al atributo db el valor del metodo conexion() de la clase Conectar
        //Conectar es la clase y conexion es el metodo
        $this->db = Conectar::conexion();
        //Determinamos que el atributo personas será un array
        $this->Usuario = array();
        
    }


    public function setCedula($Cedula){
        $this -> Cedula=$Cedula;
    }
    public function getCedula(){
        return $this -> Cedula;
    }
    public function setNombre($Nombre){
        $this -> Nombre=$Nombre;
    }
    public function getNombre(){
        return $this -> Nombre;
    }
    public function setApellido($Apellido){
        $this -> Apellido=$Apellido;
    }
    public function getApellido(){
        return $this -> Apellido;
    }
    public function setCelular($Celular){
        $this -> Celular=$Celular;
    }
    public function getCelular(){
        return $this -> Celular;
    }
    public function setEmail($Email){
        $this -> Email=$Email;
    }
    public function getEmail(){
        return $this -> Email;
    }
    public function setClave($Clave){
        $this -> Clave=$Clave;
    }
    public function getClave(){
        return $this -> Clave;
    }
    public function setCalle($Calle){
        $this -> Calle=$Calle;
    }
    public function getCalle(){
        return $this -> Calle;
    }
    public function setNumero($Numero){
        $this -> Numero=$Numero;
    }
    public function getNumero(){
        return $this -> Numero;
    }
    public function setEsquina($Esquina){
        $this -> Esquina=$Esquina;
    }
    public function getEsquina(){
        return $this -> Esquina;
    }
    public function setTipo($Tipo){
        $this -> Tipo=$Tipo;
    }
    public function getTipo(){
        return $this -> Tipo;
    }

    public function getUsuario(){
			
        $sql = "SELECT * FROM usuario WHERE estado='Aceptado' AND clienteactivo='1' ORDER BY ci ";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Usuario[]=$filas;
        }
        return $this->Usuario;
        
    }


    public function getUsuarioBuscar($Cedula){
			
        $sql = "SELECT * FROM usuario WHERE ci='$Cedula' AND estado='Aceptado' AND clienteactivo='1' ORDER BY ci ";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Usuario[]=$filas;
        }
        return $this->Usuario;
        
    }

    public function getUsuariosPendientes(){
			
        $sql = "SELECT * FROM usuario WHERE estado='Pendiente' AND tipo='Cliente' AND clienteactivo='1' ORDER BY ci";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Usuario[]=$filas;
        }
        return $this->Usuario;
        
    }

    public function getUsuarioParaModificar($CI){
        $sql = "SELECT * FROM usuario WHERE ci='$CI' ORDER BY ci";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Usuario[]=$filas;
        }
        return $this->Usuario;
    }

    public function getCredenciales($email){
        $sql = "SELECT * FROM usuario WHERE email='$email' AND clienteactivo='1'";
        $consulta = $this->db->query($sql);
        while($filas=$consulta->fetch_assoc()){

            $this->Usuario[]=$filas;
        }
        return $this->Usuario;
    }




    public function RegistrarCliente($Cedula, $Nombre, $Apellido, $Celular, $Email, $Clave, $Calle, $Numero, $Esquina, $Barrio ){
        $Tipo= "Cliente";
        $Estado= "Pendiente";
        
        $sql = "INSERT INTO usuario VALUES ('$Cedula', NULL, '$Nombre', '$Apellido', '$Celular', '$Email', '$Clave', '$Calle', '$Numero', '$Esquina', '$Barrio', '$Tipo', '$Estado', '1')";
        
        
        if($this->db->query($sql)){
            return true;
            
        }else{
            return false;
        }
    }

    public function RegistrarUsuarios($Cedula, $Nombre, $Apellido, $Celular, $Email, $Clave, $Calle, $Numero, $Esquina, $Barrio, $Tipo){
        $Estado= "Aceptado";
        $sql = "INSERT INTO usuario VALUES ('$Cedula', NULL, '$Nombre', '$Apellido', '$Celular', '$Email', '$Clave', '$Calle', '$Numero', '$Esquina', '$Barrio', '$Tipo', '$Estado', '1')";
        
        
        if($this->db->query($sql)){
            return true;
            
        }else{
            return false;
        }
    }
    

    public function EliminarUsuario($c){
	
        $sql = "UPDATE usuario SET clienteactivo='0' WHERE ci = '$c'";
        if($this->db->query($sql)){
            return true;
        }else{
            return false;
        }
        
    }
    
    public function ModificarUsuarios($c, $nombre, $apellido, $celular, $email, $calle, $numero, $esquina, $barrio, $tipo, $ciadmin){
        
			$sql="UPDATE usuario SET nombre='$nombre', apellido='$apellido', celular='$celular', email='$email', calle='$calle',
            numero='$numero', esquina='$esquina', barrio='$barrio', tipo='$tipo', ciadmin='$ciadmin' WHERE ci='$c'";
			if($this->db->query($sql)){
				return true;
			}else{
				return false;
			}
		}


    



    public function ComprobarEstado($Mail, $Clave){
        $sql="SELECT * FROM usuario WHERE email='$Mail' AND contraseña='$Clave' AND clienteactivo='1'";
        $consulta = $this->db->query($sql);
       
        if( $consulta ){

            
            if( mysqli_num_rows( $consulta ) > 0){
          
              
              while($fila = mysqli_fetch_array( $consulta ) ){
        
                    if($fila['estado']=="Aceptado"){
                        return false;
                    }else{
                        return true;
                    }
              }
          
            }
          
           
          
          }
    }


    public function ComprobarCedula($Cedula){
        $sql="SELECT * FROM usuario WHERE CI='$Cedula' AND clienteactivo='1'";
        $consulta = $this->db->query($sql);
       
        if( $consulta ){

            
            if( mysqli_num_rows( $consulta ) > 0){
          
              
              return true;
          
          }else{
            return false;
          }
    }

 }


 public function ComprobarEmail($Mail){
    $sql="SELECT * FROM usuario WHERE email='$Mail' AND clienteactivo='1'";
    $consulta = $this->db->query($sql);
   
    if( $consulta ){

        
        if( mysqli_num_rows( $consulta ) > 0){
      
          
          return true;
      
      }else{
        return false;
      }
}

}



    public function IniciarSesion($Mail, $Clave){
        $sql="SELECT * FROM usuario WHERE email='$Mail' AND contraseña='$Clave' AND clienteactivo='1'"; 
        $consulta = $this->db->query($sql);
        
        

        if($result=$consulta){
            $filas=mysqli_num_rows($consulta);
        }

        if($filas<1){
            return false;
        }else{
            return true;
        }
    }


    public function AceptarCliente($Cedula){
        
        $Estado= "Aceptado";
        $sql = "UPDATE usuario SET estado = '$Estado' WHERE ci = '$Cedula' AND clienteactivo='1'";
        
        
        if($this->db->query($sql)){
            return true;
            
        }else{
            return false;
        }
    }





    function getUsuarioComprador($cedula){
			
			
		$sql = "SELECT * FROM usuario WHERE ci = '$cedula'";
		$consulta = $this->db->query($sql);
		
		while($filas=$consulta->fetch_assoc()){
			$this->Usuario[]=$filas;
		}

		return $this->Usuario;
		
	
}



public  function getUsuariosAdmin(){
			
    $sql = "SELECT * FROM usuario WHERE clienteactivo='1' AND estado='Aceptado' ORDER BY ci";
    $consulta = $this->db->query($sql);
    $total_registros = mysqli_num_rows($consulta);
    

    if ($total_registros > 0) {				
        $cant_reg_paginas = 50;
        $pagina = false;
        if (isset($_GET["pagina"])){
            $pagina = $_GET["pagina"];
        }
        
        if (!$pagina){
            $inicio = 0;
            $pagina = 1;
        }else{
            $inicio = ($pagina - 1) * $cant_reg_paginas;
        }
        
        $sql2 = "SELECT * FROM usuario WHERE clienteactivo='1' AND estado='Aceptado' ORDER BY ci ASC LIMIT ".$inicio."," . $cant_reg_paginas;
        $rs = $this->db->query($sql2); 
        
        
        
        while ($filas=$rs->fetch_assoc()) {
            
            $this->pedidos[]=$filas;
        }

        return $this->pedidos;
}
        
}



public function PaginadoUsuarios(){
    $sql = "SELECT * FROM usuario WHERE clienteactivo='1' AND estado='Aceptado' ORDER BY ci";
    $consulta = $this->db->query($sql);
    $total_registros = mysqli_num_rows($consulta);
    $url="../Controlador/controladorUsuariosAdmin.php";
    echo '<div class="price-box-slider cent pagAdmin"><p>';
       
    if ($total_registros > 0) {				
        $cant_reg_paginas = 50;
        $pagina = false;
        if (isset($_GET["pagina"])){
            $pagina = $_GET["pagina"];
        }
        
        if (!$pagina){
            $inicio = 0;
            $pagina = 1;
        }else{
            $inicio = ($pagina - 1) * $cant_reg_paginas;
        }

        $total_paginas = ceil($total_registros / $cant_reg_paginas);

        if ($total_paginas >= 1) {
            if ($pagina != 1) 
                echo '<a class="paginado" href="'.$url.'?pagina='.($pagina-1).'"> Anterior </a>';
                for ($i=1;$i<=$total_paginas;$i++) {
                    if ($pagina == $i){
                        echo '<p class="active disp">'.$i.' -</p>';
                    }else{
                        echo '  <a class="paginado" href="'.$url.'?pagina='.$i.'">'.$i.' -</a>  ';
                    }
                }
            
            if ($pagina != $total_paginas)
                echo '<a class="paginado" href="'.$url.'?pagina='.($pagina+1).'"> Siguiente </a>';
            
        }
        echo '</p></div>';
            
        
        return $pagina;	


}




 


}

    public function Consulta1(){
        $sql = "SELECT barrio, COUNT(*) AS cantidad FROM usuario GROUP BY barrio;";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Usuario[]=$filas;
        }
        return $this->Usuario;
    }

   
}

?>