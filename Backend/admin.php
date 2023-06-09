<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../resources/ICON/1024.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/admin.css">

    <title>Administrador</title>
</head>

<body>
    

    <section id="inicio">
        <h1>Gestor de usuarios</h1>
        <table class="table">
            <tr>
                <th># ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Eliminar usuario</th>
            </tr>
<?php
         include './conexion.php';
        $usuarios = mysqli_query($conexion,"SELECT * FROM usuarios");

    while($datos=mysqli_fetch_array($usuarios)){
        $id = $datos['ID'];
        $nombre = $datos['Nombre'];
        $apellido = $datos['Apellido'];
        $telefono = $datos['Telefono'];
        $correo = $datos['Correo'];
        echo '
        

            <tr>
                <td>'.$id.'</td> 
                <td>'.$nombre.'</td>
                <td>'.$apellido.'</td>               
                <td>'.$telefono.'</td>
                <td>'.$correo.'</td>      
                <td><button class="btn btn-primary>Borrar</button></td>
            </tr>
          
        ';
    }
?>
        </table>

    </section>






</body>

</html>