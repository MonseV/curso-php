<?php
    /* Ejercicio 2 (array map)
    1.Crea un nuevo documento PHP (mod-3-ejercicio-2.php) y agrega la estructura básica HTML5.
    2.Define un array llamado: $telefono
    3.Rellena el array con las claves: “marca”, “modelo”, “color”, “capacidad”, “ram” y asigna valores
      correspondientes a cada clave, por ejemplo: “HUAWEI”, “P30”, “tornasol”, 128, 16
    4.En un elemento <h1> imprime la marca y el modelo provenientes del el array
    5.Debajo del <h1> escribe 3 párrafos (uno debajo del otro)
    6.En el 1er párrafo imprime: el valor de la clave color
    7.En el 2do párrafo imprime: el valor de la capacidad
    8.En el 3er párrafo imprime: el valor de la ram
    resultado similar a:

    HUAWEI
    Color – Tornasol

    Capacidad de memoria – 128 GB

    Memoria RAM – 16GB
    */

    $telefono = [
        'marca' => 'HUAWEI',
        'modelo' => 'P30',
        'color' => 'Tornasol',
        'capacidad' => 128,
        'ram' => 16
    ];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio Array Map</title>
    </head>
    <body>
        <h1><?= $telefono['marca'] . ' ' .$telefono['modelo']; ?></h1>
        <p>Color - <?= $telefono['color'] ?></p>
        <p>Capacidad de memoria - <?= $telefono['capacidad']?> GB</p>
        <p>Memoria RAM - <?= $telefono['ram']; ?> GB</p>
    </body>
</html>