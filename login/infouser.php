<?php
    require "init.php";

    $json=array();

        $nombreusuario=$_GET["nombreusuario"];
        $consulta= "SELECT * FROM usuario WHERE nombreusuario = '$nombreusuario'";
        //$consulta="select * from usuario";
		$resultado=mysqli_query($conexion,$consulta);
            
            while($registro=mysqli_fetch_array($resultado)){
                $result["nombreu"] = $registro['nombre'];
                $result["nombreusuario"] = $registro['nombreusuario'];
                $result["password"] = $registro['password'];
                $result["direc1"] = $registro['direc1'];
                $result["direc2"] = $registro['direc2'];
                $result["direc3"] = $registro['direc3'];
                $result["direc4"] = $registro['direc4'];

                $json['infouser'][]=$result;
            }
		
		mysqli_close($conexion);
		echo json_encode($json);
	
?>
