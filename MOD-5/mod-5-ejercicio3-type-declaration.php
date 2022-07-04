<?php
    /* Ejercicio 3 TYPE DECLARATION
       A la función cubo() que creaste en el ejercicio #1 de éste módulo
       (sino lo hiciste tendrás que hacerlo)
       agrega los tipos de datos que aceptarán los parámetros como enteros
       y así mismo para el tipo de dato que tiene que retornar.
       Finalmente prueba pasando un argumento que no sea entero;
       debería dar un TypeError como el que vimos en vídeo.
    */

    declare( strict_types = 1);

    function cubo( int $num, bool $printResult = false): int {
        $result = $num * $num * $num;

        if( $printResult ){
            echo "El resultado de la suma es: " . $result;
        }

        return $result;
    }

    // echo cubo(3);
    // echo cubo("3")
    echo cubo("prueba");
?>