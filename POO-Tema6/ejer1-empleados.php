<?php

class Empleado{
    public $nombre;
    public $apellidos;

    public function setNombre($nombre){
        $this-> nombre = $nombre;
    }

    public function setApellidos ($apellidos){
        $this-> apellidos = $apellidos;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getApellidos(){
        return $this->apellidos;
    }

    public function __toString(){
        return "<br> -Empleado: ". $this->nombre." ". $this->apellidos;
    }
}

$emp = new Empleado("","");

$emp->setNombre("Juan");
$emp->setApellidos("Manzana");
echo $emp;

$emp2 = new Empleado("Pedro", "Paramo");
echo $emp2;

?>