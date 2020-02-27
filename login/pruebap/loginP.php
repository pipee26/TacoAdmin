<?php
    require "initi.php";

    $nombreusuario=$_POST["nombreusuario"];
    $password=$_POST["password"];

    //$sql= "SELECT nombre FROM usuario WHERE nombreusuario = '$nombreusuario' and password = '$password'";
    $sql= "SELECT * FROM usuario WHERE nombreusuario = '$nombreusuario' and password = '$password'";

    $result=mysqli_query($conexion,$sql);

    //(!mysqli_num_rows($result)==O)
    if (!mysqli_num_rows($result)>0) {
        $status = "failed";
        echo json_encode(array("response"=>$status));

        //$response = array();
        //$response["succes"] = false;

        //$status1 = false;
        //echo json_encode(array("succes"=>$status1));

    } else {
        $registro = mysqli_fetch_assoc($result);
        $nombre = $registro['nombre'];
        $nombreusuario = $registro['nombreusuario'];
        $status = "ok";
        echo json_encode(array("response"=>$status,"nombre"=>$nombre,"nombreusuario"=>$nombreusuario));

        //$response["succes"] = true;  
        //$response["name"] = $nombre;
        //$response["username"] = $nombreusuario;
        //$response["password"] = $password;
        //$response["direc1"] = $direc1;

        /*$registro = mysqli_fetch_assoc($result);
        $nombre = $registro['nombre'];
        $nombreusuario = $registro['nombreusuario'];
        $password = $registro['password'];
        $direc1 = $registro['direc1'];
        $status = true;

        echo json_encode(
            array(
                "succes"=>$status,
                "name"=>$nombre,
                "username"=>$nombreusuario,
                "password"=>$password,
                "direc1"=>$direc1,
                )
        );*/

    }

    mysqli_close($conexion);

?>