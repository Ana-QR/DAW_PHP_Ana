<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horoscopò</title>
</head>
<body>
<?php
function obtenerHoroscopo($dia, $mes) {
    return match (true) {
        ($mes == 1 && $dia >= 20) || ($mes == 2 && $dia <= 18) => "Acuario",
        ($mes == 2 && $dia >= 19) || ($mes == 3 && $dia <= 20) => "Piscis",
        ($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 19) => "Aries",
        ($mes == 4 && $dia >= 20) || ($mes == 5 && $dia <= 20) => "Tauro",
        ($mes == 5 && $dia >= 21) || ($mes == 6 && $dia <= 20) => "Géminis",
        ($mes == 6 && $dia >= 21) || ($mes == 7 && $dia <= 22) => "Cáncer",
        ($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 22) => "Leo",
        ($mes == 8 && $dia >= 23) || ($mes == 9 && $dia <= 22) => "Virgo",
        ($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22) => "Libra",
        ($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21) => "Escorpio",
        ($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21) => "Sagitario",
        ($mes == 12 && $dia >= 22) || ($mes == 1 && $dia <= 19) => "Capricornio",
        default => "Fecha no válida",
    };
}

// Ejemplo de uso
$dia = 15;
$mes = 5;
echo "El signo zodiacal para la fecha $dia/$mes es: " . obtenerHoroscopo($dia, $mes);
?>
</body>
</html>