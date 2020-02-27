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
        <link rel="stylesheet" href="stylemenu.css">
    <title>Menu</title>
</head>
<body>
    <div id="logout">
        <a href="nuevomenu.php"><img src="../img/regresar.png" id="imgback"></a>
    </div>
    <h4 id="h3tabla">MENUS</h3>
    <BR>
    <BR>
    <table class="table table-success" id="tablacontacto">
        <thead>
            <tr>


                <th scope="col">
                    <center>IMAGEN</center>
                </th>
                <th scope="col">
                    <center>NOMBRE DEL MENU</center>
                </th>
                <th scope="col">
                    <center>DESCRIPCION</center>
                </th>
                <th scope="col">
                    <center>STATUS</center>
                </th>
                <th scope="col" colspan="4">
                    <center>FUNCIONES</center>
                </th>
            </tr>
        </thead>
        <tbody>
            <?PHP
                        require_once('../conexion.php');
                        $consul="SELECT * FROM menus";
                        $res=mysqli_query($conexion,$consul);
                        while($row=mysqli_fetch_array($res)){
                    ?>
            <tr>


                <td>
                    <center>
                        <img src="<?PHP echo $row['urlimagen']?>" width="80px">
                    </center>
                </td>
                <td>
                    <center>
                        <?PHP echo $row['nombrem']?>
                    </center>
                </td>
                <td>
                    <center>
                        <?PHP echo $row['descripcionm']?>
                    </center>
                </td>
                <td>
                    <center>
                        <?PHP echo $row['status']?>
                    </center>
                </td>
                <td>
                    <a href="editarmenu.php?id_menus=<?php echo $row['id_menus'] ?>" class="button">
                        <center><button type="button" class="btn btn-primary" name="btn">Editar</button></center>
                    </a>
                </td>
                <td>
                    <a href="mostrar.php?id_menus=<?php echo $row['id_menus'] ?>" class="button">
                        <center><button type="button" class="btn btn-success" name="btn">Mostrar</button></center>
                    </a>
                </td>
                <td>
                    <a href="ocultar.php?id_menus=<?php echo $row['id_menus'] ?>" class="button">
                        <center><button type="button" class="btn btn-secondary" name="btn">Ocultar</button></center>
                    </a>
                </td>
                <td>
                    <a href="eliminar.php?id_menus=<?php echo $row['id_menus'] ?>" class="button">
                        <center><button type="button" class="btn btn-danger" name="btn">Eliminar</button></center>
                    </a>
                </td>
            </tr>
            <?PHP } ?>
        </tbody>
    </table>
</body>
</html>