<?php
	include("../Modelo/modeloPedidos.php");
	$total_fact=$_SESSION["ocarrito"]->ret_val();
	unset($_SESSION["ocarrito"]);
	
?>

<script language="javascript">
   alert("Total de su factura: <?php echo $total_fact; ?>\n Gracias por su compra!");
   window.location.href = '../index.php'; 
</script>
