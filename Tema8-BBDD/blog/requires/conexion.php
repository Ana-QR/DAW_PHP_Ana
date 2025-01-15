<?php
//Configuración de la conexion con PDO //para conectarme al gestor de base de datos
$dns="mysql:host=localhost;dbname=blog;charset=utf8mb4";
$username= "root";
$password= "";

try {
    $pdo = new PDO($dns, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexion realizada con éxito";
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: ". $e->getMessage());
}
?>