<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
    <?php
    // Generamos dos números aleatorios entre 1 y 6
    $dado1 = rand(1, 6); //rand genera un numero aleatorio entre los numeros que le pongas
    $dado2 = rand(1, 6);

    // Mostramos los valores de los dados
    echo "Dado 1: $dado1<br>";
    echo "Dado 2: $dado2<br>";

    // Comprobamos si los valores son iguales
    if ($dado1 == $dado2) {
        echo "¡Ha salido una pareja de valores iguales!<br>";
    }

    // Cual es el mayor valor de los dos
    $mayor = max($dado1, $dado2);
    echo "El mayor valor obtenido es: $mayor<br>";
        
    ?>
</body>
</html>