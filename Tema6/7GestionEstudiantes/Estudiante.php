<?php

class Estudiante {
    private $nombre;
    private $edad;
    private $notas = [];

    // Atributos estáticos
    private static $contadorEstudiantes = 0;
    private static $totalNotas = 0;

    // Constructor con validación de edad
    public function __construct($nombre, $edad) {
        if ($edad < 18) {
            throw new Exception("La edad debe ser al menos 18 años.");
        }
        $this->nombre = $nombre;
        $this->edad = $edad;

        // Incrementar el contador de estudiantes
        self::$contadorEstudiantes++;
    }

    // Método para agregar una nota con validación
    public function agregarNota($nota) {
        if ($nota < 0 || $nota > 10) {
            throw new Exception("La nota debe estar entre 0 y 10.");
        }
        $this->notas[] = $nota;

        // Acumular el total de notas para el cálculo del promedio global
        self::$totalNotas += $nota;
    }

    // Método para calcular el promedio del estudiante
    public function calcularPromedio() {
        if (count($this->notas) == 0) {
            throw new Exception("No hay notas para calcular el promedio.");
        }
        return array_sum($this->notas) / count($this->notas);
    }

    // Método estático para obtener el total de estudiantes
    public static function obtenerTotalEstudiantes() {
        return self::$contadorEstudiantes;
    }

    // Método estático para calcular el promedio de todos los estudiantes
    public static function calcularPromedioGeneral() {
        if (self::$contadorEstudiantes == 0) {
            throw new Exception("No hay estudiantes registrados.");
        }
        return self::$totalNotas / self::$contadorEstudiantes;
    }
}
