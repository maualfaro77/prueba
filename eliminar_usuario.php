<?php
include 'conexion.php'; // Incluir la conexión a la base de datos

// Eliminar
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM usuarios WHERE id=$id";
    $conn->query($sql);
}

// Redirigir de vuelta a la página principal
header("Location: index.html");
?>
