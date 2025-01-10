<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form action="procesar_login.php" method="POST">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Iniciar sesión</button>
    </form>

    <?php
    // Credenciales correctas
    $usuario_correcto = "usuario";
    $contrasena_correcta = "1234";

    // Obtener datos del formulario
    $usuario = $_POST['username'];
    $contrasena = $_POST['password'];

    // Comprobar las credenciales
    if ($usuario === $usuario_correcto && $contrasena === $contrasena_correcta) {
        // Si son correctas, redirige a la página de alta (por ejemplo, "formulario_alta.php")
        header("Location: formulario_alta.php");
        exit();
    } else {
        // Si son incorrectas, redirige a la página de error
        header("Location: error.php");
        exit();
    }
    ?>
    
    <h1>Error</h1>
    <p>Usuario o contraseña incorrectos. Por favor, intenta de nuevo.</p>
    <a href="login.php">Volver al Login</a>
</body>
</html>
