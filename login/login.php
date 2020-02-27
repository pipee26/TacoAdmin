<?php
    require "init.php";

    //$nombreusuario=$_GET["nombreusuario"];
    //$password=$_GET["password"];

    $nombreusuario=$_POST["nombreusuario"];
    $password=$_POST["password"];

    //$sql= "SELECT nombre FROM usuario WHERE nombreusuario = '$nombreusuario' and password = '$password'";
    $sql= "SELECT * FROM usuario WHERE nombreusuario = '$nombreusuario' and password = '$password'";



    $result=mysqli_query($conexion,$sql);

    if (!mysqli_num_rows($result)==O) {
        //$status1 = "failed";
        //echo json_encode(array("response"=>$status1));

        //$response = array();
        //$response["succes"] = false;

        $status1 = false;
        echo json_encode(array("succes"=>$status1));

    } else {
        //$registro = mysqli_fetch_assoc($result);
        //$nombre = $registro['nombre'];
        //$status = "ok";
        //echo json_encode(array("response"=>$status,"nombre"=>$nombre));

        //$response["succes"] = true;  
        //$response["name"] = $nombre;
        //$response["username"] = $nombreusuario;
        //$response["password"] = $password;
        //$response["direc1"] = $direc1;

        $registro = mysqli_fetch_assoc($result);
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
        );

    }

    mysqli_close($conexion);

?>