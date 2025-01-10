<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $operacion_uno = fn($valor2) => $valor1 + $valor2;
        $operacion_dos = fn($valor2) => $valor1 - $valor2;

        $numero = "uno";
        $op = "operacion_".$numero;
        echo "<br> Ahora sumo dos números usando Funciones variables: " . $$op(5); // Imprime 105
        
        $op = "";
        $numero = "dos";
        $op = "operacion_".$numero;
        echo "<br> Ahora resto dos números usando Funciones variables: " . $$op(2); // Imprime 98
    ?>
</body>
</html>