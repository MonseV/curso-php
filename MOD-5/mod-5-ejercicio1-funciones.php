<?php
    /* Ejercicio 1 Funciones
       Define una función llamada: cubo
       que calcule el cubo de un número que debe ser pasado como argumento
       La función debe imprimir y retornar el resultado.

       Ejemplo:

       // llamada a la función:
       cubo( 3 ); // -> debería de imprimir y retornar: 27
    */

    function cubo( $num ) {
        return $result = $num * $num * $num;
    }

    echo cubo(3);
?>

