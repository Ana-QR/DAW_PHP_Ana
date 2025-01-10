<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array = [];
    $arraycomplementario = [];

    for ($i=0; $i < 20; $i++) { 
        $array[$i] = rand(0,1);
    }

    for ($i=0; $i < count($array) ; $i++) { 
        if($arraycomplementario[$i]== 1){
            $arraycomplementario[$i] = 0;
        }else{
            $arraycomplementario[$i] =1;
        }
    }
    ?>
</body>
</html>