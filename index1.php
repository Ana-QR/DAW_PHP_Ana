<html>
    <body>
        <form method="post" action="">
        <label for="numero">Introduce un numero, 1 o 2: </label>
        <input type="text" id="numero" name="numero">
        <input type="submit" value="Enviar">
        </form>

        <form method="post" action="index1.php">
            <input type="submit" value="Volver al menu">
        </form>
        <?php
        $numero = null;

        if (isset($_POST['numero']) && !is_null($_POST['numero'])) {
            $numero = (int)htmlspecialchars($_POST['numero']);
        }

        if($numero == 1 && $numero != null){
            include (dirname(__FILE__)."/".'actividad1.php');
        }else{
            if($numero == 2 && $numero != null){
                include (dirname(__FILE__)."/".'actividad2.php');
            }
        }

        /*
        header:
        switch($opcion){
        case 1:
            header("Location: ejercicio1.php");
            exit;
        case 2:
            header("Location: ejercicio2.php");
            exit;
        default:
            echo"esa opcion no existe";
        }
        */

        ?>
    </body>
</html>