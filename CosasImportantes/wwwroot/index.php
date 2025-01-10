<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $usuarios= [
            "Ana" => ["contraseña"=>"contrasenia", "nombre"=>"Ana", "apellido1"=>"Quero", "apellido2"=>"de la Rosa", "edad"=>20, "fechaAlta"=>"2020-11-19"],
            "Vane" => ["contraseña"=>"contrasenia", "nombre"=>"Vanesa", "apellido1"=>"Garcia", "apellido2"=>"Pozas", "edad"=>20, "fechaAlta"=>"2020-11-18"],
            "Miguel" => ["contraseña"=>"contrasenia", "nombre"=>"Miguel Anguel", "apellido1"=>"Martos", "apellido2"=>"Alcaraz", "edad"=>21, "fechaAlta"=>"2020-11-17"]
        ];


        $libros= [
            "1234567890123" => ["unidades"=>30, "titulo"=>"Una corte de alas y ruina", "editorial"=>"Croos Book", "año"=>2017, "autores"=>["Sarah", "J", "Maas"]],
            "3210987654321" => ["unidades"=>45, "titulo"=>"Alas de sangre", "editorial"=>"Planeta", "año"=>2023, "autores"=>["Rebecca", "Yarros", "Ortiz"]],
            "8794562378123" => ["unidades"=>27, "titulo"=>"Harry Potter y la piedra filosofal", "editorial"=>"Minalima", "año"=>1996, "autores"=>["J", "K", "Rowling"]],
            "4758219347289" => ["unidades"=>50, "titulo"=>"Una corte de hielo y estrellas", "editorial"=>"Croos Book", "año"=>2018, "autores"=>["Sarah", "J", "Maas"]]
        ];


        $prestamos=[
            ["isbn" => "1234567890123","usuario" => "Ana", "fechaInicio" =>"2024-08-02"],
            ["isbn" => "3210987654321","usuario" => "Miguel", "fechaInicio" =>"2024-02-22"],
            ["isbn" => "4758219347289","usuario" => "Ana", "fechaInicio" =>"2024-11-29"]
        ];

    ?>
</body>
</html>