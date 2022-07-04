<?php
    //          0          1           2
    $menu = ['Inicio', 'Cursos', 'Mi perfil']; // Array en forma de Lista
    var_dump($menu);
    echo "<br>";

    echo $menu[0];
    echo $menu[2];
    echo $menu[1];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays 1</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><?php echo $menu[0]; ?></li>
                <li><?php echo $menu[1]; ?></li>
                <li><?php echo $menu[2]; ?></li>
            </ul>
        </nav>
    </body>
</html>