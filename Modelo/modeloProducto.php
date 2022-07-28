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


    public function getProducto(){
			
        $sql = "SELECT * FROM producto ORDER BY Codigo";
        $consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->Producto[]=$filas;
        }
        return $this->Producto;
        
    }


    public function RegistrarProductos($CIU, $nombre, $precio, $familia, $disponibilidad, $propiedades, $mesdeplantado){
        $sql = "INSERT INTO producto (ciu, nombre, precio, familia, disponibilidad, propiedades, mes_de_plantado, imagen) VALUES 
        ('$CIU', '$nombre', '$precio', '$familia', '$disponibilidad', '$propiedades', '2022-07-06', 'dfsd')";
        
        
        if($this->db->query($sql)){
            return true;
            
        }else{
            return false;
        }

}

    public function CedulaUs(){
        $sql = "SELECT * FROM usuario WHERE tipo='Gestor' OR tipo='Administrador'";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){

				$this->us[]=$filas;
			}

			return $this->us;
			
		}
    }
?>