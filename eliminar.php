<?php 
require "conn.php";
$id_usuario = $_GET["id"];

$eliminar = "DELETE FROM usuarios WHERE ID = '$id_usuario'";
$resultado = mysqli_query($conectar, $eliminar);

if ($resultado) {
    header("location: usuario.php");
} else {
    echo "no se pudo eliminar el usuario";
}

?>