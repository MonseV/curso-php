<?php
    $menu = ['Inicio', 'Cursos', 'Mi perfil']; // Array en forma de Lista

    $user = [
        'nombre' => 'Carlos',
        'apellido' => 'Hernández',
        'edad' => 28,
        'username' => 'CarlosH',
        'intereses' => ['Desarrollador web', 'Desarrollador de videojuegos']
    ] // Array en forma de Mapa
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrays 2</title>
    </head>
    <body>
        <nav>
            <ul>
                <li><?php echo $menu[0]; ?></li>
                <li><?php echo $menu[1]; ?></li>
                <li><?php echo $menu[2]; ?></li>
            </ul>
        </nav>

        <h1>Bienvenido, <?php echo $user['username']; ?></h1>
        <h2>Éstos son tus datos: </h2>
        <p>Nombre y Apellido: <?php echo $user['nombre'] . ' ' . $user['apellido']; ?></p>
        <p>Intereses: </p>
            <ul>
                <li><?php echo $user['intereses'][0]; ?></li>
                <li><?php echo $user['intereses'][1]; ?></li>
            </ul>
    </body>
</html>