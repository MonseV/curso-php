<?php
    /* Ejercicio 1: if-else

    Mensaje de sitio disponible

    Codifica un script que imprima un mensaje u otro dependiendo de si el valor de la variable es true o false.

    1.Define una variable: $disponible = true;
    2.Escribe una estructura if-else
    3.En el cuerpo de if imprime con echo un mensaje: “El sitio está disponible”
    4.En el cuerpo de else imprime un mensaje con echo: “El sitio no está disponible”
    5.Prueba ingresando la variable entre los paréntesis de if y comprueba el resultado
    6.Verifica que el mensaje en else también se imprima cuando la variable es false
    */
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio If-Else</title>
    </head>
    <body>
        <?php
            // $disponible = true;
            $disponible = false;

            if( $disponible )
            {
                echo "<h1>El sitio está disponible</h1>";
            }
            else
            {
                echo "<h1>El sitio no está disponible</h1>";
            }
        ?>
    </body>
</html>

