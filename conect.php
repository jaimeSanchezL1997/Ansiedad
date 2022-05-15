<?php 
$conn = mysqli_connect("127.0.0.1", "mi_usuario", "mi_contraseña", "mi_bd");
if (!$conn) {
    echo "Error: No se pudo conectar a MySQL. Error " . mysqli_connect_errno() . " : ". mysqli_connect_error() . PHP_EOL;
    die;
}
?>