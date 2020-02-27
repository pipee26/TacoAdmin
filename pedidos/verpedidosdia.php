<?PHP
$hostname = "localhost";
$database = "prueba01";
$username = "root";
$password = "seluger1";

$json=array();

	//if(isset($_GET["tipo"])){
        $usercomp=$_GET["usercomp"];
        //$fechaver=date("Y-m-d");
        //date_default_timezone_set('UTC');
				
		$conexion = mysqli_connect($hostname, $username, $password, $database);
        //$consulta="select * from pedidos where comprador='{$comprador}'";
        //$consulta="select tipopedido,nombrep,preciop,fecha from pedidos where comprador='{$comprador}' && fecha=now()";
        $consulta="select * from pedidos where usercomp='{$usercomp}' && fechaver=CURDATE()";
        //$consulta="select * from pedidos";
		$resultado=mysqli_query($conexion,$consulta);
            
            while($registro=mysqli_fetch_array($resultado)){
                //$result["id_pedido"]=$registro['id_pedidoc'];
				$result["nombrep"]=$registro['nombrep'];
				$result["cantp"]=$registro['cantp'];
			    $result["preciop"]=$registro['preciop'];
				//$result["comprador"]=$registro['compradorpc'];
				$result["tipopedido"]=$registro['tipopedido'];
				//$result["totalpc"]=$registro['totalpc'];
                $json['vercompra'][]=$result;
            }

		mysqli_close($conexion);
		echo json_encode($json);
	
?>