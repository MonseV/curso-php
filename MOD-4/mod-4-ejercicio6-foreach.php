<?php
    /* Teniendo en cuenta el arreglo */

        $paisesEuropeos = [
            "Italia"=>"Roma",
            "Belgica"=> "Bruselas",
            "Dinamarca"=>"Copenhagen",
            "Francia" => "Paris",
            "Alemania" => "Berlin",
            "Grecia" => "Atenas",
            "Irlanda"=>"Dublin",
            "Países Bajos"=>"Amsterdam",
            "Portugal"=>"Lisboa",
            "España"=>"Madrid"
        ];

    /* el cual está constituido por elementos que por medio de llaves y
    valores representan un país de Europa y su capital respectivamente.

    Crea un programa que itere sobre el arreglo
    y que empleando las llaves y los valores muestre un mensaje
    como éste ejemplo: La capital de Países Bajos es Amsterdam.
    */

    // foreach( $paisesEuropeos as $key => $value ) {
    //     echo "La capital de ". $key . " es " . $value . "<br>";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio  Bucle Foreach</title>
</head>
<body>
    <h1>Paises Europeos y su capital</h1>
    <?php foreach( $paisesEuropeos as $key => $value ) : ?>
        <ul>
            <li>
                La capital de <strong><?= $key ?></strong> es <strong><em><?= $value ?></em></strong>
            </li>
        </ul>
    <?php endforeach; ?>
</body>
</html>