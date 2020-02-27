<?php
session_start();
require('conexion.php');
$usuario=$_POST['usuario'];
$pass=$_POST['pass'];
$sql ="SELECT * FROM admin WHERE usuario='$usuario' AND pass='$pass'";

				
$query = mysqli_query($conexion,$sql);
$fila = mysqli_fetch_assoc($query);

 $encontrados = mysqli_num_rows($query);

 if ($encontrados >=1){
 	 $_SESSION['usuario'] = $fila['usuario'];
 	 $_SESSION['pass'] = $fila['pass'];
 	 $_SESSION['nivel'] = $fila['nivel'];
 	    if ($fila['nivel'] == 3){
		    header('Location:main.php');
		 }
     }else{
	
 	header('Location:logeo.html');
 }
?>