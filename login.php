<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/sesion.css">
    <link rel="shortcut icon" href="./resources/ICON/1024.png"/>
 
    <title>Bienvenido</title>
</head>
<body>
    
<section id="registroform">
    <h1>Inicio sesión.</h1>
    <form action="./Backend/db/login.php" method="post">
        <input type="email" placeholder="Email:"  name="email" required>
        <input type="password" placeholder="Password:"  name="password" required>
        <input type="submit" name="login" value="Login">
        <p>No tienes cuenta? <a href="./registro.php">Crear cuenta</a></p>
    </form>
    
</section>

<section id="imgregistro">
    <img src="./resources/login.jpg" alt="login">
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



</body>
</html>