<?php
session_start();
if ($_SESSION['nivel'] != 3){
  header('Location:logeo.html');
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
    <title>Document</title>
</head>

<body>
    <?php
        $id = $_REQUEST['id_platillos'];           
        include("../conexion.php");           
        $sql = "SELECT * FROM platillosmenus WHERE id_platillos = '$id'";
        $resultado = mysqli_query($conexion,$sql);
        $row =mysqli_fetch_array($resultado);            
    ?>
    <h4>Editar platillo</h4>
    <form method='POST' action="update.php?id_platillos=<?php echo $row['id_platillos'] ?>" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-3" id="divlabelplatillo-platillo">
                <label id="labelnombrecurso">Nombre de platillo:</label>
                <input type="text" class="form-control" value="<?php echo $row['nombrep'] ?>" id="nombrecurso" name="nombrep" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" id="divlabelplatillo-platillo">
                <label id="labelnombrecurso">Descripcion del platillo:</label>
                <input type="text" class="form-control" value="<?php echo $row['descripcionp'] ?>" id="nombrecurso" name="descripcionp" required>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" id="divlabelplatillo-precio">
                <label id="labelnombrecurso">Pprecio:</label>
                <input type="text" class="form-control" value="<?php echo $row['preciop'] ?>" id="nombrecurso" name="preciop" required>
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
            <button type="submit" class="btn btn-success" name="btn" id="btnagregardatos"> Actualizar </button>
            <br><br>
            <a href="nuevoplatillo.php" class="button">
                <center><button type="button" class="btn btn-danger" name="btn">Cancelar</button></center>
            </a>

        </div>
    </form>
</body>

</html>