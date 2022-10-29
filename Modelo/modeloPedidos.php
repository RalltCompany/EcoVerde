 <?php
Class Pedidos{

    private $Numero;
    private $Metdepago;
    private $Fecha;
    private $Hora;
    private $Rangohora;
    private $Fechaentrega;
	private $cliente;

	private $db;
	private $pedidos;

    private $num_productos; //almacena el n�mero de productos almacenados en el carrito
 	private $array_cantidad_prod; //almacena la cantidad comprada para cada producto	
	public $total_compra; //almacena el monto total de la compra
	public $total_cantidad_prod;
	public $array_id_prod; //almacena los identificadores de los productos comprados
	public $array_nombre_prod; //almacena los nombres de los productos comprados
	public $array_precio_prod; //almacena los precios de los productos comprados
    public $iva;
	public $subtotal;
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
	 $this->cliente=array();
	 $this->db = Conectar::conexion();
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




function getSubtotal(){
    return $this->subtotal;
}

function getIva(){
    return $this->iva;
}

function getNum(){
    return $this->num_productos;
}

function getCantidadProd(){
    $cantProd=count($this->array_cantidad_prod);
	return $cantProd;
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


	function ret_cantidadProd($id_prod){
		
		$pos=array_search($id_prod,$this->array_id_prod); 

		
		return $this->array_cantidad_prod[$pos];
	
	}


	function insertPedidos($CIu, $FechaHora, $Metodo, $HoraPref, $DireccionPe, $total ){
		$Estado="Pendiente";
		
		$sql="INSERT INTO pedido(numero, ciu, fechayHora, fechaentrega, metodoPago, horaPref, estado, Nombre_Destinatario, direccionpe, total) VALUES (NULL, '$CIu', '$FechaHora', NULL, '$Metodo', '$HoraPref','$Estado', NULL, '$DireccionPe', '$total')";

		if($this->db->query($sql)){
			return true;
		}else{
			return false;
		}
	}


	function RechazarPedido($Numero){
		
		
		$sql="UPDATE pedido SET estado='Rechazado' WHERE numero='$Numero'";

		if($this->db->query($sql)){
			return true;
		}else{
			return false;
		}
	}



	function AceptarPedido($Numero){
		
		
		$sql="UPDATE pedido SET estado='Aceptado' WHERE numero='$Numero'";

		if($this->db->query($sql)){
			return true;
		}else{
			return false;
		}
	}

	function PedidoArmado($Numero, $Direccion){
		
		
		$sql="UPDATE pedido SET estado='Armado', direccionpe='$Direccion' WHERE numero='$Numero'";

		if($this->db->query($sql)){
			return true;
		}else{
			return false;
		}
	}

	function PedidoAEntregar($Numero){
		
		
		$sql="UPDATE pedido SET estado='A entregarse' WHERE numero='$Numero'";

		if($this->db->query($sql)){
			return true;
		}else{
			return false;
		}
	}

	function PedidoEnRuta($Numero){
		
		
		$sql="UPDATE pedido SET estado='Ruta' WHERE numero='$Numero'";

		if($this->db->query($sql)){
			return true;
		}else{
			return false;
		}
		
	}



	function PedidoEntregado($Numero, $CIR, $Destinatario, $Fecha){
		
		
		$sql="UPDATE pedido SET estado='Entregado', cirepartidor='$CIR', Nombre_destinatario='$Destinatario', fechaentrega='$Fecha' WHERE numero='$Numero'";

		if($this->db->query($sql)){
			return true;
		}else{
			return false;
		}
	}

	//SELECT MAX(numero) FROM pedido WHERE ciu=53235432;


	function getUltimoPedidoInsertado($CI){
		$sql="SELECT MAX(numero) FROM pedido WHERE ciu='$CI'";

		$res = mysqli_query($this->db, $sql);
		$arr = mysqli_fetch_array($res);
		return $arr[0];
	}

	function AlertaProducto($Codigo, $Cantidad){
		$sql="SELECT disponibilidad-$Cantidad from producto WHERE codigo='$Codigo'";

		$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){

				$this->pedidos[]=$filas;
			}

		return $this->pedidos;
	}



	function conformarPedido($NumeroPedido, $productos){
		$ProductosInsertados=0;
		$db=Conectar::conexion();
		
		for ($i=0;$i<$productos;$i++){
			
			
			//El siguiente if controla que el producto no haya sido eliminado del carrito
			if($this->array_id_prod[$i]!=0){
				
				$codigopro=$this->array_id_prod[$i];
				$cantidad=$this->array_cantidad_prod[$i];
				
				$sql="INSERT INTO conforma(numerop, codigopro, cantidad) VALUES ('$NumeroPedido', '$codigopro', '$cantidad')";

				$sql2="UPDATE producto SET disponibilidad= disponibilidad - $cantidad WHERE codigo= '$codigopro'";
				if($db->query($sql) && $db->query($sql2)){
					$ProductosInsertados++;
				}
				
			}
		}

		if($ProductosInsertados==$productos){
			return true;
		}else{
			return false;
		}
	}


    //Muestra el contenido del carrito de la compra
	//adem�s pone los enlaces para eliminar un producto del carrito
	function imprime_carrito(){
		
		$suma = 0;
		echo '<thead>
			  <tr>
			  <th>Nombre del producto</th>
			  
			  <th>Cantidad [KG]</th>
			  <th>Total</th>
			  <th>Restar KG</th>
			  <th>Agregar KG</th>
			  </tr></thead><tbody>';
		for ($i=0;$i<$this->num_productos;$i++){
			//El siguiente if controla que el producto no haya sido eliminado del carrito
			if($this->array_id_prod[$i]!=0){
				echo '<tr>';
				echo "<td class='name-pr' data-label='Nombre'>" . $this->array_nombre_prod[$i] . "</td>";				
				
				echo "<td class='quantity-box' data-label='Cantidad'><input type='number' size='4' readonly value=". $this->array_cantidad_prod[$i] . " min='0' step='1' class='c-input-text qty text'></td>";
				echo "<td class='price-pr' data-label='Precio del producto'>$ " . $this->array_precio_prod[$i]. "</td>";
				echo "<td data-label='Sacar KG'><a href='eliminar_carrito.php?linea=$i'><i class='fa-solid fa-minus'></i></td>";
				echo "<td data-label='Sumar KG'><a href='mete_productoCarrito.php?codigo=".$this->array_id_prod[$i]."&nombre=".$this->array_nombre_prod[$i]."&precio=".$this->array_precio_prod[$i]/$this->array_cantidad_prod[$i]."&Cantidad=".($this->array_cantidad_prod[$i] + 1)."'><i class='fa-regular fa-plus'></i></td>";
				echo '</tr>';
				$suma += $this->array_precio_prod[$i];

				$this->total_cantidad_prod+=1;
			}
		}
		//muestro el total
		echo "<tr><td colspan='1'><b>TOTAL:</b>  $<b>$suma</b></td></tr>";
		//total m�s IVA
		echo "<tr><td colspan='1'><b>IVA INCLUIDO(22%):</b> $<b>" . $suma * 1.22 . "</b></td></tr>";
		echo "</tbody>";
		$this->subtotal= $suma;
	 	$this->total_compra = $suma * 1.22;
		$this->iva = $suma * 0.22;

		


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
	}
	
	
	
	
	function imprime_factura(){
		
		
		
		for ($i=0;$i<$this->num_productos;$i++){
			//El siguiente if controla que el producto no haya sido eliminado del carrito
			if($this->array_id_prod[$i]!=0){
				echo '<div class="media mb-2 border-bottom">';
				echo "<div class='media-body'> <a href='detail.html'>" . $this->array_nombre_prod[$i] . "</a>";				
				echo "<div class='small text-muted factu'><span class='mx-2'></span>ID: ".$this->array_id_prod[$i]."<span class='mx-2'>|</span>Precio: $".$this->array_precio_prod[$i]/$this->array_cantidad_prod[$i]." [KG]<span class='mx-2'>|</span>Cantidad: ".$this->array_cantidad_prod[$i]."<span class='mx-2'>|</span>Total: $".$this->array_precio_prod[$i]."</div>";
				echo "</div>";
				echo "</div>";
				
		
			}
		}
		//muestro el total
		


	} //
	
	
	
	function pedidosCliente($Cedula){

		$sql="SELECT * FROM pedido WHERE ciu='$Cedula'";

		$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){

				$this->pedidos[]=$filas;
			}

			return $this->pedidos;
	}
	
	
	public  function getPedidosaEntregar(){
			
		$sql = "SELECT * FROM pedido WHERE estado='A entregarse'";
		$consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->pedidos[]=$filas;
        }
        return $this->pedidos;
	
	}

	public  function getPedidos(){
			
		$sql = "SELECT * FROM pedido";
		$consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->pedidos[]=$filas;
        }
        return $this->pedidos;
	
	}

	
	
	public  function getPedidosAdmin($Estado){
			
		$sql = "SELECT * FROM pedido WHERE estado='$Estado' ORDER BY numero";
		$consulta = $this->db->query($sql);
		$total_registros = mysqli_num_rows($consulta);
		

		if ($total_registros > 0) {				
			$cant_reg_paginas = 10;
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
			
			$sql2 = "SELECT * FROM pedido WHERE estado='$Estado' ORDER BY numero ASC LIMIT ".$inicio."," . $cant_reg_paginas;
			$rs = $this->db->query($sql2); 
			
			
			
			while ($filas=$rs->fetch_assoc()) {
				
				$this->pedidos[]=$filas;
			}

			return $this->pedidos;
	}
			
		}
	
	
	
		public function mostrarPaginado($Lugar, $Estado){
            $sql = "SELECT * FROM pedido WHERE estado='$Estado' ORDER BY numero";
			$consulta = $this->db->query($sql);
            $total_registros = mysqli_num_rows($consulta);

			if($Lugar=="AceptarORechazar"){
            $url="../Controlador/controladorPedidoAdmin.php";
			}else if($Lugar=="GestionarPedidos"){
				$url="../Controlador/controladorGestionarPedidos.php";
			}else if($Lugar=="CambiarPedidos"){
				$url="../Controlador/controladorCambiarPedidos.php";
			}else if($Lugar=="Aentrega"){
				$url="../Controlador/controladorReparto.php";
			}
            echo '<div class="price-box-slider cent pagAdmin"><p>';
               
            if ($total_registros > 0) {				
				$cant_reg_paginas = 10;
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
	
	
	 public  function getProductosInspeccionar($Numero){
			
		$sql = "SELECT p.*, d.codigo, d.nombre, c.cantidad FROM pedido AS p
		LEFT JOIN conforma AS c ON c.numerop = p.numero
		LEFT JOIN producto AS d ON c.codigopro = d.codigo
		WHERE p.numero='$Numero'";
		$consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->pedidos[]=$filas;
        }
        return $this->pedidos;
	
	}


	public  function getPedidoInspeccionar($Numero){
			
		$sql = "SELECT u.*, p.* FROM usuario AS u
		INNER JOIN pedido AS p
		ON u.ci=p.ciu WHERE u.ci=p.ciu AND p.numero= '$Numero'";
		$consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->pedidos[]=$filas;
        }
        return $this->pedidos;
	
	}

	public  function getPedidosEntrega(){
			
		$sql = "SELECT u.*, p.* FROM usuario AS u
		INNER JOIN pedido AS p
		ON u.ci=p.ciu WHERE u.ci=p.ciu AND p.estado='A entregarse'";
		$consulta = $this->db->query($sql);
        
        while($filas=$consulta->fetch_assoc()){
            $this->pedidos[]=$filas;
        }
        return $this->pedidos;
	
	}
	
	

	public  function getPedidosRepartidor(){
			
		$sql = "SELECT * FROM pedido WHERE estado='A entregarse' ORDER BY numero";
		$consulta = $this->db->query($sql);
		$total_registros = mysqli_num_rows($consulta);
		

		if ($total_registros > 0) {				
			$cant_reg_paginas = 10;
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
			
			$sql2 = "SELECT u.*, p.* FROM usuario AS u
			INNER JOIN pedido AS p
			ON u.ci=p.ciu WHERE u.ci=p.ciu AND p.estado='A entregarse' ORDER BY p.numero ASC LIMIT ".$inicio."," . $cant_reg_paginas;
			$rs = $this->db->query($sql2); 
			
			
			
			while ($filas=$rs->fetch_assoc()) {
				
				$this->pedidos[]=$filas;
			}

			return $this->pedidos;
	}
			
		}
		
		public function Consulta2(){
			$sql = "SELECT ciu, COUNT(*) AS p FROM pedido GROUP BY ciu ORDER BY p DESC;";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				$this->pedidos[]=$filas;
			}
			return $this->pedidos;
		}

		public function Consulta3(){
			$sql = "SELECT horaPref, COUNT(*) AS p FROM pedido GROUP BY horaPref;";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				$this->pedidos[]=$filas;
			}
			return $this->pedidos;
		}

		public function Consulta4(){
			$sql = "SELECT ciu, MAX(total) AS t FROM pedido;";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				$this->pedidos[]=$filas;
			}
			return $this->pedidos;
		}

		public function Consulta5(){
			$sql = "SELECT * FROM pedido WHERE MONTH(fechayhora) = MONTH(DATE_ADD(CURDATE(),INTERVAL -1 MONTH)) AND total > 1000;";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				$this->pedidos[]=$filas;
			}
			return $this->pedidos;
		}

		public function Consulta6(){
			$sql = "SELECT YEAR(fechayhora) AS año, SUM(total) AS monto FROM pedido GROUP BY año;";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				$this->pedidos[]=$filas;
			}
			return $this->pedidos;
		}

		public function Consulta7($f){
			$sql = "SELECT SUM(cantidad) AS cantidad, d.nombre, MONTH(fechayhora)
			FROM conforma AS c LEFT JOIN producto AS d ON c.codigopro = d.codigo 
			LEFT JOIN pedido AS p ON c.numerop = p.numero WHERE MONTH(fechayhora)='$f'
			GROUP BY d.nombre ORDER BY cantidad DESC LIMIT 1";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				$this->pedidos[]=$filas;
			}
			return $this->pedidos;
		}

		public function Consulta8($f){
			$sql = "SELECT SUM(cantidad) AS cantidad, d.nombre, MONTH(fechayhora)
			FROM conforma AS c LEFT JOIN producto AS d ON c.codigopro = d.codigo 
			LEFT JOIN pedido AS p ON c.numerop = p.numero WHERE MONTH(fechayhora)='$f'
			GROUP BY d.nombre ORDER BY cantidad ASC LIMIT 1";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				$this->pedidos[]=$filas;
			}
			return $this->pedidos;
		}

		public function Consulta9($f){
			$sql = "SELECT COUNT(*) AS pedentregados, u.nombre FROM pedido AS p
			LEFT JOIN usuario AS u ON p.cirepartidor=u.ci 
			WHERE p.estado = 'Entregado' AND MONTH(fechayhora) ='$f' GROUP BY p.cirepartidor";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				$this->pedidos[]=$filas;
			}
			return $this->pedidos;
		}

		public function Consulta10(){
			$sql = "SELECT MONTH(fechayhora) AS mes, COUNT(*) AS pedentregados FROM pedido GROUP BY MONTH(fechayhora)";
			$consulta = $this->db->query($sql);
			
			while($filas=$consulta->fetch_assoc()){
				$this->pedidos[]=$filas;
			}
			return $this->pedidos;
		}
	
	
		
	


	
	//cierro la funci�n elimina_producto
} //cierro la clase carrito

//inicio la sesi�n
session_start();
//si no esta creado el objeto carrito en la sesi�n, lo creo




?>