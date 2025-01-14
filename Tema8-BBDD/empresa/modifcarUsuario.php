<?php
session_start();

require_once 'config/config.php';
require_once 'lib/conexion.php';

$conexion =new Conexion();
$pdo = $conexion->getPdo();

if(isset($_POST['modificar'])){
    $email = $_SESSION['email'];
    $sql= "SELECT * FROM usuarios WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Usuario</title>
</head>
<body>
    <a href="bienvenida.php">Volver</a>

    <form method="post" action="modificarUsuario.php">
        <label for="email">Email:</label>
        <input type="email" name="email" value="<?php echo $_SESSION['email']?>"><br>
        <label for="nombre">Nombre:</label>
        <input type="nombre" name="nombre" value="<?php echo $_SESSION['nombre']?>"><br>

    </form>
</body>
</html>