<?php
Class Pedidos{

    private $Numero;
    private $Metdepago;
    private $Fecha;
    private $Hora;
    private $Rangohora;
    private $Fechaentrega;

    public function __construct($Numero, $Metdepago, $Fecha, $Hora, $Rangohora, $Fechaentrega){
        $this -> Numero=$Numero;
        $this -> Metdepago=$Metdepago;
        $this -> Fecha=$Fecha;
        $this -> Hora=$Hora;
        $this -> Rangohora=$Rangohora;
        $this -> Fechaentrega=$Fechaentrega;
    }

    public function setNumero($Numero){
        $this -> Numero=$Numero;
    }
    public function getNumero(){
        return $this -> Numero;
    }
    public function setMetdepago($Metdepago){
        $this -> Metdepago=$Metdepago;
    }
    public function getMetdepago(){
        return $this -> Metdepago;
    }
    public function setFecha($Fecha){
        $this -> Fecha=$Fecha;
    }
    public function getFecha(){
        return $this -> Fecha;
    }
    public function setHora($Hora){
        $this -> Hora=$Hora;
    }
    public function getHora(){
        return $this -> Hora;
    }
    public function setRangohora($Rangohora){
        $this -> Rangohora=$Rangohora;
    }
    public function getRangohora(){
        return $this -> Rangohora;
    }
    public function setFechaentrega($Fechaentrega){
        $this -> Fechaentrega=$Fechaentrega;
    }
    public function getFechaentrega(){
        return $this -> Fechaentrega;
    }
}




?>