<?php

    require_once('./type-declaration.php');

    echo "<br>";
    addNumbers(9, 11, true);
    echo "<br>";

    echo "Hola, soy el documento PHP";

    /* solo se incluirá la primera vez que se invoque y las llamadas posteriores serám ignoradas */

    // require_once('./pagina.html'); // hace lo mismo que require

    // include_once('./pagina.html'); // hace lo mismo que include


    /* intentará encontrar e incluir el archivo especificado cada vez que se invoca */

    // Se utiliza cuando el código es importante (Funciones reutilizables de PHP, configuraciones…)
    // require('./pagina.html'); // si no lo encuentra, arroja un error y la ejecución del script
                              // se detiene

    // Se utiliza cuando el código no es vital para la ejecución del script
    //(cabeceras y pies HTML o similares)
    // include('./pagina.html'); // si no lo encuentra, arroja una advertencia pero el script
                              // continuara con la ejecucion


    echo "¿.....?";
?>