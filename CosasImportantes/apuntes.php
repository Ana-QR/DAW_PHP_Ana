<?php
/////////////////////////////////////////////////////////tablas//////////////////////////////////////////////////
echo "<table>";
echo "<tr><td> XD </td></tr>";
echo "</table>";

/////////////////////////////////////////////mostrar info completa de variable///////////////////////////////////
var_dump($variable);

/////////////////////////////////////////////mostrar arrays u objetos////////////////////////////////////////////
print_r($miArray);

////////////////////////////////////////////////////constantes///////////////////////////////////////////////////
const PI= 3.141592;

//////////////////////////////////////////////conversión de tipos/////////////////////////////////////////////// 
$num= 12;
$decimal = (double) /*(int), (string) */ $num;

echo $decimal;
echo gettype($decimal);

/////////////////////////////////////////////////foreach/////////////////////////////////////////////////////// 
foreach($array as $elemento){

}
//ejemplo
$nombres = ["Lola", "Pepe", "Juan", "Ana", "Rosa"];

foreach ($nombres as $nombre) {
    echo $nombre;
}

////////////////////////////////////////Recorrer array asociativo////////////////////////////////////////////// 
$capitales= [
    "España" => "Madrid",
    "Italia" => "Roma",
    "Francia" => "París"
];

foreach ($capitales as $pais => $capital){
    echo "La capital de ". $pais . " es ". $capital;
}

/////////////////////////////////////////////////// POST/////////////////////////////////////////////////////// 
// <html>
// 	<head>
// 		<title>Ejemplo 4</title>
// 	</head>
// 	<body>
// 		<form method="post" action="index.php">
// 			<label for="usuario">Usuario:</label>
// 			<input type="text" name="usuario" required/>
// 			<br>
// 			<label for="password">Contraseña:</label>
// 			<input type="password" name="password" required/>
// 			<br>
// 			<label for="remember">Recordarme</label>
// 			<input type="checkbox" name="remember" value="1"/>
// 			<br>
// 			<input type="submit" value="Iniciar sesión"/>
// 		</form>
// 	</body>
// </html>
if(!isset($_POST["usuario"]) || empty($_POST["usuario"])) exit();
if(!isset($_POST["password"]) || empty($_POST["password"])) exit();

$usuario = $_POST["usuario"];
$password = $_POST["password"];

// Validación simple
if($usuario == "admin" && $password == "1234") {
	echo "Bienvenido, $usuario!";
	if(isset($_POST["remember"]) && $_POST["remember"] == "1") {
		echo " Has elegido recordar tu sesión.";
	}
} else {
	echo "Usuario o contraseña incorrectos.";
}

///////////////////////////////////////////////TIPOS DE ERRORES///////////////////////////////////////////////////
/* Valido para $_FILES["..."]["tipo de error"]
UPLOAD_ERR_OK	Sin errores
UPLOAD_ERR_INI_SIZE	El archivo es más grande que el valor permitido en la directiva upload_max_filesize de PHP
UPLOAD_ERR_FORM_SIZE	El archivo es más grande que el valor permitido en el formulario (a través de MAX_FILE_SIZE)
UPLOAD_ERR_PARTIAL	El archivo fue subido parcialmente
UPLOAD_ERR_NO_FILE	No se subió ningún archivo
UPLOAD_ERR_NO_TMP_DIR	Falta el directorio temporal
UPLOAD_ERR_CANT_WRITE	No se puede escribir el archivo en el disco
UPLOAD_ERR_EXTENSION	Una extensión de PHP detuvo la carga del archivo
*/


/////////////////////////////////////////////ARRAYS////////////////////////////////////////////////////////////////////
$miArray = ["Pepe", 20.3, "XD"]; //crear array

$capitales = ["España" => "Madrid", "Francia" => "París", "Italia" => "Roma"];//array asociativo


//acceder posicion del array
$miArray[0];
$miArray[1] = "X";

$capitales["Francia"];
$capitales["España"] = "Madrid";


//agregar valor al array
$miArray = [0, 5, 2, 3, 1];

$miArray[] = 4;
print_r($miArray);
/* Array(
	[0] => 0
	[1] => 5
	[2] => 2
	[3] => 3
	[4] => 1
	[5] => 4
)*/

$miArray = [
	"nombre" => "Juan",
	"edad" => 30
];

$miArray[] = "valor";
print_r($miArray);
/*Array
(
	[nombre] => Juan
	[edad] => 30
	[0] => valor
)*/

//array multidimensional
$miArray = [[1, 2], [3, 4], [5, 6]];
$miArray[0][1];

//tamaño array
$miArray = [1, 2, 3, 4];
echo count($miArray);	// Imprime 4

//generar array en un rango de numeros concreto
$numeros = range(6, 10); //llena un array del 6 al 10
print_r($numeros);

//desglose valores de un array
function mostrar(...$valores){ //...$valores
	foreach($valores as $valor){
		echo $valor . "\n";
	}
}

$numeros = [1, 2, 3, 4, 5];
mostrar(...$numeros);	// mostrar(1, 2, 3, 4, 5);

//array_map
$nombres = ["Juan", "Pedro", "Maria"];
$edades = [30, 25, 28];

$personas = array_map(function($nombre, $edad) {
	return $nombre . " tiene " . $edad . " años";
}, $nombres, $edades);

print_r($personas);
/* Array
(
	[0] => Juan tiene 30 años
	[1] => Pedro tiene 25 años
	[2] => Maria tiene 28 años
)*/

//array_filter: crear un solo array con los elementos que cumplan un criterio 
$numeros = [0, 1, 2, 3, 4];

$pares = array_filter($numeros, function($numero) {
	return $numero % 2 == 0;
});

print_r($pares);
/* Array
(
	[0] => 0
	[1] => 2
	[2] => 4
)*/



?>
