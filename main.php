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
    <link rel="stylesheet" href="stylemain.css">
    <link rel="stylesheet" href="stylebackup.css">
    <!-- <link rel="stylesheet" href="style2.css"> -->
    <title>Taco y medio</title>
</head>

<body>
    
    <div id="logout">
        <a href="tablapedidos.php"><img src="img/logout.png" id="imglogout" ></a>
    </div>

    <div id="back">
        <a href="descargar.php"><img src="img/back.png" id="backup"></a>
    </div>
    
    
    <div id="sidebar">
        <div class="toggle-btn">
            <span>&#9776;</span>
        </div>
            <li>
                <img src="img/iconodos.png" id="logoside">
            </li>
            <div id="lista-btn">
                    <br><br><br>
                    
                        <a href="#" id="a1">Inicio</a>
                        <br><br><br>
                
                        <a href="menus/nuevomenu.php" id="a2">Menus</a>
                        <br><br><br>
                   
                        <a href="platillos/nuevoplatillo.php" id="a3">Platillos</a>
                        <br><br><br>
                        
                        <a href="perfil/perfil.php" id="a4">Perfil</a>
                      
            </div>
         
    </div>
    <img src="img/iconodos.png" id="imginicioadmin">


    <script src="main.js"></script>
</body>

</html>