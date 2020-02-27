<?PHP
$hostname = "localhost";
$database = "prueba01";
$username = "root";
$password = "seluger1";

$json=array();

	//if(isset($_GET["tipo"])){
		$comprador=$_GET["comprador"];
				
		$conexion = mysqli_connect($hostname, $username, $password, $database);
		//$consulta="select * from pedidos where comprador='{$comprador}'";
        $consulta="select * from carrito where compradorpc='{$comprador}'";
        //$consulta="select * from pedidos";
		$resultado=mysqli_query($conexion,$consulta);
			
		//if($registro=mysqli_fetch_array($resultado)){
			// $result["id_platillos"]=$registro['id_platillos'];
			// $result["nombrep"]=$registro['nombrep'];
			// $result["preciop"]=$registro['preciop'];
			// $result["tipo"]=$registro['tipo'];
            // $json['platillos'][]=$result;
            
            while($registro=mysqli_fetch_array($resultado)){
                $result["id_pedido"]=$registro['id_pedidoc'];
				$result["nombrep"]=$registro['nombrepc'];
				$result["cantidadpca"]=$registro['cantidadpca'];
			    $result["preciop"]=$registro['preciopc'];
				$result["comprador"]=$registro['compradorpc'];
				$result["tipopc"]=$registro['tipopc'];
				$result["totalpc"]=$registro['totalpc'];
                $json['carrito'][]=$result;
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