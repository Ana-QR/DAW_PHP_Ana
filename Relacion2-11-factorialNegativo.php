<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factorial negativo</title>
</head>
<body>
    <?php
        function calcularFactorial($numero) {
            // Comprobar si el número es negativo
            if ($numero < 0) {
                // Lanzar una excepción si el número es negativo
                throw new InvalidArgumentException("El número no puede ser negativo.");
            }

            // Si el número es 0 o 1, su factorial es 1
            if ($numero === 0 || $numero === 1) {
                return 1;
            }

            // Calcular el factorial
            $factorial = 1;
            for ($i = 2; $i <= $numero; $i++) {
                $factorial *= $i;
            }

            return $factorial;
        }

        // Ejemplo de uso:
        try {
            $numero = 5; // Cambia este valor para probar
            echo "El factorial de $numero es: " . calcularFactorial($numero);
        } catch (InvalidArgumentException $e) {
            // Capturar la excepción si el número es negativo
            echo "Error: " . $e->getMessage();
        }
    ?>

    
</body>
</html>