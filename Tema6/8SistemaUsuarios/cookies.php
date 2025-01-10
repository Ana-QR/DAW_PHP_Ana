<?php
    /**
     * Crear un script que permita:
     * Autenticar al usuario con un formilario.
     * Regenerar el ID de sesión después de la autentificación
     * Mostrar un mensaje de bienvenida al usuario
     * Destruir la sesión después de 5 minutos de inactividad
     * Implementar un cierre de sesión manual que elimine todas las variables de sesión y la cookie.
     */

    // Iniciar o reanudar la sesión
    session_start();

    // Verificar si hay un intento de inicio de sesión
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['usuario'], $_POST['contrasenia'])) {
        $usuario = $_POST['usuario'];
        $contrasenia = $_POST['contrasenia'];

        // Validación de usuario (esto es un ejemplo, se debe usar autenticación segura)
        if ($usuario === 'admin' && $contrasenia === 'contrasenia') {
            // Regenerar el ID de sesión tras autenticar al usuario
            session_regenerate_id(true);

            // Almacenar información en la sesión
            $_SESSION['usuario'] = $usuario;
            $_SESSION['ultimoAcceso'] = time(); // Registrar la actividad
            $_SESSION['logged_in'] = true;
        } else {
            echo "<p>Usuario o contraseña incorrectos.</p>";
        }
    }

    // Verificar si el usuario ha iniciado sesión
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        // Verificar inactividad (5 minutos = 300 segundos)
        if (time() - $_SESSION['ultimoAcceso'] > 300) {
            // Tiempo de inactividad excedido, destruir sesión
            session_unset();
            session_destroy();
            setcookie(session_name(), '', time() - 3600, '/'); // Eliminar la cookie de sesión
            echo "<p>Tu sesión ha expirado por inactividad. Por favor, inicia sesión nuevamente.</p>";
        } else {
            // Actualizar el tiempo de actividad
            $_SESSION['ultimoAcceso'] = time();
            echo "<p>Bienvenido, {$_SESSION['usuario']}!</p>";
            echo "<p><a href='?logout=true'>Cerrar sesión</a></p>";
        }
    } else {
        // Si no está autenticado, mostrar el formulario de inicio de sesión
        echo "
        <form method='post'>
            <label for='usuario'>Usuario:</label>
            <input type='text' id='usuario' name='usuario' required>
            <br>
            <label for='contrasenia'>Contraseña:</label>
            <input type='contrasenia' id='contrasenia' name='contrasenia' required>
            <br>
            <button type='submit'>Iniciar sesión</button>
        </form>
        ";
    }

    // Cerrar sesión manualmente
    if (isset($_GET['logout'])) {
        session_unset(); // Eliminar variables de sesión
        session_destroy(); // Destruir la sesión
        setcookie(session_name(), '', time() - 3600, '/'); // Eliminar la cookie de sesión
        header('Location: ' . $_SERVER['PHP_SELF']); // Redirigir a la página principal
        exit;
    }


?>