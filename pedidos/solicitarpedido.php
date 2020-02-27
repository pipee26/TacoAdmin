<?php 
$hostname = "localhost";
$database = "prueba01";
$username = "root";
$password = "seluger1";
			
    $conexion = mysqli_connect($hostname, $username, $password, $database);
    	    
    $nombreps = $_POST["nombreps"];
    $preciops=$_POST["preciops"];
    $cantp=$_POST["cantp"];
    $tipopedido=$_POST["tipopedido"];
    $compradors=$_POST["compradors"];
    $usercomp=$_POST["usercomp"];
    $direccionentrega=$_POST["direccionentrega"];
    $pago=$_POST["pago"];
    $status='En Espera';
    $sql="INSERT INTO pedidos(nombrep, cantp, preciop, tipopedido, comprador, usercomp, direccionentrega,pago,status,fecha,fechaver) 
    VALUES ('$nombreps','$cantp','$preciops','$tipopedido','$compradors','$usercomp','$direccionentrega','$pago','$status', now(), now())";		
    
    if ($ejecutar=mysqli_query($conexion,$sql)) {
        $response["succes"] = true;
    }else{
        $response["succes"] = false;
    }
        //$ejecutar=mysqli_query($conexion,$sql);
    /*$fecha= date("Y-m-d H:i:s");
	$statement = mysqli_prepare($conexion, "INSERT INTO pedidos ( nombrep, preciop, tipopedido, comprador, direccionentrega,status,fecha) 
                                VALUES (?, ?, ?, ?, ?, ?, ?)");
	mysqli_stmt_bind_param($statement, "ssssssd",$nombreps, $preciops, $tipopedido, $compradors,$direccionentrega,$status,$fecha);
    	mysqli_stmt_execute($statement);
		
        $response = array();*/
        /* 
if (mysqli_query($conexion,$sql2)) {
               //$status = "ok";
               $response["succes"] = true;
            } 
           else {
               //$status = "error";
               //$response = array();
               $response["succes"] = false; 
            }

    echo json_encode($response);

    mysqli_close($conexion);
*/	
    	//$response["succes"] = true;  

        echo json_encode($response);

        mysqli_close($conexion);
?>