<?php
$host = 'localhost';
$usuario = 'root';
$contraseña = '';
$base_datos = 'mi_base_datos';

$conn = new mysqli($host, $usuario, $contraseña, $base_datos);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
