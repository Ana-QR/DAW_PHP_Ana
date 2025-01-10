<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $productos = [
            ["nombre" => "Televisor", "precio" => 400, "stock" => 10],
            ["nombre" => "Televisor Sony", "precio" => 350, "stock" => 15],
            ["nombre" => "Televisor Xiaomi", "precio" => 475, "stock" => 25],
            ["nombre" => "Portátil", "precio" => 800, "stock" => 5],
            ["nombre" => "Smartphone", "precio" => 300, "stock" => 20],
        ];

        //Función comparación
        function comparacion($a, $b) {
            // Primero, compara por nombre en orden ascendente
            $nombreComparacion = strcasecmp($a["nombre"], $b["nombre"]);
            if ($nombreComparacion === 0) {
                // Si los nombres son iguales, compara por stock en orden ascendente
                return $a["stock"] <=> $b["stock"];
            }
            return $nombreComparacion;
        }

        usort($productos, 'comparacion');


        //Ordenar array de productos por nombre ascendente
        //Ordenar array de productos por cantidad en stock ascendente
        echo "<h2>Productos Ordenados:</h2>";
        foreach ($productos as $producto) {
            echo "Producto: " . $producto["nombre"] . " - Precio: " . $producto["precio"] . "€ - Stock: " . $producto["stock"] . "<br>";
        }

        //Verificar si existe el producto
        echo "<h2>Verificación de Existencia:</h2>";
        $posicion = array_search("Televisor", $nombre);

        if ($posicion !== false) {
            echo "El producto 'Televisor' sí existe en la lista en la posición $posicion.";
        } else {
            echo "El producto 'Televisor' no existe en la lista.";
        }

        //Valor total de todos los productos 
        $valorTotal = 0;
        foreach ($productos as $producto) {
            $valorTotal += $producto["precio"] * $producto["stock"];
        }

        echo "<h2>Valor Total de los Productos en Stock:</h2>";
        echo "El valor total es: " . $valorTotal . "€";
    ?>
</body>
</html>