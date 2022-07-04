<?php

    $book = [
        'title' => '1984',
        'author' => 'George Orwell',
        'editorial' => 'DEBOLSILLO'
    ];

    // POR VALOR
    /* para todos los elemento de book crea un varible b
        y esta representa cada elemento dentro del bucle
    */
    // foreach ( $book as $b ) {
    //     echo $b . "<br>";
    // }


    // POR LLAVE -> VALOR
    foreach ( $book as $key => $value ) {
        echo $key . " => " . $value . "<br>";
    }
?>