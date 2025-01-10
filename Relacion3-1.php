<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arraynumeros=[1,2,3,4,5,6,7,8];

        function mostrarNumeros($array) {
            foreach ($array as $numeros) {
                echo $numeros;
            }
            echo"<br>";
        }

        //a)recorrer array
        mostrarNumeros($arraynumeros);

        //b)Ordenar 
        sort($arraynumeros);
        foreach ($arraynumeros as $numeros) {
            echo $numeros;
        }

        echo "<br>";

        //c)longitud array
        echo count($arraynumeros);

        //d)buscar elemento dentro del array
        echo array_search(5, $arraynumeros);

        //e) buscará un elemento dentro del array, 
        //pero por el parámetro que llegue a la URL
        $buscar = $_GET['valor'];
        if (in_array($buscar, $arraynumeros)) {
            echo "<br> El numero buscado se encuentra en el array";
        } else {
            echo "<br> El numero buscado no se encuentra en el array";
        }
    ?>
</body>
</html>