<?php
// http://localhost/azul-php/MOD-6/json.php


// Escribir contenido JSON

$oneMoreBook = [
    ['title' => 'Frankestein',
     'author' => 'Mary Shelley'
    ],
    ['title' => 'Viaje al centro de la tierra',
     'author' => 'Julio Verne'
    ]
];

$newBookJSON = json_encode($oneMoreBook); // codifica un Array a formato JSON

file_put_contents('./libros.json', $newBookJSON); // escribe contenido en un archivo

echo "<br>DATOS INGRESADOS EXITOSAMENTE! :D";


// Leer contenido JSON

$bookJSON = file_get_contents('./libros.json'); // lee el contenido de un archivo y esta en formato
                                                // JSON
// var_dump( $bookJSON );
// echo "<br><br>";

$booksArr = json_decode($bookJSON, true); // con el true decodifica un objeto JSON en un array PHP
// $booksArr = json_decode($bookJSON); // decodifica un objeto JSON en un objeto PHP

var_dump( $booksArr );