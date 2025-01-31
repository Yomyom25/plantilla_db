<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
    <title>Login</title>
</head>
<body>

<div class="div-1200px">

<div class="img-logo">
        <img class="logo" src="img/Logo_del_Instituto_Tecnológico_de_Mérida.svg.png" alt="Logo">
    </div>

    <div class="background_login">
        <h1>Login</h1>
        <form action="/login" method="POST">
            <input type="text" name="correo" placeholder="Correo Electronico" required class="input-login">
            <input type="password" name="password" placeholder="Contraseña" required class="input-login">
            <input type="submit" value="Iniciar sesión" class="btn-login">
        </form>

        <hr>

        <input type="submit" value="Crear una cuenta" class="btn-cuenta">
    </div>
    <div class="footer">
        <span> <?php echo date ("Y")?> </span>
    </div>
    </div>

</div>

</body>
</html>