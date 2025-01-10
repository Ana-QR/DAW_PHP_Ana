<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones Predefinidas2</title>
</head>
<body>
    <form method="POST" action="">
        <label for="frase">Ingresa una frase: </label>
        <input type="text" id="frase" name="frase">

        <br>

        <label for="palabra1">Ingresa una palabra: </label>
        <input type="text" id="palabra1" name="palabra1">

        <br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        //4. Pide al usuario que ingrese una frase y una palabra, luego usa 
        //strpos() para determinar si la palabra está presente en la frase. 
        //Si la palabra está, indica en qué posición empieza; si no, muestra 
        //un mensaje de error. Resuélvelo ahora usando la función str_contains().

        $frase;
        $palabra1;

        if((isset($_POST["frase"])) && (isset($_POST["palabra1"]))){
            $frase = $_POST['frase'];
            $palabra1 = $_POST['palabra1'];

            if(str_contains($frase, $palabra1)== true){
                $posicion = strpos($frase,$palabra1);
                echo 'La palabra '.$palabra1 . " se encuentra en la posicion ".$posicion;
            }else{
                echo "Error, la palabra no se encuentra en la frase";
            }
        }

    ?>
</body>
</html>