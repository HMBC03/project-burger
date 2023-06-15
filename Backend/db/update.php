<?php
//Esto es el back para poder cambiar los valores de las bases de datos para ello traermos la conexion;
include("conexion.php");


/* Creacion de las variables: Estudiante, Dni, Nombre y Aprellido */

$id=$_POST['id'];
$nombre=$_POST['Nombre'];
$apellido=$_POST['Apellido'];
$telefono=$_POST['Telefono'];
$correo=$_POST['Correo'];

//Sentencia update / set para cambiar los datos de la db


$query=mysqli_query($conexion,"UPDATE usuarios SET Nombre='$nombre', Apellido='$apellido', Telefono='$telefono', Correo='$correo' WHERE id='$id'");

//mantenemos el flujo para que retorne a el gestor

    if($query){
      
        Header("Location: ../admin.php");
    }
?>