<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // //dado un array de numeros enteros, se debe verificar si un numero especifico
        // //esta presente en el array y, además, contar cuantos elementos hay en dicho array.
        // //Debes utilizar las funciones in_array() para realizar la busqueda y count() para
        // //contar el numero de elementos. El programa debe devolver si el numero existe o no
        // //y la cantidad total de elementos.

        // //ejemplo: array contiene [10, 20, 30, 40, 50]. Se debe comprobar si el numero 30
        // //está presente y cuantos elementos hay en total en el array

        // $arrayNumeros = array(10, 20, 30, 40, 50);

        // $numeroEspeci= 10;
        // if (in_array($numeroEspeci, $arrayNumeros)) {
        //     echo "El numero está en el aray";
        // }else{
        //     echo "El numero NO está en el array";
        // };

        // echo"El numero de posiciones del array es ". count($arrayNumeros);

        // //////////////////////////////////////////////////////
        // //array frutas
        // $arrayFrutas = ["manzana", "platano", "cereza", "naranja", "pera"];
        // print_r($arrayFrutas);
        // echo "<br>";
        // echo var_dump(sort($arrayFrutas));
        // print_r($arrayFrutas);
        // echo "<br>";
        // unset($arrayNumeros[array_search("naranja", $arrayNumeros)]);
        // print_r($arrayFrutas);
        // echo "<br>";

//////////////////////////////////////////////////////////////////////////
        //simula el comportamiento de una pila utilizando arrays en PHP.
        //Primero, inserta un nuevo elemento al final del array usando array_push(). Luego 
        //extrae el último elemento de la pila con array_pop(). Finalmente, voltea
        //el array usando array_reverse() para mostrar los elementos en orden inverso
        // al original 


        // Crear una pila vacía
        $pilaVacia = [];

        // Insertar elementos en la pila utilizando array_push()
        array_push($pilaVacia, "Primer elemento");
        array_push($pilaVacia, "Segundo elemento");
        array_push($pilaVacia, "Tercer elemento");

        print_r($pilaVacia);
        echo "<br>";

        // Extraer el último elemento de la pila utilizando array_pop()
        $extraer = array_pop($pilaVacia);
        echo "Elemento extraído de la pila: " . $extraer;
        echo "<br>";
        print_r($pilaVacia);

        // Voltear el array para mostrar los elementos en orden inverso
        $pilaInvertida = array_reverse($pilaVacia);
        echo "<br>";
        echo "Pila en orden inverso:";
        echo "<br>";
        print_r($pilaInvertida);


        //////////////////////////////////////////////////////////////////////
        
        
        $productos = [
            ["nombre"=> "Aspiradora","precio"=> 150,"cantidad"=> 20],
            ["nombre"=> "Lavadora", "precio"=> 300,"cantidad"=> 5],
            ["nombre"=> "Televisor", "precio"=> 500, "cantidad"=> 10]
        ];

        

    ?>
</body>
</html>