<?php
include 'conexion.php'; // Incluir la conexión a la base de datos

// Leer el usuario
$id = $_GET['id'];
$sql = "SELECT * FROM usuarios WHERE id=$id";
$result = $conn->query($sql);
$user = $result->fetch_assoc();

// Actualizar
if (isset($_POST['actualizar'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $sql = "UPDATE usuarios SET nombre='$nombre', email='$email' WHERE id=$id";
    $conn->query($sql);
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h1>Editar Usuario</h1>
    <form method="post">
        <input type="text" name="nombre" value="<?php echo $user['nombre']; ?>" required>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
        <button type="submit" name="actualizar">Actualizar</button>
    </form>
</body>
</html>
