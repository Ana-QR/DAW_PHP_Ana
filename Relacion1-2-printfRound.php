<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Definimos el radio de la esfera
    $radio = 5;

    // Constante de pi
    $pi = pi();

    // Cálculos
    $longitud = 2 * $pi * $radio;
    $superficie = 4 * $pi * pow($radio, 2);
    $volumen = (4 / 3) * $pi * pow($radio, 3);

    // Mostramos los resultados usando round() (redondeando a dos decimales)
    echo "Usando round():<br>";
    echo "Longitud: " . round($longitud, 2) . " unidades<br>";
    echo "Superficie: " . round($superficie, 2) . " unidades cuadradas<br>";
    echo "Volumen: " . round($volumen, 2) . " unidades cúbicas<br><br>";

    // Mostramos los resultados usando printf() (formato de dos decimales)
    echo "Usando printf():<br>";
    printf("Longitud: %.2f unidades<br>", $longitud);
    printf("Superficie: %.2f unidades cuadradas<br>", $superficie);
    printf("Volumen: %.2f unidades cúbicas<br>", $volumen);
    ?>

</body>
</html>