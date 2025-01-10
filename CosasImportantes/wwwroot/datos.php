<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $usuarios = [
        "Ana" => ["contraseña" => "contrasenia", "nombre" => "Ana", "apellido1" => "Quero", "apellido2" => "de la Rosa", "edad" => 20, "fechaAlta" => "2020-11-19"],
        "Vane" => ["contraseña" => "contrasenia", "nombre" => "Vanesa", "apellido1" => "Garcia", "apellido2" => "Pozas", "edad" => 20, "fechaAlta" => "2020-11-18"],
        "Miguel" => ["contraseña" => "contrasenia", "nombre" => "Miguel Anguel", "apellido1" => "Martos", "apellido2" => "Alcaraz", "edad" => 21, "fechaAlta" => "2020-11-17"]
    ];


    $libros = [
        "1234567890123" => ["unidades" => 30, "titulo" => "Una corte de alas y ruina", "editorial" => "Croos Book", "año" => 2017, "autores" => ["Sarah", "J", "Maas"]],
        "3210987654321" => ["unidades" => 45, "titulo" => "Alas de sangre", "editorial" => "Planeta", "año" => 2023, "autores" => ["Rebecca", "Yarros", "Ortiz"]],
        "8794562378123" => ["unidades" => 27, "titulo" => "Harry Potter y la piedra filosofal", "editorial" => "Minalima", "año" => 1996, "autores" => ["J", "K", "Rowling"]],
        "4758219347289" => ["unidades" => 50, "titulo" => "Una corte de hielo y estrellas", "editorial" => "Croos Book", "año" => 2018, "autores" => ["Sarah", "J", "Maas"]]
    ];


    $prestamos = [
        ["isbn" => "1234567890123", "usuario" => "Ana", "fechaInicio" => "2024-08-02"],
        ["isbn" => "3210987654321", "usuario" => "Miguel", "fechaInicio" => "2024-02-22"],
        ["isbn" => "4758219347289", "usuario" => "Ana", "fechaInicio" => "2024-11-29"]
    ];

    function login($usu, $pw)
    {
        global $usuarios;
        // Recorremos todos los usuarios con foreach
        foreach ($usuarios as $nombre => $datos) {
            // Verifica si el nombre coincide y la contraseña es correcta
            if ($nombre === $usu && $datos["contraseña"] === $pw) {
                echo "El usuario ".$nombre." existe";
                return true;
            }
        }

        // Si no se encuentra el usuario
        echo "Usuario o contraseña incorrectos.";
        return false;
    }

    // Prueba de la función login
    login("Ana", "contrasenia"); // Cambia los valores para probar diferentes casos.
    echo "<br>";

    function escribeUsuario($usu) {
        global $usuarios;

        if (isset($usuarios[$usu])) {
            // Convertir la fecha a un objeto DateTime
            $alta = new DateTime($usuarios[$usu]["fechaAlta"]);

            // Configurar el idioma para mostrar el mes en español
            setlocale(LC_TIME, 'es_ES.UTF-8');

            // Formatear la fecha
            $fechaFormateada = strftime("%d de %B de %Y", $alta->getTimestamp());

            // Imprimir los datos del usuario
            echo $usuarios[$usu]["apellido1"] . " " . $usuarios[$usu]["apellido2"] . ", " . $usuarios[$usu]["nombre"];
            echo "<br>Está con nosotros desde el " . $fechaFormateada . ".<br>";
        } else {
            echo "El usuario '$usu' no existe.<br>";
        }
    }

    
    escribeUsuario("Ana");
    
    



    ?>
</body>

</html>