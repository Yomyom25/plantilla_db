<?php
require "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //Quitar espacios en blanco
    $email = trim($_POST["email"]);
    $contrasena = trim($_POST["contrasena"]);
    
    //Validar la existencia del usuario
    if (!empty($email) && !empty($contrasena)) {

        // Evitar inyeccion SQL
        $consulta = $conectar -> prepare("SELECT contrasena FROM usuarios WHERE email = ? LIMIT 1");
        $consulta -> bind_param("s", $email);
        $consulta -> execute();
        $resultado = $consulta -> get_result();

        if (mysqli_num_rows($resultado) > 0) {
            $fila = $resultado -> fetch_array();
            $password = $fila["contrasena"];

            if (password_verify($contrasena, $password)) {
                session_start();
                setcookie("tiempo_inicio", time(), time() + 1, "/");

                $_SESSION["autentificado"] = "SI";
                $_SESSION["username"] = $email;
                header("Location: principal2.php");
            } else {
                echo '
                    <script>
                    alert("Contraseña incorrecta");
                    location.href = "index.php";
                    </script>
                ';
            }
        }

    } else {
        echo '
            <script> 
            alert("Por favor completa todos los campos");
            history.go(-1);
            </script>
        ';
    }

    mysqli_free_result($resultado);

}

$conectar->close();