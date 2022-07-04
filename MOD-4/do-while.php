<!-- El bucle do … while es muy similar a while,
     en el sentido que ambos evaluán una expresión y si ésta resulta true,
     ejecutan lo que haya en el cuerpo del bucle.

     La única diferencia es que
     while primero evalúa la expresión antes de ejecutar el código de su cuerpo.
     Por lo que a veces es posible que no se ejecute ese código si la condición no se cumple.
-->

    <!-- Ejemplo: la expresión en el while es false y nunca se ejecuta el código:  -->

    <?php
        echo "with while: ";
        $i = 1;
        while ($i < 0) {
        echo $i . " ";
        $i++;
        }
    ?>

<!-- Por otro lado,
     do-while (hacer…mientras) primero ejecuta el código en su cuerpo y luego evalúa la expresión.
     Por lo que si incluso si la expresión es falsa desde el principio el bucle se ejecutará
     al menos una vez.
-->

    <!-- Ejemplo: -->

    <?php
        echo "with do-while: ";
        $i = 1;
        do {
            echo $i . " ";
            $i++;
        } while ($i < 0);
    ?>

<!-- Conclusión:
     usa do-while cuando necesites que el código que tienes en el cuerpo del bucle 
     se ejecute al menos una vez.
-->