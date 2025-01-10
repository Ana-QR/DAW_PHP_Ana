<?php
session_start();

// Establecer una cookie llamada "visita" con un mensaje de bienvenida
if (!isset($_COOKIE['visita'])) {
    setcookie("visita", "¡Bienvenido a nuestro sitio web!", time() + 3600, "/"); // Cookie válida por 1 hora
    echo "<p>¡Bienvenido, esta es tu primera visita!</p>";
} else {
    echo "<p>Bienvenido de nuevo</p>";
}

// Crear o actualizar una sesión para contar las visitas del usuario
if (!isset($_SESSION['contador_visitas'])) {
    $_SESSION['contador_visitas'] = 1;
    echo "<p>¡Bienvenido, esta es tu primera visita!</p>";
} else {
    $_SESSION['contador_visitas']++;
    $visitas = $_SESSION['contador_visitas'];
    echo "<p>Bienvenido de nuevo, esta es tu visita número $visitas.</p>";
}
?>
