<?php
    
$hostname = "localhost";
$database = "prueba01";
$username = "root";
$password = "seluger1";
			
    $conexion = mysqli_connect($hostname, $username, $password, $database);
    	    
    $nombrep = $_POST["nombrep"];
    $cantidadpca=$_POST["cantidadpca"];
    $preciop=$_POST["preciop"];
    $comprador=$_POST["comprador"];
    $tipopc=$_POST["tipopc"];
    $totalpc=$preciop*$cantidadpca;
	//$statement = mysqli_prepare($conexion, "INSERT INTO pedidos ( nombrep, preciop, comprador) 
	$statement = mysqli_prepare($conexion, "INSERT INTO carrito ( nombrepc, cantidadpca, preciopc, compradorpc, tipopc, totalpc) 
                                VALUES (?, ?, ?, ?, ?, ?)");
	mysqli_stmt_bind_param($statement, "siissi", $nombrep, $cantidadpca, $preciop, $comprador, $tipopc, $totalpc);
    	mysqli_stmt_execute($statement);
		
    	$response = array();
    	$response["succes"] = true;  

    	echo json_encode($response);
?>