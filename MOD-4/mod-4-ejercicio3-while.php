<?php
    /* Ejercicio 3 Bucle while
    Escribe un programa para mostrar el recuento,
    de 5 a 15 utilizando el bucle while
    */

    $i = 5;

    // while ($i <= 15) {
    //     echo "<br>";
    //     echo $i. "<br><br>";
    //     $i++;
    // }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio Bucle While</title>
    </head>
    <body>
        <?php while ( $i <= 15) : ?>
            <p><?= $i ?></p>
            <?php $i++; ?>
        <?php endwhile; ?>
    </body>
</html>