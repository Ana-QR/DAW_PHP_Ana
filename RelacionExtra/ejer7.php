<?php
    //array
    $array[6][9];

    //se rellena el array comprobando que no hay repetidos
    // for ($i = 0; $i < 6; $i++) {
    //     for ($j = 0; $j < 9; $j++) {
    //         do{
    //             $temp=rand(100,999);
    //         }while(in_array($temp, $array));
    //         $array[$i][$j] = $temp;
    //         echo " ". $array[$i][$j];
    //     }
    //     echo "<br>";
    // }
    function InArray2D($value, $array){
        $isInArray = false;
        foreach($array as $row){
            foreach($row as $val){
                if($val == $value){
                    $isInArray = true;
                }
            }
        }
        return $isInArray;
    }

    $array = [];

    for ($i=0; $i < 6; $i++) { 
        for ($j=0; $j < 9; $j++) {                                                  
            do{
                $num = rand(100,158);
            }while(InArray2D($num,$array));

            $array[$i][$j] = $num;
            echo " " . $array[$i][$j];
        }
        echo "<br>";
    }



?>