<?php
session_start();
if ($_SESSION['nivel'] !=3 AND $_SESSION['nivel'] !=2){
  header('Location:index.html');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/js/bootstrap.min.js">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styletabla.css">
    <link rel="stylesheet" href="stylemain.css">
    <link rel="stylesheet" href="estilotienda.css">
    <title>Pedidos</title>
</head>

<body>

    <div id="logout">
        <a href="cerrar.php"><img src="img/logout.png" id="imglogout" ></a>
    </div>
    
    <header>
        <div class="toggle-btn">
            <a href="logeo.html"><img src="img/sesion.png" id="iconsesion"></a>
        </div>

        <div id="status">
            <a href="open.php"><button type="button" class="btn btn-success" id="btn_open">Abierto</button></a>
            <a href="close.php"><button type="button" class="btn btn-danger" id="btn_close">Cerrado</button></a>
        </div>
        <table id="tablasesion">
                <?php
                    require_once('conexion.php');
                    $consul="SELECT * FROM establecimiento WHERE id_establecimiento='1'";
                    $res=mysqli_query($conexion,$consul);
                    while ($row=mysqli_fetch_array($res)) {
                ?>
                <tr>
                    <td>
                        <center> <?PHP echo $row['estatus'] ?></center>
                    </td>
                </tr>
                <?PHP } ?>
        </table>
    </header>
    <BR>
    <h3 id="h3tabla">PEDIDOS</h3>
    <BR>
    <BR>
    <table class="table table-success" id="tablacontacto">
        <thead>
            <tr>


                <th scope="col">
                    <center>FECHA/HORA</center>
                </th>
                <th scope="col">
                    <center>CLIENTE</center>
                </th>
                <th scope="col">
                    <center>MENU</center>
                </th>
                <th scope="col">
                    <center>PLATILLO</center>
                </th>
                <th scope="col">
                    <center>CANTIDAD</center>
                </th>
                <th scope="col">
                    <center>DIRECCION</center>
                </th>
                <th scope="col">
                    <center>PAGO</center>
                </th>
                <th scope="col">
                    <center>STATUS</center>
                </th>
                </th>
                <th scope="col" colspan="4">
                    <center>FUNCIONES</center>
                </th>
            </tr>
        </thead>
        <tbody>
            <?PHP
                        require_once('conexion.php');
                        $consul="SELECT * FROM pedidos WHERE status != 'Enviado'";
                        $res=mysqli_query($conexion,$consul);
                        while($row=mysqli_fetch_array($res)){
                    ?>
            <tr>

                <td>
                    <center>
                        <?PHP echo $row['fecha']?>
                    </center>
                </td>
                <td>
                    <center>
                        <?PHP echo $row['comprador']?>
                    </center>
                </td>
                <td>
                    <center>
                        <?PHP echo $row['tipopedido']?>
                    </center>
                </td>
                <td>
                    <center>
                        <?PHP echo $row['nombrep']?>
                    </center>
                </td>
                <td>
                    <center>
                        <?PHP echo $row['cantp']?>
                    </center>
                </td>
                <td>
                    <center>
                        <?PHP echo $row['direccionentrega']?>
                    </center>
                </td>
                <td>
                    <center>
                        <?PHP echo $row['pago']?>
                    </center>
                </td>
                <td>
                    <center>
                        <?PHP echo $row['status']?>
                    </center>
                </td>
                <!-- <td>
                    <a href="phptabla/statusesp.php?id_pedido=<?php echo $row['id_pedido'] ?>" class="button">
                        <center><button type="button" class="btn btn-secondary" name="btn">En espera</button></center>
                    </a>
                </td> -->
                <td>
                    <a href="phptabla/statusproc.php?id_pedido=<?php echo $row['id_pedido'] ?>" class="button">
                        <center><button type="button" class="btn btn-warning" name="btn">En Proceso</button></center>
                    </a>
                </td>
                <td>
                    <a href="phptabla/statuster.php?id_pedido=<?php echo $row['id_pedido'] ?>" class="button">
                        <center><button type="button" class="btn btn-success" name="btn">Terminado</button></center>
                    </a>
                </td>
                <td>
                    <a href="phptabla/statusenv.php?id_pedido=<?php echo $row['id_pedido'] ?>" class="button">
                        <center><button type="button" class="btn btn-primary" name="btn">Enviado</button></center>
                    </a>
                </td>
            </tr>
            <?PHP } ?>
        </tbody>
    </table>

    <script>
        setTimeout('document.location=document.location',5000);
    </script>

</body>

</html>