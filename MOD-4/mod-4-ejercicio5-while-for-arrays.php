<?php
    /* Ejercicio  Bucle while y for con arreglos
    Realiza los siguientes dos ejercicios tanto
    con bucle while() como con bucle for()

    Teniendo en cuenta el arreglo
        $numeros = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    escribe un programa que itere sobre el arreglo
    y muestre solo los números del 4 al 8.
    */

    //          0  1  2  3  4  5  6  7  8  9  10
    $numeros = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

    // $i = 4;
    // while ($i <= 8) {
    //     echo $numeros[$i] . "<br>";
    //     $i++;
    // }


    // for ($i = 4; $i <= 8 ; $i++) {
    //     echo $numeros[$i] . "<br>";
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Bucle While y For con Arreglos</title>
</head>
<body>
    <h2>Con While</h2>
    <?php $i = 4; while( $i <= 8) : ?>
        <?php echo $numeros[$i] . "<br>"; $i++; ?>
    <?php endwhile; ?>
    <h2>Con For</h2>
    <?php for($j = 4; $j <= 8; $j++) : ?>
        <?php echo $numeros[$j] . "<br>"; ?>
    <?php endfor; ?>
</body>
</html>