<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/sesion.css">
    <link rel="shortcut icon" href="./resources/ICON/1024.png"/>
 
    <title>Únete</title>
</head>
<body>
    
<section id="registroform">
    <h1>Crea tú cuenta.</h1>
    <form action="Backend/db/registro.php" id="registro" method="post">
        <input type="text" placeholder="Nombre:" id="nombre" name="nombre" required autofocus>
        <input type="text" placeholder="Apellido:" id="apellido" name="apellido" autofocus>
        <input type="number" placeholder="Teléfono:" name="telefono">
        <input type="email" placeholder="Email:" id="email" name="email" required>
        <input type="password" placeholder="Password:" id="password" name="password" required>
        <input type="submit" name="registro"value="Crear">
        <p>Ya tienes una cuenta? <a href="login.php">Login</a></p>
    </form>
    
</section>

<section id="imgregistro">
    <img src="./resources/registro.jpg" alt="resgistro">
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</body>
</html>