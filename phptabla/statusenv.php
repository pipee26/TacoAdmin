<?php
    
    $id = $_REQUEST['id_pedido'];

	require '../conexion.php';
   

	$sql = "UPDATE pedidos SET status='Enviado' WHERE id_pedido = '$id'";
	$resultado = $conexion->query($sql);
	header("Location:../tablapedidos.php");
	
?>