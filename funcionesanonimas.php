<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $multiplicador_por_tres= function(int $numero){
            return $numero*3;
        };

        echo $multiplicador_por_tres(10);

        $multiplicador = function($a, $b){
            return $a + $b;
        };
        $numeros = range(1,10);
        $numeros2 = range(1,10);
        $lista = array_map($multiplicador_por_tres, $numeros, $numeros2);
        echo implode(" ", $lista);

        $lista2=$multiplicador($numeros,$numeros2);
        echo implode(" ", $lista2);
    ?>
</body>
</html>