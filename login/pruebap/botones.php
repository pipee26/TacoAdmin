<?php
    require_once('conexion.php');

    $cerrado='Cerrado';
    $abierto='Abierto';

    $consul="SELECT * FROM establecimiento";
    $res=mysqli_query($conexion,$consul);
    
    $registro = mysqli_fetch_array($res);
    $estcerr=$registro['estatus'];

    if ($estcerr=$abierto) {
       echo '<button type="button" class="btn btn-success btn-lg" id="abi" name="Abierto" disabled>Abierto</button>';
       echo '<button type="button" class="btn btn-dark btn-lg" id="cer" name="Cerrado">Cerrado</button>'; 
    }elseif($estcerr=$cerrado){
        echo '<button type="button" class="btn btn-success btn-lg" id="abi" name="Abierto" >Abierto</button>';
        echo '<button type="button" class="btn btn-dark btn-lg" id="cer" name="Cerrado" disabled>Cerrado</button>'; 
    }
?>