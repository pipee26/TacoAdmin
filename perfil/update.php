<?PHP
require '../conexion.php';

$json['img']=array();

	if(isset($_POST["btn"])){
        $usuario=$_POST['usuario'];
        $pass=$_POST['pass'];
		
		$sql="UPDATE admin SET usuario='$usuario', pass='$pass' WHERE id='1'";
        //$stm=$conexion->prepare($sql);
        $resultado=$conexion->query($sql);
        
        header("Location:perfil.php");
		//$stm->bind_param('ss',$mesimg,$ruta);
		// $stm->execute();
		//mysqli_close($conexion);
		
	}
?>