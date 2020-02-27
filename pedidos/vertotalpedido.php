<?PHP
$hostname = "localhost";
$database = "prueba01";
$username = "root";
$password = "seluger1";

$json=array();

	//if(isset($_GET["tipo"])){
        $comprador=$_POST["comprador"];
        $total=0;
				
		$conexion = mysqli_connect($hostname, $username, $password, $database);
		//$consulta="select * from pedidos where comprador='{$comprador}'";
        $consulta="select * from carrito where compradorpc='{$comprador}'";
        //$consulta="select * from pedidos";
        $resultado=mysqli_query($conexion,$consulta);
        
        if (mysqli_num_rows($resultado)<=0) {
            $response["total"]=$total;
        }
        else {
            while($registro=mysqli_fetch_array($resultado)){
                //$result["totalpc"]=
                $total +=$registro['totalpc'];
                $response["total"]=$total;
            }
        }
		
        mysqli_close($conexion);
        //echo json_encode($json);
		echo json_encode($response);

?>