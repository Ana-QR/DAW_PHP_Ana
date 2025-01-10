<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arrayNombres = ["Almería", "Cádiz", "Córdoba", "Granada", "Huelva", "Jaén", "Málaga", "Sevilla"];

        // Función para mostrar el array
        // Esta función recorre el array y muestra cada provincia con su índice.
        function mostrarArray($array) {
            foreach ($array as $indice => $arrayNombres) {
                echo "Índice $indice: $arrayNombres<br>";
            }
            echo "<br>";
        }

        // Mostramos el array 
        echo "Provincias de Andalucía:<br>";
        mostrarArray($arrayNombres);

        // Función borrar elemento del array según índice
        // Recibe el array por referencia para que se modifique directamente
        // y el índice del elemento que se desea eliminar.
        function borrarElemento(&$array, $indice) {
            // Verificamos si el índice existe en el array usando array_key_exists
            if (array_key_exists($indice, $array)) {
                // Eliminamos el elemento con el índice especificado
                unset($array[$indice]);
                echo "Elemento de índice $indice eliminado.<br>";
            } else {
                // Si el índice no existe en el array, mostramos un mensaje de error
                echo "El índice $indice no existe en el array.<br>";
            }
        }

        // Llamamos a la función borrarElemento para eliminar el elemento con índice 2
        // En este caso, eliminará "Córdoba" ya que está en la posición 2 del array.
        borrarElemento($arrayNombres, 2);

        // Mostramos el array después de eliminar el elemento especificado
        echo "Provincias después de eliminar el índice:<br>";
        mostrarArray($arrayNombres);

    ?>
</body>
</html>