<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Duplica</title>
</head>
<body>
<?php
    function duplicarCaracteres($cadena) {
        $resultado = ""; // Variable para almacenar la cadena duplicada

        // Recorrer cada carácter de la cadena
        for ($i = 0; $i < strlen($cadena); $i++) {
            // Duplicar el carácter y añadirlo al resultado
            $resultado .= $cadena[$i] . $cadena[$i];
        }

        return $resultado; // Devolver la cadena con caracteres duplicados
    }

    // Ejemplo de uso:
    $cadena = "Hola";
    echo duplicarCaracteres($cadena); // Salida: HHoollaa
?>

</body>
</html>