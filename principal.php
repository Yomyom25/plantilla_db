<?php 
require "seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
    <title>principal</title>
</head>
<body>
    <div class="div-1200px">
        <?php 
        include "dashboard.php";
        ?>
        <h1>PANEL ADMINISTRATIVO</h1>
        <div class="img-principal">
            <img class="principal" src="img/home.jpg" alt="Principal">
        </div>
    </div>
    <h1>hola mundo</h1>
    <a href="salir.php">Cerrar Sesión</a>
</body>
</html>