<html>
    <body>
        <form method="post" action="">
        <label for="numero">Introduce un numero entre 1 y 10: </label>
        <input type="text" id="numero" name="numero">
        <input type="submit" value="Enviar">
        </form>

        <?php
        $numero = null;
        if (isset($_POST['numero']) && !is_null($_POST['numero'])) {
            $numero = (int)htmlspecialchars($_POST['numero']);
        }
        
        for($i = 1; $i <= 10; $i++){
            if($i == $numero){
               break; 
            }
        echo $i;
        }
        


        ?>
    </body>
</html>