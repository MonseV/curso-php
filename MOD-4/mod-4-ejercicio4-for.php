<?php
    /* Ejercicio  Bucle for
    Escribe un programa para mostrar el recuento,
    de 0 a 30 y que al finalizar el bucle
    muestre la suma de todos esos números:

    Resultado:

        0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 21 22 23 24 25 26 27 28 29 30

        Total: 465
    */

    // $sum = 0;

    // for ( $i = 0; $i <= 30; $i++) {
    //     echo $i . " ";
    //     $sum += $i;
    // }
    // echo "<br><br>Total: " . $sum;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio Bucle For</title>
    </head>
    <body>
        <?php $sum = 0; ?>
        <?php for ($i = 0; $i <= 30; $i++) : ?>
            <?php echo $i; $sum += $i ?>
        <?php endfor; ?>
        <p>Total: <?= $sum ?></p>
    </body>
</html>