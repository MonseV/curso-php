<?php
    /* Ejercicio 3: Operadores de comparación

    Realiza las siguientes comparaciones en código PHP (evalúa el resultado por tu cuenta antes de
    verlo en el navegador):

        ‘Azul’ es diferente de ‘azul’
        ‘Azul’ es igual a ‘azul’
        ‘Azul’ es idéntico a ‘Azul’
        0 es igual a false
        0 es idéntico a false
        1 es igual a false
        100 es menor a 100.00
        100.00 es mayor o igual a 100
    */

    // var_dump( 'Azul' != 'azul' ); // true
    // var_dump( 'Azul' == 'azul' ); // false
    // var_dump( 'Azul' === 'Azul' ); // true
    //         false == false  -> true
    // var_dump( 0 == false) ; // true
    // var_dump( 0 === false) // false
    //         true == false   -> false
    // var_dump( 1 == false ); // false
    // var_dump( 100 < 100.00 ) // false
    var_dump( 100.00 >= 100 ) // true
?>