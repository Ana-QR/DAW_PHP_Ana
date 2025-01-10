<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piramide</title>
</head>
<body>
    <?php
        $niveles = 10;

        for ($i=1; $i<= $niveles ; $i++) { 
            //espacios a la izquierda del *
            for ($j= $niveles - $i; $j > 0 ; $j--) { 
                echo "&nbsp;&nbsp;";
            }

            //asteriscos
            for ($k=0; $k < (2*$i -1); $k++) { 
                echo "*";
            }

            echo "<br>";
        }

        
    ?>
</body>
</html>