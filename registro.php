<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Registrate</title>
</head>
<body>
    <div class="div-1200px">
        <div class="img-logo">
            <img class="logo" src="img/Logo_del_Instituto_Tecnológico_de_Mérida.svg.png" alt="Logo">
        </div>

        <div class="div-form background_login">
            <h1>Registrate</h1>
            <form action="/submit" method="POST">

        <input class="input-login ancho-uniforme" type="text" id="name" name="name" placeholder="Nombre(s)" required>
        <input class="input-login ancho-uniforme" type="text" id="last_name" name="last_name" placeholder="Apellido" required>

        <input class="input-login ancho-uniforme" type="email" id="email" name="email" placeholder="Correo electronico" required>

        <input class="input-login ancho-uniforme" type="password" id="password" name="password" placeholder="contrasena" required>
 
        <label for="birthdate">Fecha de nacimiento:</label>
        <input class="input-login ancho-uniforme" type="date" id="birthdate" name="birthdate" required>

        <input class="btn-cuenta ancho-uniforme" type="submit" value="registrar">
    </form>
        </div>
        <div class="footer">
        <span class="letra-footer"> © <?php echo date ("Y")?> Todos los Derechos Reservados <a href="_blank" class="letra-footer">uwu</a></span>
    </div>

    </div>
</body>
</html>