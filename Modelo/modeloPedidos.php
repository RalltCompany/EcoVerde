<?php
Class Pedidos{

    private $Numero;
    private $Metdepago;
    private $Fecha;
    private $Hora;
    private $Rangohora;
    private $Fechaentrega;




    private $num_productos; //almacena el n�mero de productos almacenados en el carrito
 	private $array_cantidad_prod; //almacena la cantidad comprada para cada producto	
	public $total_compra; //almacena el monto total de la compra
	public $array_id_prod; //almacena los identificadores de los productos comprados
	public $array_nombre_prod; //almacena los nombres de los productos comprados
	public $array_precio_prod; //almacena los precios de los productos comprados
    
    /*public function __construct($Numero, $Metdepago, $Fecha, $Hora, $Rangohora, $Fechaentrega){
        $this -> Numero=$Numero;
        $this -> Metdepago=$Metdepago;
        $this -> Fecha=$Fecha;
        $this -> Hora=$Hora;
        $this -> Rangohora=$Rangohora;
        $this -> Fechaentrega=$Fechaentrega;
    }*/

    function __construct(){
        $this->num_productos=0; //cantidad de productos
     $this->array_id_prod=array(); //id de los productos elegidos
     $this->array_nombre_prod=array(); //nombre de los productos elegidos
     $this->array_precio_prod=array(); //precio de los productos elegidos
     $this->array_cantidad_prod=array(); //cantidad comprada por producto
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



function ret_val(){
    return $this->total_compra;
}


//Introduce un producto en el carrito. Recibe los datos del producto
	//Se encarga de introducir los datos en los arrays del objeto carrito
	//luego aumenta en 1 el n�mero de productos
	function introduce_producto($id_prod,$nombre_prod,$precio_prod){
		// Verifico que ya exista el producto en el vector
		// En caso de existir incremento la cantidad en 1
		// De lo contrario agrego un item al array
		$pos=array_search($id_prod,$this->array_id_prod);      
		// Si no existe devuelve FALSE y lo convierto en -1 			      
		if (is_bool($pos))
			$pos=-1;
	  	// El siguiente if agrega el producto al carrito (entra solamente si el producto no exist�a ya)
      	if ($pos<0)
      	{
			$this->array_id_prod[$this->num_productos]=$id_prod;
			$this->array_nombre_prod[$this->num_productos]=$nombre_prod;
			$this->array_precio_prod[$this->num_productos]=$precio_prod;
			$this->array_cantidad_prod[$this->num_productos]=1;
			$this->num_productos++;			
		}
		//si ya exist�a el producto en el carrito le aumenta la cantidad en 1
		else {
			$this->array_cantidad_prod[$pos]++;
			$this->array_precio_prod[$pos]+=$precio_prod;
		}					
	} //cierro la fun






    //Muestra el contenido del carrito de la compra
	//adem�s pone los enlaces para eliminar un producto del carrito
	function imprime_carrito(){
		$suma = 0;
		echo '<table border=1 cellpadding="4">
			  <tr>
			  	<td><b>Cant</b></td>
				<td><b>Nombre producto</b></td>
				<td><b>Precio</b></td>
				<td>&nbsp;</td>
			  </tr>';
		for ($i=0;$i<$this->num_productos;$i++){
			//El siguiente if controla que el producto no haya sido eliminado del carrito
			if($this->array_id_prod[$i]!=0){
				echo '<tr>';
				echo "<td>" . $this->array_cantidad_prod[$i] . "</td>";				
				echo "<td>" . $this->array_nombre_prod[$i] . "</td>";
				echo "<td>" . $this->array_precio_prod[$i] . "</td>";
				echo "<td><a href='controlador/eliminar_producto.php?linea=$i'><img src='delete.png' 
				width='20' height='20'></td>";
				echo '</tr>';
				$suma += $this->array_precio_prod[$i];
			}
		}
		//muestro el total
		echo "<tr><td colspan='2'><b>TOTAL:</b></td><td> <b>$suma</b></td><td>&nbsp;
		</td></tr>";
		//total m�s IVA
		echo "<tr><td colspan='2'><b>IVA INCLUIDO(22%):</b></td><td> <b>" . $suma * 1.22 . 
		"</b></td><td>&nbsp;</td></tr>";
		echo "</table>";

	 	$this->total_compra = $suma * 1.22;
	} //cierro la funci�n imprime_carrito


    //Elimina un producto del carrito. recibe la linea del carrito que debe eliminar
	//no lo elimina realmente (ya que si no habr�a que recolocar todos los �ndices
	//de las variables de sesi�n para que fueran correlativos),
	// simplemente pone a cero el id, para saber que esta en estado retirado

	function elimina_producto($linea){
		// Puedo eliminar toda la fila
		
    	//$this->array_id_prod[$linea]=0;	$this->array_cantidad_prod[$linea]--;
   
        // O puedo restar un art�culo en caso de que en la linea haya m�s de uno
  
    	if ($this->array_cantidad_prod[$linea] > 1)
    	{
    		$unitario=$this->array_precio_prod[$linea] / $this->array_cantidad_prod[$linea];
    		$this->array_cantidad_prod[$linea]--;
			$this->array_precio_prod[$linea]=$unitario * $this->array_cantidad_prod[$linea];
		
			$this->total_compra -= $unitario;   
    	}
    	//entra al else en caso de que haya solamente 1 unidad del art�culo en el carrito
		else
		{
			$this->total_compra -= $this->array_precio_prod[$linea];
	    	$this->array_id_prod[$linea]=0;  
		} 
	} //cierro la funci�n elimina_producto
} //cierro la clase carrito

//inicio la sesi�n

//si no esta creado el objeto carrito en la sesi�n, lo creo




?>