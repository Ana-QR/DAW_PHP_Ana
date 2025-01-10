<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Array asociativo con el censo de población de varios países
        $censoPoblacion = array(
            "España" => 47350000,   // Población aproximada de España
            "Portugal" => 10310000, // Población aproximada de Portugal
            "Francia" => 67410000,  // Población aproximada de Francia
            "Italia" => 59550000,   // Población aproximada de Italia
            "Grecia" => 10720000    // Población aproximada de Grecia
        );
        
        // Mostrar el array
        print_r($censoPoblacion);
    ?>
</body>
</html>