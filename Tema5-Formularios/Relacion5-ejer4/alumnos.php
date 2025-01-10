<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Array inicial de alumnos con notas
        function crearArrayAlumnos(){
            return [
            "Marta" => 7.8,
            "Luis" => 5,
            "Lorena" => 6.9
            ];
        }
        
        // Crear el array inicial de alumnos
        $alumnos = crearArrayAlumnos();

        // Función para mostrar las notas en una tabla
        function mostrarNotas($alumnos) {
            echo "<table border='1'>";
            echo "<tr><th>Alumno</th><th>Nota</th></tr>";
            foreach ($alumnos as $nombre => $nota) {
                echo "<tr><td>$nombre</td><td>$nota</td></tr>";
            }
            echo "</table>";
        }

        // Función para añadir un alumno y su nota
        function addAlumno(&$alumnos, $nombre, $nota) {
            if (array_key_exists($nombre, $alumnos)) {
                echo "<br>El alumno $nombre ya existe.";
            } else {
                echo "<br>Alumno $nombre añadido con la nota $nota.";
            }
            $alumnos[$nombre] = $nota;
        }

        // Función para calcular y mostrar la media de las notas
        function medias($alumnos) {
            $total = 0;
            $numNotas = count($alumnos);

            foreach ($alumnos as $nota) {
                $total += $nota;
            }

            if ($numNotas > 0) {
                $media = $total / $numNotas;
            } else {
                $media = 0;
            }

            echo "<br>La media total de notas es: " . number_format($media, 2);
        }
        
        // Mostrar el array inicial
        mostrarNotas($alumnos);

        // Manejar formulario para agregar alumnos
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $nota = (float)$_POST['nota'];
            addAlumno($alumnos, $nombre, $nota);
            // Mostrar el array actualizado
            mostrarNotas($alumnos);
        }
        
    ?>
</body>
</html>
