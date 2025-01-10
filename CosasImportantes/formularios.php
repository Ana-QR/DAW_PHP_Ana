<html>
    <body>
        
        <form method="post" action="">

            <label for="divisor">Introduzca el divisor: </label>
            <input type="text" id="divisor" name="divisor">

            <br>

            <label for="tope">Introduzca el tope: </label>
            <input type="text" id="tope" name="tope">

            <br>

            <input type="submit" value="Enviar">

        </form>

        <?php
            
            if(isset($_POST["divisor"]) && isset($_POST["tope"]) //Comprueba si el formulario ha sido enviado y si existe un dato llamado numero && se asegura que no sea nulo
            && !empty($_POST["divisor"]) && !empty($_POST["tope"])){ //Asegura que los campos no estén vacíos.

                $divisor = htmlspecialchars($_POST["divisor"]); //filtra el valor enviado por el usuario para evitar caracteres perligrosos
                $tope = htmlspecialchars($_POST["tope"]);

                $divisor = (int) $divisor;
                $tope = (int) $tope;

                echo "<h3>Divisor: ".$divisor."</h3>";
                echo "<h3>Tope: ".$tope."</h3>";

                for($i = 1; $i <= $tope; $i++){

                    if($i % $divisor == 0) continue;
                    echo $i."<br>";
    
                }
            }

        ?>
    </body>
</html>