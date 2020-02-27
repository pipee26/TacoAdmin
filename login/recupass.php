<?php
    //$con = mysqli_connect("localhost", "root", "seluger1", "usuarios");
    require "init.php";

    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    
    $statement = mysqli_prepare($conexion, "SELECT * FROM usuario WHERE nombre = ? AND telefono = ?");
    mysqli_stmt_bind_param($statement, "ss", $nombre, $telefono);
    mysqli_stmt_execute($statement);
    
    mysqli_stmt_store_result($statement);
    //mysqli_stmt_bind_result($statement,$password);
    mysqli_stmt_bind_result($statement, $id_user, $nombre,$telefono, $nombreusuario, $password, $direc1, $direc2, $direc3, $direc4);
    
    $response = array();
    $response["succes"] = false;  
    
    while(mysqli_stmt_fetch($statement)){
	    $response["succes"] = true;  
        //$response["nombre"] = $nombre;
        //$response["telefono"]=$telefono;
        $response["nombreusuario"] = $nombreusuario;
        $response["password"] = $password;
        //$response["direc1"] = $direc1;
        //$response["direc2"] = $direc2;
        //$response["direc3"] = $direc3;
        //$response["direc4"] = $direc4;
    }
    
    echo json_encode($response);