<?php
		include('db_backup_library.php');
		$dbbackup = new db_backup;
		//$dbbackup->connect("localhost","id8206751_camara","camara1952","id8206751_cca");
		$dbbackup->connect("localhost","root","seluger1","prueba01");
		$dbbackup->backup();
		$dbbackup->download();
?>

$conexion = new mysqli("localhost", "id8225382_taco123", "131218taco", "id8225382_tacoymedio");

 $hostname = "localhost";
 $username = "id8225382_taco123";
 $password = "131218taco";
 $database = "id8225382_tacoymedio";