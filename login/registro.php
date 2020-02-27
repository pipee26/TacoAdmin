<?php

    require "init.php";
    // $nombre = $_GET["nombre"];
    // $nombreusuario=$_GET["nombreusuario"];
    // $password=$_GET["password"];
    // $direc1=$_GET["direc1"];
    // $direc2=$_GET["direc2"];
    // $direc3=$_GET["direc3"];
    // $direc4=$_GET["direc4"];

    $nombre = $_POST["nombre"];
    $telefono=$_POST["telefono"];
    $nombreusuario=$_POST["nombreusuario"];
    $password=$_POST["password"];
    $direc1=$_POST["direc1"];
    $direc2=$_POST["direc2"];
    $direc3=$_POST["direc3"];
    $direc4=$_POST["direc4"];

    //login_info es la BD
    $sql = "select * from usuario where nombreusuario = '$nombreusuario'";
    $sql3 = "select * from usuario where telefono = '$telefono'";
    //$result = mysqli_query($con,$sql);
    $result=mysqli_query($conexion,$sql);
    $result2=mysqli_query($conexion,$sql3);

    if (mysqli_num_rows($result)>O) {
        
        //$status = "exist";
        //$response = array();
        //$response["succes"] = false;
        $response["succes"] = 'usuario';
    }
    elseif (mysqli_num_rows($result2)>O) {
        $response["succes"] = 'telefono'; 
        //$response ["alto"]= "exist";
    }

    else{
        
        $sql2="INSERT INTO usuario ( nombre, telefono, nombreusuario, password, direc1, direc2, direc3, direc4) 
        VALUES( '$nombre','$telefono','$nombreusuario' , '$password', '$direc1', '$direc2', '$direc3', '$direc4'); "; 
          
        if (mysqli_query($conexion,$sql2)) {
               //$status = "ok";
               //$response["succes"] = true;
               $response["succes"] = 'registrado';
            } 
           else {
               //$status = "error";
               //$response = array();
               $response["succes"] = 'error'; 
            }    
    }
    
    //echo json_encode(array("Response" =>$status));
    echo json_encode($response);

    mysqli_close($conexion);

?>