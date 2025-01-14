<?php
session_start();
require_once 'config/config.php';
require_once 'lib/conexion.php';

$conexion = new Conexion();
$pdo = $conexion->getPdo();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoja de Bienvenida</title>
</head>
<body>
Te damos la bienvenida: <?php echo $_SESSION['nombre']?><br>

<a href="logout.php"> Cerrar sesion </a><br>

<?php if($_SESSION['rol'] == 'admin'){ ?>
    <a href=""> Zona admin </a>
<?php } ?>
</body>
</html>

<!-- <body>
<a href="index.php">Volver</a>
<a href="modificarUsuario.php"> Modificar Usuario</a>

// if ($_SESSION['rol'] == 'admin') {
//     echo '<a href="eliminarUsuario.php">Eliminar Usuarios</a> ';
//     echo '<a href="zona_admin.php">Zona admin</a>';
//     echo '<h1>Hola ' . $_SESSION['nombre'] . '</h1>';
// } else {
//     echo '<h1>Hola ' . $_SESSION['nombre'] . '</h1>';
// }
