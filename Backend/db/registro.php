<?php

include 'conexion.php';

if(isset($_POST['registro'])){

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $telefono=$_POST['telefono'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $password_encrypt=base64_encode($password);
    $sql=mysqli_query($conexion,"INSERT INTO usuarios (Nombre,Apellido,Telefono,Correo,pass) VALUES ('$nombre','$apellido','$telefono','$email','$password_encrypt')");
    header('location:../../login.php');
    
}else{
    header('location:../../index.php');
}




?>
