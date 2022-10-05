<?php
Class Producto{

    private $Producto; //Para array
    private $db; //Para conexion
    private $us;

    private $Codigo;
    private $Nombre;
    private $Familia;
    private $Precio;
    private $Propiedades;
    private $Disponibilidad;
    private $Mesdeplantado;
    private $Imagen;
/*
    public function __construct($Codigo, $Nombre, $Familia, $Precio, $Propiedades, $Disponibilidad, $Mesdeplantado, $Imagen){
        $this -> Codigo=$Codigo;
        $this -> Nombre=$Nombre;
        $this -> Familia=$Familia;
        $this -> Precio=$Precio;
        $this -> Propiedades=$Propiedades;
        $this -> Disponibilidad=$Disponibilidad;
        $this -> Mesdeplantado=$Mesdeplantado;
        $this -> Imagen=$Imagen;
    }
*/

public function __construct(){
			
    //Asignamos al atributo db el valor del metodo conexion() de la clase Conectar
    //Conectar es la clase y conexion es el metodo
    $this->db = Conectar::conexion();
    //Determinamos que el atributo personas será un array
    $this->Producto = array();
    $this->us = array();
    
}
    public function setCodigo($Codigo){
        $this -> Codigo=$Codigo;
    }
    public function getCodigo(){
        return $this -> Codigo;
    }
    public function setNombre($Nombre){
        $this -> Nombre=$Nombre;
    }
    public function getNombre(){
        return $this -> Nombre;
    }
    public function setFamilia($Familia){
        $this -> Familia=$Familia;
    }
    public function getFamilia(){
        return $this -> Familia;
    }
    public function setPrecio($Precio){
        $this -> Precio=$Precio;
    }
    public function getPrecio(){
        return $this -> Precio;
    }
    public function setPropiedades($Propiedades){
        $this -> Propiedades=$Propiedades;
    }
    public function getPropiedades(){
        return $this -> Propiedades;
    }
    public function setDisponibilidad($Disponibilidad){
        $this -> Disponibilidad=$Disponibilidad;
    }
    public function getDisponibilidad(){
        return $this -> Disponibilidad;
    }
    public function setMesdeplantado($Mesdeplantado){
        $this -> Mesdeplantado=$Mesdeplantado;
    }
    public function getMesdeplantado(){
        return $this -> Mesdeplantado;
    }
    public function setImagen($Imagen){
        $this -> Imagen=$Imagen;
    }
    public function getImagen(){
        return $this -> Imagen;
    }


    public function getVerduras(){
			
        $sql = "SELECT * FROM producto WHERE familia = 'Frutas' AND productoactivo='1'";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Producto[]=$filas;
        }
        return $this->Producto;
        
    }


    public function RegistrarProductos($CIU, $nombre, $precio, $familia, $disponibilidad, $propiedades, $mesdeplantado, $nombreI, $nombreD){
        $tmp_name = $_FILES[$nombreI]['tmp_name'];

	    if (is_dir($nombreD) && is_uploaded_file($tmp_name)){
		
		$img_file = $_FILES[$nombreI]['name'];
		$img_type = $_FILES[$nombreI]['type'];

		if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type, "jpg")) || strpos($img_type, "png"))){
			if (move_uploaded_file($tmp_name, $nombreD . '/' . $img_file)){
				
				$ruta = $nombreD . '/' . $img_file;
        $sql = "INSERT INTO producto (ciu, nombre, precio, familia, disponibilidad, propiedades, mes_de_plantado, imagen, productoactivo) VALUES 
        ('$CIU', '$nombre', '$precio', '$familia', '$disponibilidad', '$propiedades', '$mesdeplantado', '$ruta', '1')";
        
            if($this->db->query($sql)){
                return true;
            
            }else{
                return false;
            }
        }
        }
}
}



    public function UpdateImagen($codigo, $nombreI, $nombreD){
        $tmp_name = $_FILES[$nombreI]['tmp_name'];

	    if (is_dir($nombreD) && is_uploaded_file($tmp_name)){
		
		$img_file = $_FILES[$nombreI]['name'];
		$img_type = $_FILES[$nombreI]['type'];

		if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type, "jpg")) || strpos($img_type, "png"))){
			if (move_uploaded_file($tmp_name, $nombreD . '/' . $img_file)){
				
				$ruta = $nombreD . '/' . $img_file;
        $sql1 = "UPDATE producto SET imagen='$ruta' WHERE codigo='$codigo' AND productoactivo='1'";
        
        if($this->db->query($sql1)){
            return true;
            
        }else{
            return false;
        }
    }
}
}
}

    public function CedulaUs(){
        $sql = "SELECT * FROM usuario WHERE tipo='Gestor' OR tipo='Administrador' AND clienteactivo='1'";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){

				$this->us[]=$filas;
			}

			return $this->us;
			
		}



        public function deleteProducto($Codigo){
            $sql = "UPDATE producto SET productoactivo='0' WHERE codigo='$Codigo'";
                
                if($delete = $this->db->query($sql)){
                    return true;
                }else{
                    return false;
                }
                
                
            }
        

            public function getProducto(){
                $sql = "SELECT * FROM producto WHERE productoactivo='1' ORDER BY Codigo ";
			    $consulta = $this->db->query($sql);


            while($filas=$consulta->fetch_assoc()){

				$this->Producto[]=$filas;
			}

			return $this->Producto;
            }


       public  function getPaginado(){
			
			$sql = "SELECT * FROM producto WHERE productoactivo='1' ORDER BY Codigo ";
			$consulta = $this->db->query($sql);
            $total_registros = mysqli_num_rows($consulta);
			

			if ($total_registros > 0) {				
				$cant_reg_paginas = 3;
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
				$consulta2 = "SELECT nombre, precio, imagen FROM producto WHERE productoactivo='1' ORDER BY nombre ASC LIMIT ".$inicio."," . $cant_reg_paginas;
				$rs = $this->db->query($consulta2); 
				
				
				
				while ($row=$rs->fetch_array()) {
                    
                        echo '<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <div class="type-lb">
                                    <p class="sale">Sale</p>
                                </div>';
                               echo "<img src='".$row['imagen']."'class='img-fluid'>";

                               echo " <div class='mask-icon'>
                               <ul>
                                   <li><a href='#' data-toggle='tooltip' data-placement='right' title='View'><i class='fas fa-eye'></i></a></li>
                                   <li><a href='#' data-toggle='tooltip' data-placement='right' title='Compare'><i class='fas fa-sync-alt'></i></a></li>
                                   <li><a href='#' data-toggle='tooltip' data-placement='right' title='Add to Wishlist'><i class='far fa-heart'></i></a></li>
                               </ul>
                               <a class='cart' href='#'>Add to Cart</a>
                           </div>
                       </div>
                       <div class='why-text'>";

                       echo "<h4>".$row['nombre']."</h4>
                                                    <h5>$".$row['precio']." /KG</h5>
                                                    </div>
                                            </div>
                                        </div>";
                                        
					

					
				}
                
			}
		}

        public function mostrarPaginado(){
            $sql = "SELECT * FROM producto WHERE productoactivo='1' ORDER BY Codigo ";
			$consulta = $this->db->query($sql);
            $total_registros = mysqli_num_rows($consulta);
            $url="../Controlador/controladorTienda.php";
            echo '<p>';
               
            if ($total_registros > 0) {				
				$cant_reg_paginas = 3;
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
                                echo '<p class="active">'.$i.' -</p>';
                            }else{
                                echo '  <a class="paginado" href="'.$url.'?pagina='.$i.'">'.$i.' -</a>  ';
                            }
                        }
                    if ($pagina != $total_paginas)
                        echo '<a class="paginado" href="'.$url.'?pagina='.($pagina+1).'"> Siguiente </a>';
                }
                echo '</p>';
					
				
				return $pagina;	


        }




     }
    }
    


   
?>