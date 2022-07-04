<?php
    $username = "Carlos";
    $logged_in = false;
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Condicional If</title>
    </head>
    <body>
        <nav> <!-- Bloque principal de enlaces -->
            <ul>
                <li>Inicio</li>
                <li>Cursos</li>
                <li>Grupos</li>
                <?php
                    if ( $logged_in )
                    { // SI ES TRUE EJECUTA ESTO
                        // echo "<li>$username</li>";
                        echo '<li>' . $username . '</li>';
                    }
                    else
                    { // SI ES FALSE EJECUTA ESTO
                        echo "<li>Iniciar Sesión</li>";
                    }
                    echo "Hola mundo!";
                    echo "Hola mundo!";
                    echo "Hola mundo!";
                    echo "Hola mundo!";
                    echo "Hola mundo!";
                ?>
            </ul>
        </nav>
    </body>
</html>