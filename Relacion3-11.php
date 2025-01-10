<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mis Películas Favoritas</title>
    <style>
        table {
            width: 50%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
    <?php
        // Array con las 10 películas favoritas
        $peliculas = ["Inception","El Padrino","Interstellar","Los Vengadores","Pulp Fiction","La lista de Schindler","El Señor de los Anillos","El caballero oscuro","Matrix","Forrest Gump"
        ];

        // Imprimir en párrafos con formato
        echo "<h2>Mis Películas Favoritas en Párrafos:</h2>";
        foreach ($peliculas as $index => $pelicula) {
            echo "<p>Película " . ($index + 1) . ": $pelicula</p>";
        }

        // Función para generar un color aleatorio en formato hexadecimal
        function colorAleatorio() {
            return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
        }

        // Imprimir en tabla con CSS y colores aleatorios para cada título
        echo "<h2>Mis Películas Favoritas en Tabla:</h2>";
        echo "<table>";
        echo "<tr><th>Posición</th><th>Película</th></tr>";

        foreach ($peliculas as $index => $pelicula) {
            $color = colorAleatorio();
            echo "<tr>";
            echo "<td>" . ($index + 1) . "</td>";
            echo "<td style='color: $color;'>$pelicula</td>";
            echo "</tr>";
        }

        echo "</table>";
    ?>
</body>
</html>
