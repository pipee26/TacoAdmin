<?php

require('conexion.php');

$sql="UPDATE establecimiento SET estatus='Abierto' WHERE id_establecimiento='1'";

$resultado = $conexion->query($sql);

header('Location:tablapedidos.php');

?>