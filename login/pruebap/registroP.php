<?php

    require "initi.php";

    $nombre = $_POST["nombre"];
    $nombreusuario=$_POST["nombreusuario"];
    $password=$_POST["password"];
    $direc1=$_POST["direc1"];
    $direc2=$_POST["direc2"];
    $direc3=$_POST["direc3"];
    $direc4=$_POST["direc4"];

    //login_info es la BD
    $sql = "select * from usuario where nombreusuario = '$nombreusuario'";
    //$result = mysqli_query($con,$sql);
    $result=mysqli_query($conexion,$sql);

    if (mysqli_num_rows($result)>0) {
        
        $status = "exist";
        //$response = array();
        //$response["succes"] = false; 
    }
    else{
        
        $sql2="INSERT INTO usuario ( nombre, nombreusuario, password, direc1, direc2, direc3, direc4) VALUES( '$nombre','$nombreusuario' , '$password', '$direc1', '$direc2', '$direc3', '$direc4'); "; 
          
        if (mysqli_query($conexion,$sql2)) {
               $status = "ok";
               //$response["succes"] = true;
            } 
           else {
               $status = "error";
               //$response = array();
               //$response["succes"] = false; 
            }    
    }
    
    echo json_encode(array("Response" =>$status));
    //echo json_encode($response);

    mysqli_close($conexion);

?>