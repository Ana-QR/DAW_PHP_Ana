<?php

session_start();
require_once 'requires/conexion.php';

// Formulario de Registro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['botonRegistro'])) {
    // Compruebo que el email es válido
    $email = filter_var(trim($_POST['emailRegistro']), FILTER_VALIDATE_EMAIL);
    // Quito los espacios en blanco al comienzo y final de la contraseña
    $password = trim($_POST['passwordRegistro']);


    //Compruebo si el email y la contraseña ya están en la tabla
    if ($email && $password) {
        $stmt = $pdo->prepare("SELECT id FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        // Si no existe el email en la base de datos, se registra
        if ($stmt->rowCount() == 0) {
            $password_hash = password_hash($password, PASSWORD_BCRYPT);
            $nombre = $_POST['nombreRegistro'];
            $apellidos = $_POST['apellidosRegistro'];
            $fecha = date('Y-m-d');
            // INSERT INTO tabla (columna1, columna2, ...) VALUES (valor1, valor2, ...);
            $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, apellidos, email, password, fecha) VALUES (:nombre, :apellidos, :email, :password_hash, :fecha)");
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':apellidos', $apellidos);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password_hash', $password_hash);
            $stmt->bindParam(':fecha', $fecha);
            $stmt->execute();
            $_SESSION['succcess_message']="Registro realizado con exito";
            header("Location: index.php");
            exit();
        } else {
            echo "El email ya está registrado.";
        }
    } else {
        echo "Por favor completa todos los campos de registro.";
    }
}
?>