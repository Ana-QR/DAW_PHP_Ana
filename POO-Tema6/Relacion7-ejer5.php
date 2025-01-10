<?php
class Producto {
    // Propiedades
    private $nombre;
    private $precio;
    private $stock;

    // Constantes
    const IVA = 0.20; // 20% de IVA
    const DESCUENTO_MAXIMO = 30; // 30% de descuento máximo

    // Constructor
    public function __construct($nombre, $precio, $stock) {
        if ($precio <= 0) {
            throw new Exception("El precio debe ser mayor que cero.");
        }
        if ($stock < 0) {
            throw new Exception("El stock no puede ser negativo.");
        }
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->stock = $stock;
    }

    // Método para actualizar el precio
    public function setPrecio($precio) {
        if ($precio <= 0) {
            throw new Exception("El precio debe ser mayor que cero.");
        }
        $this->precio = $precio;
    }

    // Método estático para calcular el precio con IVA
    public static function calcularPrecioConIva($precio) {
        if ($precio <= 0) {
            throw new Exception("El precio debe ser mayor que cero.");
        }
        return $precio * (1 + self::IVA);
    }

    // Método para aplicar un descuento
    public function aplicarDescuento($porcentaje) {
        if ($porcentaje < 0 || $porcentaje > self::DESCUENTO_MAXIMO) {
            throw new Exception("El descuento debe estar entre 0% y " . self::DESCUENTO_MAXIMO . "%.");
        }
        $this->precio -= $this->precio * ($porcentaje / 100);
    }

    // Método para mostrar la información del producto
    public function mostrarInformacion() {
        return "Producto: $this->nombre, Precio: $this->precio €, Stock: $this->stock unidades.";
    }
}

// Ejemplo de uso
try {
    $producto = new Producto("Pastel de Chocolate", 10, 20);

    // Mostrar información inicial
    echo $producto->mostrarInformacion() . "<br>";

    // Calcular precio con IVA
    $precioConIva = Producto::calcularPrecioConIva($producto->$precio);
    echo "Precio con IVA: $precioConIva € <br>";

    // Aplicar un descuento
    $producto->aplicarDescuento(20); // Aplicando 20% de descuento
    echo $producto->mostrarInformacion() . "<br>";

} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}
?>
