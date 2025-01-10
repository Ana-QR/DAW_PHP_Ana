<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEDIDOSONLINE.COM</title>
</head>

<body>
    <form method="get" action="metodos.php">
        <h1>PEDIDOSONLINE.COM</h1>
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>
        <label for="contraseña">Contraseña:</label>
        <input type="password" id="contraseña" name="contraseña" required><br><br>
        <input type="submit" value="Iniciar sesión">
        <br>
        <button>Enviar</button>
    </form>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    //Controlo errores     
    try {
        //Comrpuebo que el usuario y la contraseña están en la base de datos
        if (login($usuario, $contraseña)) {
            
        } else {
            echo "Error: Usuario o contraseña incorrectos.";
        }
        //Controlo errores
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}
?>

<br>
<h3>
    <a href="metodos.php">Volver al login</a>
</h3>