<?php
session_start();

$_SESSION['errorInicioSesion'] = $_SESSION['errorInicioSesion'] ?? 0; // Guardo el error de inicio de sesión
$_SESSION['ultimoIntento'] = $_SESSION['ultimoIntento'] ?? time(); // Guarda el tiempo del último intento

require_once 'requires/conexion.php';

// Formulario de Inicio de Sesión
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['botonLogin']) && $_SESSION['errorInicioSesion'] < 3) {
    $email = filter_var(trim($_POST['emailLogin']), FILTER_VALIDATE_EMAIL);
    $password = trim($_POST['passwordLogin']);

    if ($email && $password) {
        //$stmt = $pdo->prepare("SELECT password_hash FROM usuarios WHERE email = :email");
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() == 1) {
            $user = $stmt->fetch();
            if (password_verify($password, $user['password'])) {
                $_SESSION['errorInicioSesion'] = 0;
                header("Location: index.php");
                exit();
            } else {
                $_SESSION['errorPasswordLogin'] = "La contraseña no es correcta";
                $_SESSION['errorInicioSesion']++;
                $_SESSION['ultimoIntento'] = time(); // Registro la hora del último intento fallido
            }
        } else {
            echo "Email no registrado.";
        }
    } else {
        echo "Por favor completa todos los campos de inicio de sesión.";
    }
}
?>