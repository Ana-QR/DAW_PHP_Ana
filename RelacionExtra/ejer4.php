<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include(dirname(__FILE__). "/ejercicio4todos.php");
    // Función que calcula la extensión del archivo
    function calcula_extension($nombre_fichero) {
        // Obtener la extensión usando pathinfo y convertirla a mayúsculas
        return strtoupper(pathinfo($nombre_fichero, PATHINFO_EXTENSION));
    }
    
    // Función que devuelve el tipo de fichero según la extensión
    function tipo_fichero($extension) {
        // Tabla de tipos de archivos según la extensión
        $tipos = [
            "PDF" => "Documento Adobe PDF",
            "TXT" => "Documento de texto",
            "HTML" => "Documento HTML",
            "HTM" => "Documento HTML",
            "PPT" => "Presentación Microsoft Powerpoint",
            "DOC" => "Documento Microsoft Word",
            "GIF" => "Imagen GIF",
            "JPG" => "Imagen JPG",
            "ZIP" => "Archivo comprimido ZIP"
        ];
    
        // Devolver el tipo de fichero si existe en la tabla; en caso contrario, indicar "Archivo <EXTENSIÓN>"
        return $tipos[$extension] ?? "Archivo " . $extension;
    }

    $solucion = $_POST


    
    ?>
</body>
</html>