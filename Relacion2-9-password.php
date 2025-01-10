<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password</title>
</head>
<body>
    <?php
        function esContrasenaValida($contrasena) {
            // Comprobar longitud entre 6 y 15 caracteres
            if (strlen($contrasena) < 6 || strlen($contrasena) > 15) {
                return false;
            }
            
            // Comprobar que tenga al menos un número
            if (!preg_match('/\d/', $contrasena)) {// el \d busca cualquier numero segun el manual de php
                return false;
            }
            
            // Comprobar que tenga al menos una letra mayúscula
            if (!preg_match('/[A-Z]/', $contrasena)) {
                return false;
            }
            
            // Comprobar que tenga al menos una letra minúscula
            if (!preg_match('/[a-z]/', $contrasena)) {
                return false;
            }
            
            // Comprobar que tenga al menos un carácter no alfanumérico
            if (!preg_match('/\W/', $contrasena)) { //\W busca cualquier caracter
                return false;
            }
            
            // Si pasa todas las comprobaciones, es válida
            return true;
        }
        
        // Ejemplo de uso:
        $contrasena = "Contraseña";
        if (esContrasenaValida($contrasena)) {
            echo "La contraseña es válida.";
        } else {
            echo "La contraseña no es válida.";
        }


    ?>
</body>
</html>