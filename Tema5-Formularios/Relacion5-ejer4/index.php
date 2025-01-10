<?php
include 'alumnos.php';

// Manejar el formulario para añadir nuevos alumnos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'] ?? '';
    $notas = isset($_POST['notas']) ? explode(',', $_POST['notas']) : [];

    if ($nombre && $notas) {
        $notas = array_map('trim', $notas); // Limpiar espacios
        addAlumno($alumnos, $nombre, $notas);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos y Notas</title>
</head>
<body>
    <h1>Lista de Alumnos y sus Notas</h1>
    <?php
    // Mostrar alumnos y la media
    mostrarNotas($alumnos);
    medias($alumnos);
    ?>

    <h2>Añadir Nuevo Alumno</h2>
    <form action="" method="post">
        <label for="nombre">Nombre del alumno:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="notas">Notas (separadas por coma):</label>
        <input type="text" id="nota" name="nota" required>
        <br><br>
        <input type="submit" value="Añadir Alumno">
    </form>
</body>
</html>
