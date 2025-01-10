<?php

require_once 'Estudiante.php';

try {
    // Crear estudiantes
    $estudiante1 = new Estudiante("Marta", 20);
    $estudiante2 = new Estudiante("Paqui", 22);
    
    // Agregar notas
    $estudiante1->agregarNota(8);
    $estudiante1->agregarNota(9);
    
    $estudiante2->agregarNota(6);
    $estudiante2->agregarNota(7);
    
    // Mostrar promedios de los estudiantes
    echo "Promedio de Marta: " . $estudiante1->calcularPromedio() . "\n";
    echo "Promedio de Paqui: " . $estudiante2->calcularPromedio() . "\n";

    // Promedio general de todos los estudiantes
    echo "Promedio general de todos los estudiantes: " . Estudiante::calcularPromedioGeneral() . "\n";

    // Total de estudiantes
    echo "Total de estudiantes registrados: " . Estudiante::obtenerTotalEstudiantes() . "\n";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
