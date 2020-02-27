<?php
$conexion = new mysqli("localhost", "root", "pass", "prueba01");
    if ($conexion -> connect_error)
    die("Error en la conexion" . $conexion -> connect_error);
    else
    echo "";
?>