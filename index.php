<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <title>Login</title>
</head>
<body>

<div class="div-1200px">

<div class="img-logo">
        <img class="logo" src="img/Logo_del_Instituto_Tecnológico_de_Mérida.svg.png" alt="Logo">
    </div>

    <div class="background_login">
        <h1>Login</h1>
        <form action="php/autentificar.php" method="POST" name="login_plantilla">
            <input type="text" name="email" placeholder="Correo Electronico" class="input-login ancho-uniforme ">
            <input type="password" name="contrasena" placeholder="Contraseña" class="input-login ancho-uniforme ">
             <br>
            <input type="submit" value="Iniciar sesión" class="btn-login ancho-uniforme btn">
        </form>

        <hr>

        <input type="submit" value="Crear una cuenta" class="btn-cuenta btn" onclick="window.location.href='registro.php';">
    </div>
    <div class="footer">
        <span class="letra-footer"> © <?php echo date ("Y")?> Todos los Derechos Reservados <a href="_blank" class="letra-footer">uwu</a></span>
    </div>
    </div>

</div>
    <script src="scripts/validacion.js"></script> 
</body>
</html>