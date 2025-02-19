<?php 
include "seguridad.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administrativo</title>
    <link rel="stylesheet" href="CSS/estilos.css">
</head>
<body>
    <div class="flex-container">
        <div class="sidebar">
            <?php 
            include "utils/nav-bar.php"
            ?>

        </div>

        <div class="main-content">
            <header>
                <?php include "utils/header.php"?>
            </header>

            <section class="dashboard">
                <div class="tittle-div">
                    <h1 class="title">Vista de usuarios</h1>
                </div>

                <div class="usuarios-vista">
                    <div class="btn">
                        <a class="btn-green regresar" href="usuario.php">Regresar</a>
                    </div>

                        <div class="vista">
                    <?php
                        require "conn.php";

                        $id_usuario = $_GET["id"];
                        $todos = "SELECT * FROM usuarios WHERE ID = '$id_usuario' ";

                        $resultado = mysqli_query($conectar, $todos);
                        while ($fila = $resultado -> fetch_array()) {
                            echo "<p class='text-bold'>Nombre:</p>" .$fila["nombre"]. "<br>"."<hr>";
                            echo "<p class='text-bold'>Apellido:</p>" .$fila["apellido"]. "<br>"."<hr>";
                            echo "<p class='text-bold'>Correo electronico:</p>" .$fila["email"]. "<br>"."<hr>";
                            echo "<p class='text-bold'>Contraseña:</p>" .$fila["contrasena"]. "<br>"."<hr>";
                            echo "<p class='text-bold'>Fecha de nacimiento:</p>" .$fila["fecha_nacimiento"]. "<br>";
                            echo "<hr>";
                        }
                    ?>
                    </div>
                </div>
            </section>

        </div>
    </div>
</body>
</html>
