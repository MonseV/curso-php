<?php
    /* Ejercicio 2 SCOPES, Parámetros por default y paso de argumentos por referencia
       Realiza un script que cuente con una variable global:

            $a = “Global”;

        y una función llamada modifyGlobal() con un parámetro $b
        que reciba un argumento por referencia.

        En el cuerpo de la función:

            1. Imprime el valor de $b
            2. modifica el valor de $b para que sea: “Modificado dentro de la función”
            3. y retorna $b
            4. Por último invoca la función y debajo imprime el valor de $a

        El resultado de $a debería de ser “Modificado dentro de la función”.
    */

    $a = "Global";


    // 1. Imprime el valor de $b
    /* function modifyGlobal( $b ) {
        return $b;
    }
    echo modifyGlobal($a); */

    // 2-3. modifica el valor de $b para que sea: “Modificado dentro de la función” y retorna $b
    /* function modifyGlobal( $b ) {
        return $b = "Modificado dentro de la función";
    }
    echo modifyGlobal($a); */

    // 4. Por último invoca la función y debajo imprime el valor de $a
    function modifyGlobal( &$b ) {
        return $b = "Modificado dentro de la función";
    }
    echo modifyGlobal($a);
    echo "<br>";
    echo($a);
?>