<?php
	$id = $_REQUEST['id_platillos'];
	require '../conexion.php';
	$sql = "DELETE FROM platillosmenus WHERE id_platillos = '$id'";
    $resultado = $conexion->query($sql);
    header('Location:nuevoplatillo.php');
	
?>