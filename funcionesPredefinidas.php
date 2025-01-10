<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Predefinidas</title>
</head>
<body>
    <form method="POST" action="">
        <label for="palabra1">Ingresa una palabra: </label>
        <input type="text" id="palabra1" name="palabra1">

        <br>

        <label for="palabra2">Ingresa otra palabra: </label>
        <input type="text" id="palabra2" name="palabra2">
        
        <br>

        <input type="submit" value="Enviar">
    </form>

    <?php
        //1. Crea un formulario que permita ingresar dos palabras. Usa la función strcmp() para comparar ambas cadenas. 
        //Si las cadenas son iguales, muestra un mensaje que diga "Las cadenas son iguales". Si no lo son, indica cuál es 
        //mayor en el orden lexicográfico.

        $palabra1;
        $palabra2;

        if((isset($_POST["palabra1"])) && (isset($_POST["palabra2"]))){
            $palabra1 = $_POST['palabra1'];
            $palabra2 = $_POST['palabra2'];

            $resultado=strcmp($palabra1, $palabra2);

            if ($palabra1 == $palabra2) {
                echo "Las cadenas son iguales";
            }else{
                if ($resultado < 0) {
                    echo "La primera palabra ". $palabra1 . " es menor que la segunda palabra ". $palabra2;
                }elseif ($resultado > 0) {
                    echo "La primera palabra ". $palabra1 . " es mayor que la segunda palabra ". $palabra2;
                }
            }
        }

    ?>
</body>
</html>