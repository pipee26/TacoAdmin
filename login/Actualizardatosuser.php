<?php

    require "init.php";

    $id_user = $_POST["id_user"];
    //$nombre = $_POST["nombre"];
    //$nombreusuario=$_POST["nombreusuario"];
    //$password=$_POST["password"];
    $direc1=$_POST["direc1"];
    $direc2=$_POST["direc2"];
    $direc3=$_POST["direc3"];
    $direc4=$_POST["direc4"];

    $sql2 = " UPDATE usuario SET direc1='$direc1', direc2='$direc2', direc3='$direc3', direc4='$direc4' WHERE id_user = '$id_user' ";
    //$sql2 = " UPDATE usuario SET nombre='$nombre', nombreusuario='$nombreusuario', password='$password', direc1='$direc1', direc2='$direc2', direc3='$direc3', direc4='$direc4' WHERE id_user = '$id_user' ";
 
    //$sql = "UPDATE empresas SET  tipo='$tipo', nombre='$nombre', nombreusuario='$nombreusuario', password='$password', direccion='$direccion', WHERE id = '$id'";

    // $sql2="INSERT INTO usuario ( nombre, nombreusuario, password, direc1, direc2, direc3, direc4) 
    // VALUES( '$nombre','$nombreusuario' , '$password', '$direc1', '$direc2', '$direc3', '$direc4'); "; 
          
    if (mysqli_query($conexion,$sql2)) {
        $response["succes"] = true;
        } 
    else {
        $response["succes"] = false; 
        }
    
    echo json_encode($response);

    mysqli_close($conexion);

?> 