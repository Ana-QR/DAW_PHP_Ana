<?php
session_start();
require_once 'config/config.php';
require_once 'lib/conexion.php';

$conexion = new Conexion();
$pdo = $conexion->getPdo();

?>

<body>
<a href="index.php">Volver</a>
<a href="modificarUsuario.php"> Modificar Usuario</a>
<?php

if ($_SESSION['rol'] == 'admin') {
    echo '<a href="eliminarUsuario.php">Eliminar Usuarios</a> ';
    echo '<a href="zona_admin.php">Zona admin</a>';
    echo '<h1>Hola ' . $_SESSION['nombre'] . '</h1>';
} else {
    echo '<h1>Hola ' . $_SESSION['nombre'] . '</h1>';
}

?>
</body>