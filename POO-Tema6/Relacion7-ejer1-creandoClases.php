<?php
class Coche{
    public string $color = "Beige";
    public string $marca = "Ford";
    public string $modelo = "Puma";
    public int $velocidad = 300;
    public int $caballos = 500;
    public int $numPlazas = 5;

    // public function __construct($color, $marca, $modelo, $velocidad, $caballos, $numPlazas)
    // {
    //     $this->color = $color;
    //     $this->marca = $marca;
    //     $this->modelo = $modelo;
    //     $this->velocidad = $velocidad;
    //     $this->caballos = $caballos;
    //     $this->numPlazas = $numPlazas;
    // }

    /**
     * Get the value of color
     */
    public function getColor(){
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @return  self
     */
    public function setColor($color){
        $this->color = $color;
        return $this;
    }

    /**
     * Get the value of marca
     */
    public function getMarca(){
        return $this->marca;
    }

    /**
     * Set the value of marca
     *
     * @return  self
     */
    public function setMarca($marca){
        $this->marca = $marca;
        return $this;
    }

    /**
     * Get the value of modelo
     */
    public function getModelo(){
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     *
     * @return  self
     */
    public function setModelo($modelo){
        $this->modelo = $modelo;
        return $this;
    }

    /**
     * Get the value of velocidad
     */
    public function getVelocidad(){
        return $this->velocidad;
    }

    /**
     * Set the value of velocidad
     *
     * @return  self
     */
    public function setVelocidad($velocidad){
        $this->velocidad = $velocidad;
        return $this;
    }

    /**
     * Get the value of caballos
     */
    public function getCaballos(){
        return $this->caballos;
    }

    /**
     * Set the value of caballos
     *
     * @return  self
     */
    public function setCaballos($caballos){
        $this->caballos = $caballos;
        return $this;
    }

    /**
     * Get the value of numPlazas
     */
    public function getNumPlazas(){
        return $this->numPlazas;
    }

    /**
     * Set the value of numPlazas
     *
     * @return  self
     */
    public function setNumPlazas($numPlazas){
        $this->numPlazas = $numPlazas;
        return $this;
    }

    function frenar (){
        $this-> velocidad-1;
    }

    function acelerar (){
        $this-> velocidad+1;
    }

    function cambiarColor($nuevoColor){
        $this->color = $nuevoColor;
    }
}

// Instanciamos un objeto de la clase Coche
$coche = new Coche();

// Mostramos los datos iniciales del coche
echo "<h2>Datos del coche</h2>";
echo "<ul>";
echo "<li>Marca: {$coche->marca}</li>";
echo "<li>Modelo: {$coche->modelo}</li>";
echo "<li>Color: {$coche->color}</li>";
echo "<li>Caballos: {$coche->caballos}</li>";
echo "<li>Velocidad: {$coche->velocidad}</li>";
echo "<li>Plazas: {$coche->numPlazas}</li>";
echo "</ul>";

$coche->cambiarColor("Amarillo");
echo "<h3>Cambiamos el color del coche y lo ponemos amarillo</h3>";
echo "<p>El nuevo color del coche es: {$coche->color}</p>";

echo "<h3>Mi coche va a acelerar 4 veces y a frenar una vez.</h3>";
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();
echo "<p>Ésta es ahora la velocidad del coche: {$coche->velocidad}</p>";

$nuevoCoche = new Coche();
$nuevoCoche->cambiarColor("Verde");
$nuevoCoche->modelo = "Gallardo";

echo "<h3>Creemos un nuevo coche su color será VERDE y el modelo GALLARDO</h3>";
echo "<h2>Datos del NUEVO coche</h2>";
echo "<ul>";
echo "<li>Marca: {$nuevoCoche->marca}</li>";
echo "<li>Modelo: {$nuevoCoche->modelo}</li>";
echo "<li>Color: {$nuevoCoche->color}</li>";
echo "<li>Caballos: {$nuevoCoche->caballos}</li>";
echo "<li>Velocidad: {$nuevoCoche->velocidad}</li>";
echo "<li>Plazas: {$nuevoCoche->numPlazas}</li>";
echo "</ul>";