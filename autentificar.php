<?php
require "seguridad.php";
require "conn.php";

$email = addslashes($_POST["email"]);
$contrasena = addslashes($_POST["contrasena"]);

$comparar = "SELECT * FROM usuarios WHERE email='$email' Limit 1";

$resultado = mysqli_query($conectar, $comparar);
//Validar la existencia del usuario
if (mysqli_num_rows($resultado) > 0) {

  $fila = $resultado -> fetch_array();

  $password = $fila["contrasena"];


  if(password_verify($contrasena, $fila["contrasena"])){


  session_start();
  $_SESSION["autentificado"] = "SI";
  header("Location: principal2.php");
} else {

  echo '
    <script> 
      alert("ERROR EN LA AUTENTIFICACION");
      location.href = "index.php?errorusuario=SI";
    </script>
   ';
}
}
mysqli_free_result($resultado);
