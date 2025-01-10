<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fechas</title>
</head>
<body>
    <?
        $fecha1 = date(format:"d-m-y");
        echo "Hoy: ". $fecha1 . "<br>";

        $fecha2 = date(format:"d-m-y", timestamp: strtotime(datetime:"+1 day"));
        echo "Mañana: ". $fecha2 . "<br>";

        $fecha3 = date(format:"d-m-y", timestamp: strtotime(datetime:"-1 day"));
        echo "Ayer: ". $fecha3 . "<br>";
    ?>
    
</body>
</html>