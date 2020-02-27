<?php
    
    $id = $_REQUEST['id_pedido'];

	require '../conexion.php';
   
	
	
	
	$sql = "UPDATE pedidos SET status='Terminado' WHERE id_pedido = '$id'";
	$resultado = $conexion->query($sql);
	header("Location:../tablapedidos.php");
	
?>