<?php
$email = addslashes($_POST['email']);
$contrasena = addslashes($_POST['contrasena']);

require "conn.php";

// Consulta SQL para buscar el email y contraseña en la tabla usuarios
$busqueda = "SELECT * FROM usuarios WHERE email='$email' AND contrasena='$contrasena' ";
$resultado = mysqli_query($conectar, $busqueda);


if (mysqli_num_rows($resultado) > 0) {
    // Iniciar sesión y redireccionar a la página principal
    session_start();
    $_SESSION[ ]
    $_SESSION['email'] = $email;
    header("Location: ../principal.php");
} else {
    // Mostrar mensaje de error y volver al formulario de inicio de sesión
    header("Location:../index.php?error_usser=SI");
}

mysqli_free_result($resultado);
mysqli_close($conectar);

?>
