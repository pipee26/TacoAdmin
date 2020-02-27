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
        $nombre=$_POST['nombrep'];
        $descripcionp=$_POST['descripcionp'];
        $tipo=$_POST['tipo'];
        $precio=$_POST['preciop'];
	   
		
		$sql="INSERT INTO platillosmenus(nombrep,descripcionp,preciop,tipo) VALUES ('$nombre','$descripcionp','$precio','$tipo')";
		$stm=$conexion->prepare($sql);
		
		//$stm->bind_param('ss',$mesimg,$ruta);
		$stm->execute();
		//mysqli_close($conexion);
		
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

    <link rel="stylesheet" href="styleplatillo.css">
    <title>Platillos</title>
</head>

<body>
    <!-- <div id="logout">
        <a href="tablamenu.php"><img src="../img/tabla.png" id="imgver"></a>
    </div> -->
    <h4>Nuevo platillo</h4>

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

            <a href="../menus/nuevomenu.php" id="a2">Menus</a>
            <br><br><br>

            <a href="../platillos/nuevoplatillo.php" id="a3">Platillos</a>
            <br><br><br>
            <a href="../perfil/perfil.php" id="a4">Perfil</a>

        </div>

    </div>
    <form method='POST' action="nuevoplatillo.php" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3" id="divlabelplatillo-platillo">
                <label id="labelnombrecurso">Ingrese nombre de platillo:</label>
                <input type="text" class="form-control" id="nombrecurso" name="nombrep" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" id="divlabelplatillo-precio">
                <label id="labelnombrecurso">Ingrese la descripcion del platillo:</label>
                <input type="text" class="form-control" id="nombrecurso" name="descripcionp" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" id="divlabelplatillo-precio">
                <label id="labelnombrecurso">Ingrese el precio:</label>
                <input type="text" class="form-control" id="nombrecurso" name="preciop" required>
            </div>
        </div>
        <div class="form-group" id="divselectipo">
            <label for="exampleFormControlSelect1">Seleccione el menu al que pertenece:</label>
            <select class="form-control col-md-2" id="selecttipo" name="tipo">
                <?php 
                    require_once('../conexion.php');
                    $consul="SELECT * FROM menus";
                    $res=mysqli_query($conexion,$consul);
                    while($row = mysqli_fetch_array($res)){?>
                <option>
                    <?php echo $row['nombrem']?>
                </option>
                <?php } ?>
            </select>
        </div>
        <div id="ae">
			<button type="submit" class="btn btn-success" name="btn" id="btnagregardatos"> Agregar </button>
		</div>
    </form>
    <table class="table table-success col-md-8" id="tablaplatillos">
            <thead>
                <tr>
    
                    <th scope="col">
                        <center>MENU</center>
                    </th>
                    <th scope="col">
                        <center>NOMBRE DEL PLATILLO</center>
                    </th>
                    <th scope="col">
                        <center>Descripcion</center>
                    </th>
                    <th scope="col">
                        <center>PRECIO</center>
                    </th>
                    <!-- <th scope="col">
                        <center>STATUS</center>
                    </th> -->
                    <th scope="col" colspan="4">
                        <center>FUNCIONES</center>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?PHP
                            require_once('../conexion.php');
                            $consul="SELECT * FROM platillosmenus";
                            $res=mysqli_query($conexion,$consul);
                            while($row=mysqli_fetch_array($res)){
                        ?>
                <tr>
    
                    <td>
                        <center>
                            <?PHP echo $row['tipo']?>
                        </center>
                    </td>                
                    <td>
                        <center>
                            <?PHP echo $row['nombrep']?>
                        </center>
                    </td>
                    <td>
                        <center>
                            <?PHP echo $row['descripcionp']?>
                        </center>
                    </td>
                    <td>
                        <center>
                            $<?PHP echo $row['preciop']?>.00
                        </center>
                    </td>
                    <td>
                        <a href="editarplatillos.php?id_platillos=<?php echo $row['id_platillos'] ?>" class="button">
                            <center><button type="button" class="btn btn-primary" name="btn">Editar</button></center>
                        </a>
                    </td>
                    <td>
                    <td>
                        <a href="eliminar.php?id_platillos=<?php echo $row['id_platillos'] ?>" class="button">
                            <center><button type="button" class="btn btn-danger" name="btn">Eliminar</button></center>
                        </a>
                    </td>
                </tr>
                <?PHP } ?>
            </tbody>
        </table>

    <script src="../main.js"></script>
</body>

</html>