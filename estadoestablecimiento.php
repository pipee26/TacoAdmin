<?PHP
require('conexion.php');

$json=array();
	
		$consulta="select * from establecimiento";
        
        $resultado=mysqli_query($conexion,$consulta);
            
            while($registro=mysqli_fetch_array($resultado)){
                $estatus = $registro['estatus'];
                $response["estatus"]=$estatus;
            }
            
            
		
        mysqli_close($conexion);
        
		echo json_encode($response);

?>