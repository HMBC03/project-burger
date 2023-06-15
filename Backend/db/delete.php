<?php

include("conexion.php");


/* Codigo que captura el ID de los nobmres cuando se eliminan */

$cod_user=$_GET['id'];
/* Comando SQL para eliminar la variable cod_estudiante */


$query=mysqli_query($conexion,"DELETE FROM usuarios WHERE ID='$cod_user'");

/* Una vez hecho el proceso. Llevar a index.php */

    if($query){
        Header("Location: ../admin.php");
    }
?>    