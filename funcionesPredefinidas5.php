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
        //5. Pide al usuario que ingrese una frase y una palabra. Usa str_starts_with() para
        //verificar si la frase empieza con la palabra ingresada. Muestra un mensaje 
        //indicativo. Comprueba usando el método str_ends_with() si la frase termina con
        //una determinada palabra. Igual que antes, muestra un mensaje indicativo. 

        $frase;
        $palabra1;

        if((isset($_POST["frase"])) && (isset($_POST["palabra1"]))){
            $frase = $_POST['frase'];
            $palabra1 = $_POST['palabra1'];

            if(str_starts_with($frase, $palabra1)== true){
                echo 'La palabra '.$palabra1 . " es lo primero que se encuentra en ".$frase;
            }elseif(str_ends_with($frase, $palabra1)== true){
                echo 'La palabra '.$palabra1 . " es lo ultimo que se encuentra en ".$frase;
            }
        }

    ?>
</body>
</html>