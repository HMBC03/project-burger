<?php
include 'conexion.php';
if(isset($_POST['login'])){
$email=$_POST['email'];
$pass=$_POST['password'];
$pass_encrypt=base64_encode($pass);

$query = mysqli_query($conexion,"SELECT * FROM usuarios WHERE Correo = '$email' AND pass='$pass_encrypt'");
$cantidad_registro=mysqli_num_rows($query);

if($cantidad_registro==1){
    while($row =mysqli_fetch_array($query)){
        session_start();
        $_SESSION['Usuario']=$row['Nombre'];
        
    }
    if($_SESSION['Usuario']=="ATENEA"){
        header('location:../backend/admin.php');
    }else{
    header('location:../index.html');
    }
    
}else{
    
    header('location:../login.html');

}
}
?>