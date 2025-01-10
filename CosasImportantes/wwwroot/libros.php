<?php

// 1. Array de usuarios
// Este array contiene información de varios usuarios. Cada usuario tiene una clave única (nombre de usuario)
// y valores asociados como su contraseña, nombre, apellidos, edad y fecha de alta.
$usuarios = [
    'jdoe' => [ // Usuario "jdoe"
        'contraseña' => '1234', // Contraseña del usuario
        'nombre' => 'John', // Nombre
        'apellido1' => 'Doe', // Primer apellido
        'apellido2' => 'Smith', // Segundo apellido
        'edad' => 30, // Edad
        'fechaAlta' => '2020-05-12' // Fecha en que el usuario se registró
    ],
    // Otros usuarios con estructura similar
    'asmith' => [
        'contraseña' => 'securepass',
        'nombre' => 'Alice',
        'apellido1' => 'Smith',
        'apellido2' => 'Brown',
        'edad' => 25,
        'fechaAlta' => '2019-03-22'
    ],
    'mbrown' => [
        'contraseña' => 'mypassword',
        'nombre' => 'Michael',
        'apellido1' => 'Brown',
        'apellido2' => 'Johnson',
        'edad' => 35,
        'fechaAlta' => '2021-08-17'
    ]
];

// Función para rellenar el array con usuarios generados aleatoriamente
function rellenaUsuarios($cantidad) {
    global $usuarios; // Usamos el array global $usuarios

    // Listas de nombres y apellidos para generar combinaciones aleatorias
    $nombres = ["Juan", "Ana", "Luis", "María", "Carlos", "Lucía", "José", "Elena"];
    $apellidos = ["Pérez", "Gómez", "López", "Martínez", "Sánchez", "Ramírez", "Hernández", "Vega"];

    for ($i = 0; $i < $cantidad; $i++) {
        $nombreUsuario = "usuario" . rand(1000, 9999); // Genera un nombre de usuario único
        $nombre = $nombres[array_rand($nombres)]; // Selecciona un nombre aleatorio
        $apellido1 = $apellidos[array_rand($apellidos)]; // Selecciona un primer apellido aleatorio
        $apellido2 = $apellidos[array_rand($apellidos)]; // Selecciona un segundo apellido aleatorio
        $contraseña = "pass" . rand(1000, 9999); // Contraseña aleatoria
        $edad = rand(18, 60); // Genera una edad entre 18 y 60 años
        $fechaAlta = date("Y-m-d", strtotime("-" . rand(0, 3650) . " days")); // Fecha aleatoria en los últimos 10 años

        // Agrega el nuevo usuario al array global
        $usuarios[$nombreUsuario] = [
            'contraseña' => $contraseña,
            'nombre' => $nombre,
            'apellido1' => $apellido1,
            'apellido2' => $apellido2,
            'edad' => $edad,
            'fechaAlta' => $fechaAlta
        ];
    }
}

// 2. Array de libros
// Este array almacena información de libros. Cada libro está identificado por su ISBN (clave única).
$libros = [
    '9781234567897' => [ // Libro "Don Quijote"
        'unidades' => 5, // Número de unidades disponibles
        'titulo' => 'Don Quijote', // Título del libro
        'editorial' => 'Editorial Cervantes', // Editorial
        'año' => 1605, // Año de publicación
        'autores' => [ // Información de los autores
            ['nombre' => 'Miguel', 'apellido1' => 'de Cervantes', 'apellido2' => 'Saavedra']
        ]
    ],
    // Otros libros con estructura similar
    '9789876543210' => [
        'unidades' => 3,
        'titulo' => 'Cien Años de Soledad',
        'editorial' => 'Editorial Sudamericana',
        'año' => 1967,
        'autores' => [
            ['nombre' => 'Gabriel', 'apellido1' => 'García', 'apellido2' => 'Márquez']
        ]
    ]
];

// 3. Array de préstamos
// Este array almacena los préstamos realizados por usuarios. Cada préstamo incluye:
// el ISBN del libro, el usuario que lo solicitó, la fecha de inicio y la fecha de fin.
$prestamos = [
    [
        'isbn' => '9781234567897',
        'usuario' => 'jdoe',
        'fechaInicio' => '2023-01-01',
        'fechaFin' => '2023-02-01'
    ],
    [
        'isbn' => '9789876543210',
        'usuario' => 'asmith',
        'fechaInicio' => '2023-03-15',
        'fechaFin' => '2023-04-15'
    ]
];

// 4. Función de login
// Comprueba si el usuario y la contraseña coinciden en la base de datos de usuarios.
function login($usu, $pw) {
    global $usuarios; // Usamos el array global $usuarios
    if (empty($pw)) { // Verifica que la contraseña no esté vacía
        throw new Exception("ERROR DEL SISTEMA: La contraseña no puede estar vacía.");
    }
    // Devuelve true si el usuario existe y la contraseña coincide, false en caso contrario
    return isset($usuarios[$usu]) && $usuarios[$usu]['contraseña'] === $pw;
}

// 5. Función escribeUsuario
// Imprime la información del usuario en un formato legible
function escribeUsuario($usu) {
    global $usuarios; // Usamos el array global $usuarios
    if (!isset($usuarios[$usu])) { // Verifica que el usuario exista
        throw new Exception("ERROR DEL SISTEMA: El usuario no existe");
    }
    $user = $usuarios[$usu]; // Recupera la información del usuario
    echo "{$user['apellido1']} {$user['apellido2']}, {$user['nombre']} ({$user['edad']} años)<br>";
    echo "Está con nosotros desde el " . date("d de F de Y", strtotime($user['fechaAlta'])) . "<br><br>";
}

// 6. Función escribePrestamos
// Muestra los préstamos realizados por un usuario en una tabla
function escribePrestamos($usu) {
    global $prestamos, $libros, $usuarios; // Usamos los arrays globales
    if (!isset($usuarios[$usu])) { // Verifica que el usuario exista
        throw new Exception("ERROR DEL SISTEMA: El usuario no existe");
    }
    echo "Préstamos realizados por {$usuarios[$usu]['nombre']}<br>";
    echo "<table border='1'>"; // Inicia una tabla HTML
    echo "<tr><th>ISBN</th><th>Título</th><th>Fecha de inicio</th><th>Fecha de Fin</th><th>Retrasado</th></tr>";
    foreach ($prestamos as $prestamo) { // Recorre los préstamos
        if ($prestamo['usuario'] === $usu) { // Filtra los préstamos del usuario
            $isbn = $prestamo['isbn'];
            $titulo = $libros[$isbn]['titulo'];
            $fechaInicio = date("d-m-Y", strtotime($prestamo['fechaInicio']));
            $fechaFin = date("d-m-Y", strtotime($prestamo['fechaFin']));
            // Comprueba si el préstamo está retrasado
            $retrasado = (strtotime($prestamo['fechaFin']) < time()) ? 'SI' : 'NO';
            echo "<tr><td>$isbn</td><td>$titulo</td><td>$fechaInicio</td><td>$fechaFin</td><td>$retrasado</td></tr>";
        }
    }
    echo "</table>"; // Cierra la tabla HTML
}
?>
