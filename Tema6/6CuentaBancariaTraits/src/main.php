<?php

require_once '../Nuevo/Tema6/6CuentaBancariaTraits/src/OperacionesTrait.php';


try {
    // Crear cuentas bancarias
    $cuenta1 = new CuentaBancaria();
    $cuenta2 = new CuentaBancaria();

    // Operaciones en CuentaBancaria
    $cuenta1->depositar(500);
    echo "Saldo cuenta1: {$cuenta1->obtenerSaldo()} " . CuentaBancaria::MONEDA . "\n";

    $cuenta1->transferir($cuenta2, 200);
    echo "Saldo cuenta1 después de transferir: {$cuenta1->obtenerSaldo()} " . CuentaBancaria::MONEDA . "\n";
    echo "Saldo cuenta2: {$cuenta2->obtenerSaldo()} " . CuentaBancaria::MONEDA . "\n";

    // Crear tarjeta de crédito
    $tarjeta = new TarjetaCredito(1000); // Límite de crédito: 1000
    $tarjeta->retirar(300); // Gasto con la tarjeta
    echo "Saldo tarjeta después de gastar: {$tarjeta->obtenerSaldo()} " . TarjetaCredito::MONEDA . "\n";

    // Intentar exceder el límite de crédito
    $tarjeta->retirar(800); // Esto lanzará una excepción
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}
