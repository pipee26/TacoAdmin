<?php
    
$hostname = "localhost";
$database = "prueba01";
$username = "root";
$password = "seluger1";
			
    $conexion = mysqli_connect($hostname, $username, $password, $database);
    	    
    $compradorpc = $_POST["compradorpc"];
    
    //DELETE FROM `carrito` WHERE `id_pedidoc`=17
	$statement = mysqli_prepare($conexion, "DELETE FROM carrito WHERE compradorpc = '$compradorpc'");
	//mysqli_stmt_bind_param($statement, "sss",$nombreps, $preciops, $compradors);
    	mysqli_stmt_execute($statement);
		
    	$response = array();
    	$response["succes"] = true;  

    	echo json_encode($response);
?>