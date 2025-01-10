<html>
    <body>
        <?php
            function compara($valor1, $valor2, $funcionComparacion) :int {
                return $funcionComparacion($valor1, $valor2);
            };

            $comparaEnteros = function($valor1, $valor2): int{
                if($valor1 > $valor2){
                    return 1;
                }if($valor1<$valor2){
                    return -1;
                }return 0;      
            };
            $numero1 = 12;
            $numero2 = 40;
            if (compara($numero1, $numero2, $comparaEnteros) ==-1 ){
                echo 'El numero 1 es mayor que el numero 2';
            };

            //comparadores de ejecución
            $listado_archivos = `dir`; // Listado de todos los archivos del directorio actual
            echo "<pre>$listado_archivos<pre>"; // Se muestra en pantalla


            //comparadores de coalescencia nulo
            echo '</br>';
            $variable = 'Hola';
            $variable = null;
            echo $variable ?? "No existe";
            echo "</br>";
            echo "</br>";
            echo "</br>";
            echo "</br>";


            /*echo "</br>";
            $a = 5;
            $b = 13;
            echo $a <=> $b;

            echo "</br>";
            $a = 5;
            $b = 5;
            echo $a <=> $b;

            echo "</br>";
            $a = 5;
            $b = 2;
            echo $a <=> $b;*/

            /*class Session{
                public Usuario $usuario;

                public function __construct(Usuario $usuario){
                    return $this->usuario = $usuario;
                }
            };

            class Usuario{
                
                public Estudios $estudios;

                public function __construct($nombre, Estudios $estudios){
                    
                    $this->estudios = $estudios;
                }

                public function getEstudios(){
                    return $this->estudios;
                }

                public function setEstudios(Estudios $estudios){
                    $this->estudios = $estudios;
                }
            };

            class Estudios{
                public String|null $universidad;
                public String $titulo;

                public function __construct(String $universidad, String $titulo){
                    $this->universidad = $universidad;
                    $this->titulo = $titulo;
                }
            };

            $sesion = new Session("Manuel");
            $usuario = new Usuario("Manuel","Profesor");
            $estudios = new Estudios("UGR","Magisterio");

            $universidad = $sesion?->usuario?->getEstudios()?->universidad;
            echo $universidad;*/

            class Session{
                public $usuario;

                public function __construct($usuario){
                    return $this->usuario = $usuario;
                }
            };


            class Usuario{
                public $nombre;
                private $estudios;

                public function __construct($nombre,$estudios){
                    $this->nombre = $nombre;
                    $this->estudios = $estudios;
                }

                public function getEstudios(){
                    return $this->estudios;
                }
            };

            class Estudios{
                public $universidad;
                public $titulo;

                public function __construct($universidad,$titulo) {
                    $this->universidad = $universidad;
                    $this->titulo=$titulo;
                }
            }

            $misEstudios = new Estudios ("UGR","Ingeniero Informático");
            $usuario = new Usuario("Carlos", $misEstudios);
            $sesion= new Session($usuario);

            $universidad = $sesion?->usuario?->getEstudios()?->universidad;
            echo $universidad;


            //operaciones con arrays
            //forma antigua
            $a = array("a"=> "apple", "b"=> "banana");
            $b = array("a"=> "pear", "b"=> "strawberry", "c"=> "cherry");

            //sumo los arrays a+b e imprimo por pantalla el resultado
            $c = $a + $b;
            print_r($c);
            echo "<br>";
            var_dump($c);

            //manera moderna
            $d = ["a"=> "apple", "b"=> "banana"];
            $e = ["a"=> "pear", "b"=> "strawberry", "c"=> "cherry"];

            //sumo los arrays a+b e imprimo por pantalla el resultado
            $c = $d + $e;
            print_r($c);
            echo "<br>";
            var_dump($c);

            //imprimir el valor de apple
            echo "<br>";
            echo $d["a"]; 

           
            
        ?>
    </body>
</html>