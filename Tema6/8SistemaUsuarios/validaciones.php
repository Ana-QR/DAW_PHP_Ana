<?php

// Definimos el Trait con las validaciones comunes
trait Validaciones
{
    // Método para validar un email
    public function validarEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("El email proporcionado no es válido.");
        }
    }

    // Método para validar la contraseña
    public function validarContrasena($contrasena)
    {
        // Verificamos que la contraseña tenga al menos 8 caracteres, con letras y números
        $longitudMinima = 8; // Longitud mínima de la contraseña
        if (strlen($contrasena) < $longitudMinima) {
            throw new Exception("La contraseña debe tener al menos " . $longitudMinima . " caracteres.");
        }
        if (!preg_match('/[A-Za-z]/', $contrasena) || !preg_match('/[0-9]/', $contrasena)) {
            throw new Exception("La contraseña debe contener al menos una letra y un número.");
        }
    }
}

// Clase Usuario con las propiedades y métodos necesarios
class Usuario
{
    use Validaciones; // Usamos el Trait para las validaciones

    private $nombre;
    private $email;
    private $contrasena;

    // Constructor para inicializar los valores
    public function __construct($nombre, $email, $contrasena)
    {
        // Validamos el email y la contraseña
        $this->validarEmail($email);
        $this->validarContrasena($contrasena);
        
        $this->nombre = $nombre;
        $this->email = $email;
        $this->contrasena = password_hash($contrasena, PASSWORD_DEFAULT); // Guardamos la contraseña de forma segura
    }

    // Método para cambiar la contraseña
    public function cambiarContrasena($nuevaContrasena)
    {
        // Validamos la nueva contraseña
        $this->validarContrasena($nuevaContrasena);
        
        $this->contrasena = password_hash($nuevaContrasena, PASSWORD_DEFAULT); // Guardamos la nueva contraseña de forma segura
    }

    // Método para autenticar al usuario
    public function autenticar($email, $contrasena)
    {
        // Comprobamos si el email coincide
        if ($email !== $this->email) {
            throw new Exception("El email no es correcto.");
        }

        // Comprobamos si la contraseña es correcta
        if (!password_verify($contrasena, $this->contrasena)) {
            throw new Exception("La contraseña no es correcta.");
        }

        return true; // Las credenciales son correctas
    }

    // Métodos getters para obtener la información
    public function obtenerNombre()
    {
        return $this->nombre;
    }

    public function obtenerEmail()
    {
        return $this->email;
    }
}

// Ejemplo de uso
try {
    // Crear un nuevo usuario
    $usuario = new Usuario("Juan Perez", "juan.perez@example.com", "Contraseña123");

    // Autenticar usuario
    if ($usuario->autenticar("juan.perez@example.com", "Contraseña123")) {
        echo "Usuario autenticado correctamente.\n";
    }

    // Cambiar la contraseña
    $usuario->cambiarContrasena("NuevaContraseña456");
    echo "Contraseña cambiada exitosamente.\n";

    // Intentar autenticar con la nueva contraseña
    if ($usuario->autenticar("juan.perez@example.com", "NuevaContraseña456")) {
        echo "Usuario autenticado con la nueva contraseña.\n";
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
?>
