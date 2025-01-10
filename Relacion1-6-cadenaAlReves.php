<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadena al revés</title>
</head>
<body>
    <?php
        $cadena = "Hola";
        $cadenaInvertida = " ";
        for ($i=strlen($cadena)-1; $i>=0 ; $i--) { //strlen te devuelve la longitud de la cadena
            $cadenaInvertida .= $cadena[$i];
        }
        echo $cadenaInvertida;

    ?>
</body>
</html>