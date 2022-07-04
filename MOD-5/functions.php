<?php

    // Declarar una función:
    // function addNumbers(){
    //     // cuerpo de la función:
    //     echo 2 + 2;
    // }


    // Return
    // function addNumbers(){
    //     // cuerpo de la función:
    //     $sum = 2 + 2;
    //     echo $sum;
    //     return $sum;
    // }

    // $result = addNumbers();

    // // echo $result;
    // echo $result + 4;


    // Con parámetros:
    function addNumbers($num1, $num2){
        return $num1 + $num2;
    }

    $a = 8;
    $b = 10;

    //                 argumentos
    $result = addNumbers($a, $b);
    echo $result;
?>

