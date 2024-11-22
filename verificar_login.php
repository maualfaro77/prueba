<?php
session_start(); // Iniciar la sesión

// Aquí puedes agregar lógica para verificar el usuario y la contraseña si lo deseas
// Por ahora, simplemente redirigimos al CRUD

$_SESSION['usuario'] = 'admin'; // Guardar el usuario en la sesión (puedes cambiarlo si lo deseas)
header("Location: index.php"); // Redirigir al CRUD
exit();
?>
