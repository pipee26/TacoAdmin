<?php
    
    $id = $_REQUEST['id_menus'];

	require '../conexion.php';
   
	
	
	
	$sql = "UPDATE menus SET status='Si' WHERE id_menus = '$id'";
	$resultado = $conexion->query($sql);
	header("Location:tablamenu.php");
	
?>