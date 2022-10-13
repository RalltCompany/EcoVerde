<?php
	include("../Modelo/modeloPedidos.php");
	$total_fact=$_SESSION["ocarrito"]->ret_val();
	unset($_SESSION["ocarrito"]);

	if(isset($_GET['Pedido'])){
		header("location:controladorTienda.php?pagina=1&Pedido");
	}


?>

<script language="javascript">
   alert("Total de su factura: <?php echo $total_fact; ?>\n Gracias por su compra!");
   window.location.href = '../index.php'; 
</script>
