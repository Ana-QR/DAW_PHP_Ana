<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // //creo un array de 15 números aleatorios
        // $tamanio = 15;
        // $array =[];

        // for($i = 0; $i < $tamanio; $i++){
        //     $array[$i] = rand(1,10);
        // }

        // echo "Array antes de ser rotado: <br>";
        // foreach($array as $elemento){
        //     echo $elemento." ";
        // }

        // //rotación de elementos de array (n => n+1)

        // $aux = $array[$tamanio -1];
        // for($i = $tamanio-1; $i > 0; $i--){
        //     $array[$i] =  $array[$i -1];
        // }
        // $array[0] = $array[$tamanio -1];

        // echo "<br><br><br>Array despues de ser rotado: <br>";
        // foreach($array as $elemento){
        //     echo $elemento." ";
        // }


        $array = [1,2,3,4,5];
        $aux = array_pop($array);
        array_unshift($array, $aux);
        print_r($array);
    ?>
</body>
</html>