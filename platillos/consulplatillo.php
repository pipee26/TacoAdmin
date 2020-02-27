<?PHP
$hostname = "localhost";
$database = "prueba01";
$username = "root";
$password = "seluger1";

// $hostname = "localhost";
// $database = "id8225382_tacoymedio";
// $username = "id8225382_taco123";
// $password = "131218taco";

$json=array();

	//if(isset($_GET["tipo"])){
		$tipo=$_GET["tipo"];
				
		$conexion = mysqli_connect($hostname, $username, $password, $database);

        $consulta="select * from platillosmenus where tipo='{$tipo}'";
        //$consulta="select * from platillosmenus";
		$resultado=mysqli_query($conexion,$consulta);
			
		//if($registro=mysqli_fetch_array($resultado)){
			// $result["id_platillos"]=$registro['id_platillos'];
			// $result["nombrep"]=$registro['nombrep'];
			// $result["preciop"]=$registro['preciop'];
			// $result["tipo"]=$registro['tipo'];
            // $json['platillos'][]=$result;
            
            while($registro=mysqli_fetch_array($resultado)){
                $result["id_platillos"]=$registro['id_platillos'];
				$result["nombre"]=$registro['nombrep'];
				$result["descipcionp"]=$registro['descripcionp'];
			    $result["precio"]=$registro['preciop'];
			    $result["tipo"]=$registro['tipo'];
                $json['platillos'][]=$result;
            }

		//}else{
			//$resultar["id_platillos"]=0;
			//$resultar["nombrep"]='no registra';
			//$resultar["preciop"]='no registra';
			//$result["tipo"]='no registra';
			//$json['Platillos'][]=$resultar;
		//}
		
		mysqli_close($conexion);
		echo json_encode($json);
	//}
	//else{
	//	$resultar["success"]=0;
	//	$resultar["message"]='Ws no Retorna';
	//	$json['usuario'][]=$resultar;
	//	echo json_encode($json);
	//}
?>