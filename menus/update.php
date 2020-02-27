<?php
	$id = $_REQUEST['id_menus'];
	require '../conexion.php';

	$ruta="imagenes";
	$archivo=$_FILES['urlimagen']['tmp_name'];
		
	$nombreArchivo=$_FILES['urlimagen']['name'];
		
	move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
    $ruta=$ruta."/".$nombreArchivo;
    $nombre = $_POST['nombrem'];
    $descripcion = $_POST['descripcionm'];
	
	$sql = "UPDATE menus SET  nombrem='$nombre', descripcionm='$descripcion', urlimagen='$ruta' WHERE id_menus = '$id'";
	$resultado = $conexion->query($sql);
	header('Location:tablamenu.php');
	
?>