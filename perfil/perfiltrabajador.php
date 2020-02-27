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
    <link rel="stylesheet" href="styleperfil.css">
    <title>Perfil</title>
</head>

<body>

    <div id="logout">
        <a href="perfil.php"><img src="../img/regresar.png" id="imgback"></a>
    </div>

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
    <br>
    <h4 id="h4perfil">Actualizar datos de trabajdor</h4>
    <br><br>

    <form method='POST' action="updatetrabajador.php" enctype="multipart/form-data">

        <div class="row">
            <div class="col-md-3" id="divperfil">
                <input name="usuario" type="text" class="form-control" placeholder="Nombre de usuario">
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col-md-3" id="divperfil">
                <input name="pass" type="text" class="form-control" placeholder="Contraseña">
            </div>
        </div>

        <br>

        <div id="btnperfil">
            <button type="submit" class="btn btn-success" name="btn"> Actualizar </button>
        </div>

    </form>
    <br>
    <table class="table table-success col-md-8" id="tablaperfil">
        <thead>
            <tr>
                <th scope="col">
                    <center>USUARIO</center>
                </th>
                <th scope="col">
                    <center>CONTRASEÑA</center>
                </th>
            </tr>
        </thead>

        <tbody>

            <?PHP
                require_once('../conexion.php');
                $consul="SELECT * FROM admin WHERE id='2'";
                $res=mysqli_query($conexion,$consul);
                while($row=mysqli_fetch_array($res)){
            ?>

            <tr>
                <td>
                    <center><?PHP echo $row['usuario']?></center>
                </td>
                <td>
                    <center><?PHP echo $row['pass']?></center>
                </td>
            </tr>
            <?PHP } ?>
        </tbody>
    </table>

    <script src="../main.js"></script>
</body>

</html>