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
        <div class="salir">
            <?php 
            include "linea-salir.php"
            ?>
        </div>
    <div class="menu">
        <?php 
        include "dashboard.php";
        ?>
    </div>
    <div class="contenedor">
        <h1 class="titulo">PANEL ADMINISTRATIVO</h1>
        <div class="img-principal">
            <img class="principal" src="img/home.jpg" alt="Principal">
        </div>
    </div>
    </div>

</body>
</html>