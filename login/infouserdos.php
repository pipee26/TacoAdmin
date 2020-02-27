<?php
    require "init.php";

    //$nombreusuario=$_GET["nombreusuario"];
    //$password=$_GET["password"];

    $nombreusuario=$_POST["nombreusuario"];
    //$password=$_POST["password"];

    //$sql= "SELECT nombre FROM usuario WHERE nombreusuario = '$nombreusuario' and password = '$password'";
    $sql= "SELECT * FROM usuario WHERE nombreusuario = '$nombreusuario'";

    $result=mysqli_query($conexion,$sql);

    if (!mysqli_num_rows($result)=="o") {
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
        $id_user = $registro['id_user'];
        $nombre = $registro['nombre'];
        $telefono=$registro['telefono'];
        $nombreusuario = $registro['nombreusuario'];
        $password = $registro['password'];
        $direc1 = $registro['direc1'];
        $direc2 = $registro['direc2'];
        $direc3 = $registro['direc3'];
        $direc4 = $registro['direc4'];
        $status = true;

        echo json_encode(
            array(
                "succes"=>$status,
                "id_user"=>$id_user,
                "nombre"=>$nombre,
                "telefono"=>$telefono,
                "nombreusuario"=>$nombreusuario,
                "password"=>$password,
                "direc1"=>$direc1,
                "direc2"=>$direc2,
                "direc3"=>$direc3,
                "direc4"=>$direc4,
                )
        );

    }

    mysqli_close($conexion);

?>