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

    //modifica al usuario
    $emailNuevo = $_POST['email'];
    $nombreNuevo = $_POST['nombre'];
    $sql = "UPDATE usuarios SET email = :emailNuevo, Nombre = :nombreNuevo WHERE id= :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':emailNuevo', $emailNuevo);
    $stmt->bindParam(':nombreNuevo', $nombreNuevo);
    $stmt->bindParam(':id', $user['id']);
    $stmt->execute();
    $_SESSION['email'] = $emailNuevo;
    $_SESSION['nombre'] = $nombreNuevo;
    echo "Usuario modificado con exito";
    echo "<script>
            setTimeout(function(){
                window.location.href='bienvenida.php'}, 2000);
            </script>";
    exit();
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
        <input type="submit" name="modificar" value="Modificar">

    </form>
</body>
</html>