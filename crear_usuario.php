<?php
include 'conexion.php';

// Crear
if (isset($_POST['nombre']) && isset($_POST['email'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    
    $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
    $conn->query($sql);
}

// Redirigir de vuelta a la página principal
header("Location: index.html");
?>
