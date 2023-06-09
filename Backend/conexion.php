<?php

$host = "localhost";
$usuario = "root";
$contraseña = "";
$db = "project-burger";

$conexion = new mysqli($host,$usuario,$contraseña,$db);
if($conexion->connect_errno){
    echo "Se presentarón fallos en la conexion";
    exit();
}


?>