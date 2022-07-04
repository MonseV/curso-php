<?php
    /* Ejercicio 1 Operadores de asignación
    Convierte las siguientes operaciones a su equivalente
    empleando operadores de asignación:

        $x = $x + $y;
        $x = $x – $y;
        $x = $x * $y;
        $x = $x / $y;
  */

    $x = 10;
    $y = 5;

    $x += $y; // 10 + 5
    var_dump($x); //15
    echo "<br>";

    $x -= $y; // 15 -5
    var_dump($x); // 10
    echo "<br>";

    $x *= $y; // 10 * 5
    var_dump($x); // 50
    echo "<br>";

    $x /= $y; // 50 / 5
    var_dump($x); // 10
    echo "<br>";

?>