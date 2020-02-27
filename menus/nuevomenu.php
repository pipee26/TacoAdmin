<?php
session_start();
if ($_SESSION['nivel'] != 3){
  header('Location:logeo.html');
}
?>

<?PHP
require '../conexion.php';

$json['img']=array();

	if(isset($_POST["btn"])){
		
		$ruta="imagenes";
		$archivo=$_FILES['urlimagen']['tmp_name'];
        $nombreArchivo=$_FILES['urlimagen']['name'];
		move_uploaded_file($archivo,$ruta."/".$nombreArchivo);
		$ruta=$ruta."/".$nombreArchivo;
        $nombrem=$_POST['nombrem'];
        $descripcionm=$_POST['descripcionm'];
        $status='No';
		$sql="INSERT INTO menus(nombrem,descripcionm,urlimagen,status) VALUES (?,?,?,?)";
		$stm=$conexion->prepare($sql);
		
		$stm->bind_param('ssss',$nombrem,$descripcionm,$ruta,$status);
		$stm->execute();
		mysqli_close($conexion);
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/js/bootstrap.min.js">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="stylemenu.css">
    <title>Menu</title>
</head>

<body>
    <div id="logout">
        <a href="tablamenu.php"><img src="../img/tabla.png" id="imgver"></a>
    </div>
    <h4>Nuevo menu</h4>

    <div id="sidebar">
        <div class="toggle-btn">
            <span>&#9776;</span>
        </div>
        <li>
            <img src="../img/iconodos.png" id="logoside">
        </li>
        <div id="lista-btn">
            <br><br><br>

            <a href="../main.php" id="a1">Inicio</a>
            <br><br><br>

            <a href="#" id="a2">Menus</a>
            <br><br><br>

            <a href="../platillos/nuevoplatillo.php" id="a3">Platillos</a>
            <br><br><br>
            
            <a href="../perfil/perfil.php" id="a4">Perfil</a>

        </div>

    </div>
    <form method='POST' action="nuevomenu.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm-6" id="divlabelmenu-nombre">
                <label id="labelnombrecontacto">Ingrese el nombre del nuevo menu:</label>
                <input type="text" class="form-control col-md-10" id="nombreimagen" name="nombrem" required>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-5" id="divlabelmenu-desc">
                <label for="exampleFormControlTextarea1">Descripcion del menu:</label>
                <textarea class="form-control" id="desc" rows="5" name="descripcionm" required></textarea>
            </div>
        </div>
        <div class="input-group col-sm-3 mb-3" id="divlabelmenu-img">
            <div class="form-group">
                <label for="exampleFormControlFile1" id="labelseleccionimagen">Seleccione Imagen del menu:</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="urlimagen" required>
            </div>
        </div>
        <div id="btnsubirmenu">
            <button type="submit" class="btn btn-success" name="btn"> Agregar </button>
        </div>
    </form>
   

    <script src="../main.js"></script>
</body>

</html>