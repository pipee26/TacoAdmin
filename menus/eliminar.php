<?php
	$id = $_REQUEST['id_menus'];
	require '../conexion.php';
	$sql = "DELETE FROM menus WHERE id_menus = '$id'";
    $resultado = $conexion->query($sql);
    header('Location:tablamenu.php');
	
?>