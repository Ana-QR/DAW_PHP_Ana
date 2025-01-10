<?php
//Creamos el array de usuarios
$usuarios = [
    '12345678A' => [
        'contraseña' => '1234',
        'nombre' => 'Jorge',
        'edad' => 20,
        'tarjeta' => ['numero' => '123456789', 'CVV'=>'123']
    ],

    '87654321B' => [
        'contraseña' => 'contrasenia',
        'nombre' => 'Paula',
        'edad' => 25,
        'tarjeta' => ['numero'=>'987654321', 'CVV'=>'321']
    ],
    '01234567C' => [
        'contraseña' => 'hola',
        'nombre' => 'Paqui',
        'edad' => 40,
        'tarjeta' => ['numero'=>'234567891', 'CVV'=>'987']
    ]
];

//Función rellenar usuarios
function rellenaUsuarios(){
    //Como ya tenemos los usuarios, simplemente llamamos al array de usuarios y nos devuelve los usuarios
    global $usuarios;
    echo "{$usuarios['contraseña']} {$usuarios['nombre']}, {$usuarios['edad']} ({$usuarios['tarjeta']})<br>";
}

//Función rellenar productos
function rellenaProductos($numProductos){
    $productos = []; // Array para almacenar todos los productos

    for ($i = 0; $i < $numProductos; $i++) {
        $producto = [
            'unidades' => rand(10, 20),
            'nombreProducto' => 'Producto' . str_pad($i + 1, 3, '0', STR_PAD_LEFT),
            'precio' => rand(1, 50)
        ];

        $productos[] = $producto; // Añade el producto al array de productos
    }

    return $productos; // Devuelve el array de productos
}

// Ejemplo de uso:
// $numProductos = 5;
// $productos = rellenaProductos($numProductos);
// print_r($productos);


//Función rellenar pedidos
function rellenaPedidos(){
    global $productos; //Llamada a los arrays que vamos a necesitar
    global $usuarios;

    $precio = rand(1,1000); //Nos genera un precio aleatorio entre 1 y 1000

    $pedidos = [
        "idProducto" => print_r(array_rand($usuarios["dni"])),
        "cantidad" => rand(1, count($productos)),
        "precioLinea" => count($productos)*$precio
    ];

    return $pedidos; //Devuelve el array de productos
}

function mostrarPedidos($dniUsuario){
    global $pedidos;

    echo "<table border='1'>"; // Inicia una tabla HTML
    echo "<tr><th>ID Producto</th><th>Cantidad</th><th>Precio Linea(€)</th></tr>";
    foreach ($pedidos as $pedido) { // Recorre los pedidos
        if ($pedido['usuario'] === $dniUsuario) { // Filtra los pedidos realizados por los usuarios
            $idProductos = $pedido['idProductos'];
            $cantidad = $pedido['cantidad'];
            $precioLineal = $pedido['precioLinea'];

            echo "<tr><td>$idProductos</td><td>$cantidad</td><td>$precioLineal</td></tr>";
        }
    }
    echo "</table>";
}


// Comprueba si el usuario y la contraseña coinciden en la base de datos de usuarios.
function login($usu, $pw) {
    global $usuarios; // Usamos el array global $usuarios
    if (empty($pw)) { // Verifica que la contraseña no esté vacía
        throw new Exception("ERROR DEL SISTEMA: La contraseña no puede estar vacía.");
    }
    // Devuelve true si el usuario existe y la contraseña coincide, false en caso contrario
    return isset($usuarios[$usu]) && $usuarios[$usu]['contraseña'] === $pw;
}

?>