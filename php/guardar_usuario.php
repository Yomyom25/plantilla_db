<?php 
$nombre = $_POST ['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];

require "conn.php";

// Consulta SQL para insertar los datos en la tabla usuarios
$insertar = "INSERT INTO usuarios (nombre, apellido, email, contrasena, fecha_nacimiento) VALUES ('$nombre', '$apellido', '$email', '$contrasena', '$fecha_nacimiento')";

// Ejecutar la consulta
$query = mysqli_query($conectar, $insertar);


?>