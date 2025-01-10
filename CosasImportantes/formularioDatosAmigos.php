<?php
// Definición de variables para almacenar los datos del formulario y los mensajes de error
$name = $phone = $email = ""; // Inicialización de las variables de datos
$nameErr = $phoneErr = $emailErr = ""; // Inicialización de las variables de errores

// Comprobar si el formulario ha sido enviado usando el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // 1. Validación del nombre
    if (empty($_POST["name"])) { 
        // Si el campo de nombre está vacío, se asigna un mensaje de error
        $nameErr = "<br><i>El nombre es obligatorio.";
    } else {
        // Si no está vacío, se limpia la entrada con la función `test_input` y se valida
        $name = test_input($_POST["name"]);
        // Comprobar si el nombre solo contiene letras, espacios y caracteres específicos
        if (!preg_match("/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]*$/", $name)) { 
            $nameErr = "<br><i>El nombre solo debe contener letras y espacios.";
        }
    }

    // 2. Validación del teléfono
    if (empty($_POST["phone"])) { 
        // Si el campo de teléfono está vacío, se asigna un mensaje de error
        $phoneErr = "<br><i>El teléfono es obligatorio.";
    } else {
        // Si no está vacío, se limpia la entrada y se valida
        $phone = test_input($_POST["phone"]);
        // Comprobar si el teléfono contiene exactamente 9 dígitos
        if (!preg_match("/^[0-9]{9}$/", $phone)) { 
            $phoneErr = "<br><i>El teléfono debe contener exactamente 9 números.";
        }
    }

    // 3. Validación del correo electrónico
    if (empty($_POST["email"])) { 
        // Si el campo de email está vacío, se asigna un mensaje de error
        $emailErr = "<br><i>El correo es obligatorio.";
    } else {
        // Si no está vacío, se limpia la entrada y se valida
        $email = test_input($_POST["email"]);
        // Comprobar si el correo tiene un formato válido usando la función `filter_var`
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
            $emailErr = "<br><i>El formato del correo es inválido.";
        }
    }

    // 4. Mostrar los datos ingresados si no hay errores
    if (empty($nameErr) && empty($phoneErr) && empty($emailErr)) { 
        // Si no hay mensajes de error, se muestran los datos validados
        echo "<h2>Datos válidos ingresados:</h2>";
        echo "<p>Nombre: $name</p>";
        echo "<p>Teléfono: $phone</p>";
        echo "<p>Correo: $email</p>";
    }
}

// Función para limpiar y procesar los datos de entrada del formulario
function test_input($data) {
    $data = trim($data); // Elimina espacios en blanco al principio y al final
    $data = stripslashes($data); // Elimina las barras invertidas (\) de la entrada
    $data = htmlspecialchars($data); // Convierte caracteres especiales a entidades HTML
    return $data; // Devuelve el dato limpio
}
?>
<!DOCTYPE html>
<html lang="es"> <!-- Define el idioma del contenido como español -->
<head>
    <meta charset="UTF-8"> <!-- Establece la codificación de caracteres como UTF-8 -->
    <title>Formulario de Validación</title> <!-- Título de la página -->
    <link rel="stylesheet" href="../../css/estilos.css"> <!-- Enlace a un archivo CSS externo -->
</head>
<body>
    <!-- Formulario con método POST para enviar los datos -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <h2>Datos de Amigos</h2>

        <!-- Campo para ingresar el nombre -->
        <label for="name">Nombre:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $name; ?>"> <!-- Muestra el valor ingresado previamente -->
        <span style="color:red"><?php echo $nameErr; ?></span><br><br> <!-- Muestra mensaje de error en color rojo -->

        <!-- Campo para ingresar el teléfono -->
        <label for="phone">Teléfono:</label><br>
        <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>">
        <span style="color:red"><?php echo $phoneErr; ?></span><br><br>

        <!-- Campo para ingresar el correo electrónico -->
        <label for="email">Correo:</label><br>
        <input type="text" id="email" name="email" value="<?php echo $email; ?>">
        <span style="color:red"><?php echo $emailErr; ?></span><br><br>

        <!-- Botón para enviar el formulario -->
        <button>Enviar</button>
    </form>
</body>
</html>
