<!DOCTYPE html>
<html lang="es">
<head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <?php
            include("db/conexion.php");


            /* Codigo que captura el ID de los nobmres */

            $id=$_GET['id'];

            //Colectar la info para mostrarla y dejarla editar

            $sql="SELECT * FROM usuarios WHERE id='$id'";
            $query=mysqli_query($conexion,$sql);

            $row=mysqli_fetch_array($query);
    ?>    
                <div class="container mt-5">
                    <h1>Reemplaza los datos necesarios y envielos*</h1>
                    <form action="db/update.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $row['ID']  ?>">
                                <input type="text" class="form-control mb-3" name="Nombre" placeholder="Nombres" value="<?php echo $row['Nombre']  ?>">
                                <input type="text" class="form-control mb-3" name="Apellido" placeholder="Apellidos" value="<?php echo $row['Apellido']  ?>">
                                <input type="text" class="form-control mb-3" name="Telefono" placeholder="Apellidos" value="<?php echo $row['Telefono']  ?>">
                                <input type="text" class="form-control mb-3" name="Correo" placeholder="Apellidos" value="<?php echo $row['Correo']  ?>">
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>