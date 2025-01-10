<?php

trait Operaciones {
    protected $saldo = 0;

    public function depositar(float $monto): void {
        if ($monto <= 0) {
            throw new Exception("El monto a depositar debe ser positivo.");
        }
        $this->saldo += $monto;
    }

    public function retirar(float $monto): void {
        if ($monto <= 0) {
            throw new Exception("El monto a retirar debe ser positivo.");
        }
        if ($this->saldo < $monto) {
            throw new Exception("Saldo insuficiente.");
        }
        $this->saldo -= $monto;
    }

    public function obtenerSaldo(): float {
        return $this->saldo;
    }
}

class CuentaBancaria {
    use Operaciones;

    const MONEDA = 'USD';

    public function transferir(CuentaBancaria $destino, float $monto): void {
        $this->retirar($monto);
        $destino->depositar($monto);
    }

    public function obtenerSaldo()
    {
        return $this->saldo . " ". self::MONEDA;
    }
}

class TarjetaCredito {
    use Operaciones;

    const MONEDA = 'USD';
    private $limiteCredito;

    public function __construct(float $limiteCredito) {
        $this->limiteCredito = $limiteCredito;
    }

    public function retirar(float $monto): void {
        if ($monto <= 0) {
            throw new Exception("El monto a retirar debe ser positivo.");
        }
        if (($this->saldo - $monto) < -$this->limiteCredito) {
            throw new Exception("Límite de crédito excedido.");
        }
        $this->saldo -= $monto;
    }

    public function obtenerLimiteCredito(): float {
        return $this->limiteCredito;
    }
}