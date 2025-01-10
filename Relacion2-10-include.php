<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include</title>
</head>
<body>
    <?php
    //include (dirname(__FILE__) ."/password.php".);
        function obtenerFechaEnCastellano() {
            // Definir los días de la semana y los meses en español
            $dias = ["domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado"];
            $meses = ["enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre"];

            // Obtener el día, mes y año actual
            $diaSemana = date("w"); // Número del día de la semana (0 para domingo, 6 para sábado)
            $diaMes = date("d");    // Día del mes
            $mes = date("n") - 1;   // Número del mes (1 para enero, 12 para diciembre, restamos 1 para usar el índice del array)
            $anio = date("Y");      // Año actual

            // Formatear la fecha en castellano
            return $dias[$diaSemana] . ", " . $diaMes . " de " . $meses[$mes] . " de " . $anio;
        }
    ?>
</body>
</html>