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
        <input type="submit" value="Enviar">
    </form>

    <?php
        //3. Solicita al usuario que ingrese una frase y convierte toda la 
        //cadena a mayúsculas usando strtoupper(). Muestra el resultado al usuario.

        $frase;

        if((isset($_POST["frase"]))){
            $frase = $_POST['frase'];

            $resultado=strtoupper($frase);
            echo $resultado;
        }

    ?>
</body>
</html>