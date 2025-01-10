<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Definimos las variables
    $pais = "España";            // Cadena de texto (string)
    $habitantes = 47350000;       // Número entero (integer)
    $continente = "Europa";       // Cadena de texto (string)

    // Mostramos el valor de cada variable y su tipo de dato
    echo "País: $pais<br>";
    echo "Tipo de dato de país: " . gettype($pais) . "<br><br>";

    echo "Habitantes: $habitantes<br>";
    echo "Tipo de dato de habitantes: " . gettype($habitantes) . "<br><br>";

    echo "Continente: $continente<br>";
    echo "Tipo de dato de continente: " . gettype($continente) . "<br>";
    ?>
</body>
</html>