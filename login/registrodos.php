<?php
    
    require "init.php";
    	
	//$name = $_POST["name"];
	//$username = $_POST["username"];
	//$password = $_POST["password"];
    //$age = $_POST["age"];
    
    $nombre = $_POST["nombre"];
    $nombreusuario=$_POST["nombreusuario"];
    $password=$_POST["password"];
    $direc1=$_POST["direc1"];
    $direc2=$_POST["direc2"];
    $direc3=$_POST["direc3"];
    $direc4=$_POST["direc4"];
	
	$statement = mysqli_prepare($conexion, "INSERT INTO usuario ( nombre, nombreusuario, password, direc1, direc2, direc3, direc4) 
                                VALUES (?, ?, ?, ?, ?, ?, ?)");
	mysqli_stmt_bind_param($statement, "sssssss",$nombre, $nombreusuario, $password, $direc1, $direc2,$direc3,$direc4);
    	mysqli_stmt_execute($statement);
		
    	$response = array();
    	$response["succes"] = true;  

    	echo json_encode($response);
?>