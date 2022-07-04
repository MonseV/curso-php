<?php
    //          0          1          2
    $menu = ['Inicio', 'Cursos', 'Mi perfil'];

    // var_dump( count($menu) ); // Cuenta todos los elementos
                                // de un array o de un objeto

    echo "con while: <br>";
    $i = 0;

    while ( $i < count($menu) ) {
        echo $menu[$i] . " ";
        $i++;
    }

    echo "<br><br>";

    echo "con for: <br>";
    for ($i = 0; $i < count($menu); $i++) {
        echo $menu[$i] . " ";
    }
?>