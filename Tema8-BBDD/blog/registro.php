<?php

session_start();
require_once 'requires/conexion.php';

// Formulario de Registro
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registro'])) {
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
            // INSERT INTO tabla (columna1, columna2, ...) VALUES (valor1, valor2, ...);
            $stmt = $pdo->prepare("INSERT INTO usuarios (email, password_hash) VALUES (:email, :password_hash)");
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password_hash', $password_hash);
            $stmt->execute();
            echo "Registro exitoso!";
        } else {
            echo "El email ya está registrado.";
        }
    } else {
        echo "Por favor completa todos los campos de registro.";
    }
}
?>