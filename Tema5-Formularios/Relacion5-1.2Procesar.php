<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Procesamiento de Datos del Alumno</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Función para sanitizar los datos
    function limpiarDatos($datos) {
        return htmlspecialchars(stripslashes(trim($datos)));
    }

    // Recibir y sanitizar los datos del formulario
    $nombre = limpiarDatos($_POST['nombre']);
    $apellidos = limpiarDatos($_POST['apellidos']);
    $fechaNacimiento = limpiarDatos($_POST['fechaNacimiento']);
    $email = limpiarDatos($_POST['email']);
    $lenguajes = isset($_POST['lenguajes']) ? $_POST['lenguajes'] : [];
    $sabeCrearWeb = limpiarDatos($_POST['sabeCrearWeb']);
    $comentarios = limpiarDatos($_POST['comentarios']);
    $contrasena = limpiarDatos($_POST['contrasena']);
    $repiteContrasena = limpiarDatos($_POST['repiteContrasena']);

    // Verificar si las contraseñas coinciden
    if ($contrasena !== $repiteContrasena) {
        echo "<h2>Error:</h2>";
        echo "<p>Las contraseñas no coinciden. Por favor, regresa y corrige los datos.</p>";
        echo '<p><a href="formulario.php">Volver al formulario</a></p>';
        exit;
    }

    echo "<h2>Datos recibidos:</h2>";
    echo "<strong>Nombre:</strong> $nombre<br>";
    echo "<strong>Apellidos:</strong> $apellidos<br>";
    echo "<strong>Fecha de nacimiento:</strong> $fechaNacimiento<br>";
    echo "<strong>Correo Electrónico:</strong> $email<br>";
    echo "<strong>Lenguajes de programación que conoce:</strong> " . (empty($lenguajes) ? 'Ninguno' : implode(", ", $lenguajes)) . "<br>";
    echo "<strong>¿Sabe crear páginas web estáticas?:</strong> $sabeCrearWeb<br>";
    echo "<strong>Comentarios:</strong> " . (!empty($comentarios) ? nl2br($comentarios) : 'Ninguno') . "<br>";
    echo "<strong>Contraseña:</strong> $contrasena<br>";
    echo "<strong>Repite la contraseña:</strong> $repiteContrasena<br>";
} else {
    echo "<h2>Acceso no autorizado</h2>";
    echo "<p>Por favor, utiliza el formulario para enviar tus datos.</p>";
    echo '<p><a href="formulario.php">Ir al formulario</a></p>';
}
?>

</body>
</html>
