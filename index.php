<html>
  <body>
    <?php
    echo "Hola Mundo <br>";
    //echo phpinfo();
    $num1 =9;
    $num2 = 3.9;
    $resultado = $num1 + $num2;
    
    
    echo $resultado;
    echo "<br>";

    //if($num1 == $num2){
      //echo 'Las variables son iguales';
    //}echo 'Las variables no son iguales';

    echo "<br>";
    echo "<br>";

    $a = 2.5;
    $b = '4 flores';
    $resultado = $a.$b;
    echo $resultado;

    echo '<br>';
    $var = 'uno';
    $$var = 'dos';
    echo $var;
    echo '<br>';
    echo $$var;
    echo '<br>';

    function prueba(): void{
      global $a;
      $c = $a;
      echo $c;
    } 
    prueba();
    echo '<br>';

    ?>

  </body>

</html>

