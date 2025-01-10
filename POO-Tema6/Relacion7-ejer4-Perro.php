<?php
    class Perro{
        public $tamaño;
        public $raza;
        public $color;
        public $nombre;

        public function __construct($tamaño,$raza,$color,$nombre){
            $this->tamaño=$tamaño;
            $this->raza=$raza;
            $this->color=$color;
            $this->nombre=$nombre;
        }

        /**
         * Get the value of tamaño
         */ 
        public function getTamaño()
        {
                return $this->tamaño;
        }

        /**
         * Set the value of tamaño
         *
         * @return  self
         */ 
        public function setTamaño($tamaño)
        {
                $this->tamaño = $tamaño;

                return $this;
        }

        /**
         * Get the value of raza
         */ 
        public function getRaza()
        {
                return $this->raza;
        }

        /**
         * Set the value of raza
         *
         * @return  self
         */ 
        public function setRaza($raza)
        {
                $this->raza = $raza;

                return $this;
        }

        /**
             * Get the value of color
             */ 
            public function getColor()
            {
                    return $this->color;
            }

            /**
             * Set the value of color
             *
             * @return  self
             */ 
            public function setColor($color)
            {
                    $this->color = $color;

                    return $this;
            }
        /**
         * Get the value of nombre
         */ 
        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        public function darNombre($nombre){
            if (strlen($nombre)<21) {
                $this->nombre=$nombre;
                return true;
            }else{
                throw new Exception("El nombre excede del máximo de caracteres");
                return false;
            }
        }
        
        function ladrar(){
            echo "Guau guau";
        }

        function mostrar_propiedades($perro){
            echo "Las propiedades del perro son: <br>";
            echo "El tamaño del perro es ". $perro["tamaño"].", su color es ". 
            $perro["color"]. "su raza es ". $perro["raza"]. " y su nombre es ".
            $perro["nombre"];
        }
    }

    

    $ladrador = new Perro("grande","labrador", "blanco", "Paquito");
    $ladrador -> mostrar_propiedades();

    $caniche= new Perro("pequeño","caniche", "marron", "Pablito");
    $caniche -> ladrar();
?>