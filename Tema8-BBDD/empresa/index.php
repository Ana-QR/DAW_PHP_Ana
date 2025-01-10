<?php

session_start();

$_SESSION['errorInicioSesion'] = $_SESSION['errorInicioSesion'] ?? 0; // Guardo el error de inicio de sesión
$_SESSION['ultimoIntento'] = $_SESSION['ultimoIntento'] ?? time(); // Guarda el tiempo del último intento

$dsn = "mysql:host=localhost;dbname=mistiendas;charset=utf8mb4";
$username = "root";
$password = "";

require_once 'config/config.php';
require_once 'lib/conexion.php';

$conexion =new Conexion();


try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexion realizada con éxito";
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: ". $e->getMessage());
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro e Inicio de Sesión</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Incluyendo el CSS -->
</head>
<body>

<h2>Registro</h2>
<form method="post">
    Email: <input type="email" name="email_register" required>
    Contraseña: <input type="password" name="password_register" required>
    <input type="submit" name="register" value="Registrar">
</form>

<?php if ($_SESSION['errorInicioSesion'] < 3) {?>
<h2>Iniciar Sesión</h2> 
<form method="post">
    Email: <input type="email" name="email_login" required>
    Contraseña: <input type="password" name="password_login" required>
    <input type="submit" name="login" value="Iniciar Sesión">
</form>
<?php } else { ?>
    <h2>Has superado el número de intentos permitidos. Por favor, espera 5 segundos.</h2>

<?php } ?>
</body>
</html>