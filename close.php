<?php

require('conexion.php');

$sql="UPDATE establecimiento SET estatus='Cerrado' WHERE id_establecimiento='1'";

$resultado = $conexion->query($sql);

header('Location:tablapedidos.php');

?>