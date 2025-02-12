<?php 
require "seguridad.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="CSS/styles.css">
    <title>Usuarios</title>
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
            include "dashboard.php"
            ?>
        </div>

        <div class="contenedor">
            <h1 class="titulo">Usuarios</h1>
            <br>
            <a class="add-user" href="crear_usuario.php">Crear Usuario</a>
            <br>
            <table class="tabla-usuarios">
                <tr>
                    <th class="yellow">ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th class="yellow">Ver</th>
                    <th class="yellow">Editar</th>
                    <th class="yellow">Borrar</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Juan Perez</td>
                    <td>juan.perez@gmail.com</td>
                    <td>Administrador</td>
                    <td><a href=""><img class="img-tabla"  src="img/ver.png" alt=""></a></td>
                    <td><a href=""><img class="img-tabla" src="img/editar.png" alt=""></a></td>
                    <td><a href=""><img class="img-tabla" src="img/eliminar.png" alt=""></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Maria Martinez</td>
                    <td>maria.martinez@gmail.com</td>
                    <td>Usuario</td>
                    <td><a href=""><img class="img-tabla" src="img/ver.png" alt=""></a></td>
                    <td><a href=""><img class="img-tabla" src="img/editar.png" alt=""></a></td>
                    <td><a href=""><img class="img-tabla" src="img/eliminar.png" alt=""></a></td>
                </tr>

            </table>
        </div>
    </div>
</body>
</html>