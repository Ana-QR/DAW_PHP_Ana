<?php
$dsn = "mysql:host=localhost;dbname=mistiendas;charset=utf8mb4";
$username = "root";
$password = "";

require_once 'config/config.php';

//$conexion =new Conexion();

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "Conexion realizada con éxito";
} catch (PDOException $e) {
    die("Error al conectar con la base de datos: ". $e->getMessage());
}

// class Conexion{
//     private $pdo;

//     public function 
// }
?>