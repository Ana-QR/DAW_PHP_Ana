<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor dolar</title>
</head>
<body>
<?php
    // Definimos la tasa de conversión de euros a dólares
    $tasaConversion = 1.05; // Ejemplo: 1 euro = 1.05 dólares (puede variar)

    // Cantidad en euros que queremos convertir
    $euros = 100; // Puedes cambiar este valor

    // Convertimos los euros a dólares
    $dolares = $euros * $tasaConversion;

    // Mostramos el resultado
    echo "$euros euros son equivalentes a " . round($dolares, 2) . " dólares.<br>";

    // También podemos usar printf para formatear el resultado con dos decimales
    printf("%.2f euros son equivalentes a %.2f dólares.<br>", $euros, $dolares);
    ?>
    
</body>
</html>