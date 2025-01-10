<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>factorial</title>
</head>
<body>
    <?php
    //Escribe una función para calcular el factorial de un número 
    //que recibirá como argumento. Prueba a hacerlo usando recursividad.
    
    

    function factorial($numero): float|int {
        if ($numero == 0 || $numero == 1) {
            return 1;
        }else{
            return $numero*factorial($numero-1);
        }

    };

    echo factorial(5);


    ?>
</body>
</html>