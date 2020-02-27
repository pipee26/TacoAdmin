<?php
	$id = $_REQUEST['id_platillos'];
	require '../conexion.php';

	$nombre = $_POST['nombrep'];
	$descripcionp=$_POST['descripcionp'];
    $precio = $_POST['preciop'];
    $tipo = $_POST['tipo'];
	
	$sql = "UPDATE platillosmenus SET  nombrep='$nombre',descripcionp='$descripcionp', preciop='$precio', tipo='$tipo' WHERE id_platillos = '$id'";
	$resultado = $conexion->query($sql);
	header('Location:nuevoplatillo.php');
	
?>