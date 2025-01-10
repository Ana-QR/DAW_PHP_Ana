<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $array = [];
        $arrayCuadrados = [];
        $arrayCubos = [];

        //guardar 20 valores entre 0 y 100 en el array
        for ($i=0; $i < 20; $i++) { 
            array_push($array, rand(1,0));
        }

        //almacenar cuadrados en otro array
        for ($i= 0; $i < count($array); $i++) {
            $arrayCuadrados[$i] = $array[$i] **2;
        }

        //Almacenar cubos en otro array
        for ($i= 0; $i < count($array); $i++) {
            $arrayCubos[$i] = $array[$i] **3;
        }

        function mostrarArray($array, $arrayCuadrados, $arrayCubos) {
            for ($i=0; $i < count($array) ; $i++) { 
                echo $array[$i] ."                     ". $arrayCuadrados. "                  ". $arrayCubos;
                echo"<br>";
            }
        }

        mostrarArray($array, $arrayCuadrados, $arrayCubos);
    ?>
    
</body>
</html>