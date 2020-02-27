<?PHP
require '../conexion.php';


		$consulta="select * from menus where status='Si'";
		$resultado=mysqli_query($conexion,$consulta);
		
		while($registro=mysqli_fetch_array($resultado)){
			$result["idmenu"]=$registro['id_menus'];
			$result["nombre"]=$registro['nombrem'];
			$result["descripcion"]=$registro['descripcionm'];
			$result["ruta"]=$registro['urlimagen'];
			$json['menus'][]=$result;
			//echo $registro['id'].' - '.$registro['nombre'].'<br/>';
		}
		mysqli_close($conexion);
		echo json_encode($json);
		$json=array();
?>
