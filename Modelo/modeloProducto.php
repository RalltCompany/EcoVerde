<?php
Class Productos{

    private $Codigo;
    private $Nombre;
    private $Familia;
    private $Precio;
    private $Propiedades;
    private $Disponibilidad;
    private $Mesdeplantado;
    private $Imagen;

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
}




?>