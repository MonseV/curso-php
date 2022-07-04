<?php

    // Scope (alcance / ámbito) de variables

    /* LOCAL */
    // Las variables dentro de la funcion dejan de existir una vez que se ejecutan
    // Es decir, las variables y parámetros solo tienen alcance dentro de la función
        // El parámetro es una copia del valor original de la variable



    /* GLOBAL */
    // Las variables fuera de la funcion


    // $num1 = 2; // Variable Global

    // function addNumbers($num1, $num2){
    //     return $num1 + $num2;
    // }

    // addNumbers(5, 7);
    // echo $num1; // imprime el valor de la variable global

    // $num1 = addNumbers(5, 7); // solo asi se modifica el valor de la variable global
    // echo $num1;


    // Con parámetro por default:
    // function addNumbers($num1, $num2, $printResult = false){
    //     // Variables locales
    //     $sum = $num1 + $num2;

    //     if( $printResult ) {
    //         echo "El resultado de la suma es: " . $sum;
    //     }
    //     return $sum;
    // }

    // $result = addNumbers(5, 7, true);

    // echo "<br>";
    // echo $result;


    // Paso de argumentos por referencia:
    function modify(&$a){ // & -> Permite a una función modificar sus argumentos
                          //      y asi no son pasados por el valor de la varible global
        $a = 3;
    }

    $a = 2;

    modify($a);

    var_dump( $a );
?>