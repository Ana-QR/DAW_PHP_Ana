<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Datos del Alumno</title>
</head>
<body>
    <h2>Formulario de Datos del Alumno</h2>
    <form action="Relacion5-1.2Procesar.php" method="POST">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>

        <label for="apellidos">Apellidos:</label><br>
        <input type="text" id="apellidos" name="apellidos" required><br><br>

        <label for="fechaNacimiento">Fecha de Nacimiento:</label><br>
        <input type="date" id="fechaNacimiento" name="fechaNacimiento" required><br><br>

        <label for="email">Correo Electrónico:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label>Lenguajes de Programación que Conoce:</label><br>
        <input type="checkbox" name="lenguajes[]" value="PHP"> PHP<br>
        <input type="checkbox" name="lenguajes[]" value="JavaScript"> JavaScript<br>
        <input type="checkbox" name="lenguajes[]" value="Python"> Python<br>
        <input type="checkbox" name="lenguajes[]" value="Java"> Java<br><br>

        <label>¿Sabe crear páginas web estáticas?:</label><br>
        <input type="radio" name="sabeCrearWeb" value="Sí" required> Sí<br>
        <input type="radio" name="sabeCrearWeb" value="No" required> No<br><br>

        <label for="comentarios">Comentarios:</label><br>
        <textarea id="comentarios" name="comentarios" rows="4" cols="50"></textarea><br><br>

        <label for="contrasena">Contraseña:</label><br>
        <input type="password" id="contrasena" name="contrasena" required><br><br>

        <label for="repiteContrasena">Repite la Contraseña:</label><br>
        <input type="password" id="repiteContrasena" name="repiteContrasena" required><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
