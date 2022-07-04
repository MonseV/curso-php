<?php

    /*
        $nombre = "Carlos";

        echo $nombre;
        echo "<br>";

        $nombre = "Eduardo";

        echo $nombre;

        $edad = 18;
        $statura = 1.80;
        $carrera = "Ingeniería en Computación";

        echo "<br>";

        echo $edad;
        echo "<br>";
        echo $statura;
        echo "<br>";
        echo $carrera;
        echo "<br>";

        // Muestra información sobre una variable
        var_dump($nombre);
    */

    /*
        // Reglas para nombres de la variable
        $_un_valor = 'abc'; // Bien
        $1numero = 1.00; // Mal
        $sin$signos% = '&^%'; // Mal
        $nombre_1_completo = "ok"; // Bien
        $nombre_1_Completo = 'no' // Case Sensitive
        $estiloCamelCase = true; // camel case
    */

    // TYPE JUGGLING - MANIPULACION DE TIPOS
    /* intenta convertir el tipo de dato del valor de una variable a otra cuando hay un contexto
    en el que el tipo de dato que se requiere es diferente */

    /*
        // $a = "8";
        // $a = "8.8";
        $a = false;
        $b = 2;

        // var_dump($a + $b);
        echo($a); // php lo manipula como no mostrando nada
    */

    // CONCATENACION
    $a = "8";
    $b = 2;

    // var_dump($a . $b);
    // var_dump($b . $b);
    var_dump($a . $a);
?>